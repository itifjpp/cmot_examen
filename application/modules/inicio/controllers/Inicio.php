<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inicio
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';

class Inicio extends Config{
    //put your code here
    public function __construct() {
        parent::__construct();
        //$this->load->library('My_PHPMailer');
    }
    public function _404() {
        $this->load->view('inicio_404');
    }
    public function estatutos() {
        $this->load->view('inicio_estatutos');
    }
    public function index(){
        $this->load->view('inicio_index');
    }
    public function casosclinicos() {
        $json_string = file_get_contents("https://cmot.org.mx/api/miperfil?user=".  base64_decode($this->input->get('u')));
        $sql['info']=  json_decode($json_string,true);
        $sql_=  $this->config_mdl->_get_data_condition('casosclinicos_usuarios',array(
            'usuario_id'=>  base64_decode($this->input->get('u'))
        ));
        if(empty($sql_)){
            foreach ($this->config_mdl->_get_data('casosclinicos') as $value) {
                $this->config_mdl->_insert('casosclinicos_usuarios',array(
                    'casoclinico_id'=>$value['casoclinico_id'],
                    'casoclinico_status'=>'Pendiente',
                    'usuario_id'=>  base64_decode($this->input->get('u')) 
                ));
            }
        }
        
        $this->load->view('inicio_examen',$sql);
    }
    public function examen() {
        $json_string = file_get_contents("https://cmot.org.mx/api/miperfil?user=".  base64_decode($this->input->get('u')));
        $sql['info']=  json_decode($json_string,true);
        $sql['examen']=  $this->get_examen();
        $sql['casosclinicos']=  $this->config_mdl->_get_data('casosclinicos');
        $sql['check_user']=  $this->config_mdl->_get_data_condition('resultado_evaluacion',array(
            'usuario_id'=>  base64_decode($this->input->get('u'))
        ));
        $sql['resultados']=  $this->admin_mdl->_resultados(base64_decode($this->input->get('u')));
        $this->load->view('inicio_examen',$sql);
    }
    
    public function get_examen() {
        foreach ($this->config_mdl->_get_data('casosclinicos') as $cc) { 
            $result.='<div class="caso_clinico caso_clinico_'.$cc['casoclinico_id'].'" data-casoclinico="'.$cc['casoclinico_id'].'" style="display:none">';
                $result.='<h3>Caso Clínico: '.$cc['casoclinico_nombre'].'</h3>';
                $result.='<div class="row">';
                foreach ($this->config_mdl->_get_data_condition('casos_clinicos_img',array('casoclinico_id'=>$cc['casoclinico_id'])) as $cc_img) { 
                    $result.='<div class="col-md-4">';
                        $result.='<img src="'.  base_url().'assets_dash/img/casosclinicos/'.$cc_img['casoclinico_img'].'" class="zoom_img_pregunta" style="width:100%">';
                    $result.='</div>';
                }
                
                $result.='</div>';
                
                $result.='<h5 class="text-justify">'.$cc['casoclinico_descripcion'].'</h5>';
            foreach ($this->admin_mdl->_get_preguntas($cc['casoclinico_id']) as $preg) {
                $i++;
                $result.='<div class="pregunta_seccion"><br>';

                    $result.='<div class="col-md-12" >';
                        $result.='<h5 class="text-justify" style="color:#4267B2">'.$i.'.- '.$preg['pregunta_nombre'].'</h5>';
                        $result.='<div class="btn-group btn-group-vertical" data-toggle="buttons">';
                            foreach ($this->admin_mdl->_get_respuestas($preg['pregunta_id']) as $value) { 
                                $result.='<label class="btn select_respuesta" data-id="'.$preg['pregunta_id'].'" data-preg-res="'.$preg['pregunta_id'].';'.$value['respuesta_id'].';'.$cc['casoclinico_id'].'">'; 
                                    $result.='<input type="radio" class="" name="'.$preg['pregunta_id'].'" value="'.  $preg['pregunta_id'].';'.$value['respuesta_id'].';'.$cc['casoclinico_id'].'">'; 
                                    $result.='<i class="fa fa-circle-o icono-acciones"></i>';
                                    $result.='<i class="fa fa-dot-circle-o icono-acciones"></i> ';
                                    $result.='<span style="color:black">  '.$value['respuesta_nombre'].'</span>';
                                $result.='</label>';
                            }
                        $result.='</div>';
                    $result.='</div>';
                $result.='</div>';
            }  
            $result.='</div>';
        }

        $result.='<div class="caso_clinico caso_clinico_TT209" data-casoclinico="TT209" style="height: 250px;display:none;">';
            $result.='<center><h4>Finalizar Exámen de Evaluación</h4><br><br>';
            $result.='<button class="btn btn-primary btn-finalizar-evaluacion pointer" type="button">Finalizar</button></center>';
        $result.='</div>';
        
        return $result;
    }
//    public function guardar() {
//        foreach ($this->admin_mdl->_get_preguntas() as $preg) {
//            $respuesta= explode(';', $this->input->post($preg['pregunta_id']));
//            $this->config_mdl->_insert('resultado_evaluacion',array(
//                'resultado_pregunta'=>$respuesta[0],
//                'resultado_respuesta'=>$respuesta[1],
//                'usuario_rfc'=>  $this->input->post('usuario_rfc'),
//                'usuario_id'=>  $this->input->post('usuario_id'),
//                'resultado_fecha'=>  date('Y/m/d'),
//                'resultado_hora'=>date('h:i:s A')
//            ));
//        }
//        $this->setOutput(array('accion'=>'1'));
//    } 
    public function ver_resultados() {
        $json_string = file_get_contents("https://cmot.org.mx/api/miperfil?user=".  base64_decode($this->input->get('u')));
        $sql['info']=  json_decode($json_string,true);
        $sql['total_preg']=  $this->config_mdl->_get_data_condition('preguntas',array(
            'casoclinico_id'=>  $this->input->get('cc')
        ));
        $sql['resultados']=  $this->admin_mdl->_resultados(base64_decode($this->input->get('u')));
        $this->load->view('inicio_resultados',$sql);
    }
    public function inicio_guardar_respuestas() {
        $respuesta= explode(';', $this->input->post('preg'));
        $data=array(
            'resultado_pregunta'=>$respuesta[0],
            'resultado_respuesta'=>$respuesta[1],
            'usuario_rfc'=>  $this->input->post('usuario_rfc'),
            'usuario_id'=>  $this->input->post('usuario_id'),
            'casoclinico_id'=>  $respuesta[2],
            'resultado_fecha'=>  date('Y/m/d'),
            'resultado_hora'=>date('h:i:s A')
        );
        $this->config_mdl->_delete_data('resultado_evaluacion',array(
            'resultado_pregunta'=>$respuesta[0],
            'usuario_id'=>  $this->input->post('usuario_id')
        ));
        $this->config_mdl->_insert('resultado_evaluacion',$data);
            $this->setOutput(array('accion'=>'1'));
    }
    public function inicio_eliminar_respuesta() {
        $this->config_mdl->_delete_data('resultado_evaluacion',array(
            'resultado_pregunta'=>  $this->input->post('preg'),
            'usuario_id'=>  $this->input->post('usuario_id'),
            'casoclinico_id'=>  $this->input->post('casoclinico_id'),
        ));
        $this->setOutput(array('accion'=>'1'));
    }
    public function preg() {
        echo preg_replace('/AMO/', 'ODIO', 'AMO las expresiones regulares');
    }
    public function inicio_finalizar_cc() {
        $data=array(
            'casoclinico_id'=>  $this->input->post('casoclinico_id'),
            'usuario_id'=>  $this->input->post('usuario_id')
        );
        if($this->config_mdl->_update_data('casosclinicos_usuarios',array('casoclinico_status'=>'Evaluado'),$data)){
            $this->setOutput(array('accion'=>'1'));
        }
    }
}
