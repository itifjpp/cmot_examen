<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';
class Admin extends Config{
    public function __construct() {
        parent::__construct();
    }
    public function index() {

        $this->load->view('principal');
    }
    public function casosclinicos() {
        $sql['Gestion']=  $this->config_mdl->_get_data('casosclinicos');
        $this->load->view('admin_casosclinicos',$sql);
    }
    public function casosclinicos_add() {
        $sql['info']=  $this->config_mdl->_get_data_condition('casosclinicos',array(
            'casoclinico_id'=>  $this->input->get('c')
        ));
        $this->load->view('admin_casosclinicos_add',$sql);
    }
    public function insert_casoclinico() {
        $data=array(
            'casoclinico_nombre'=>  $this->input->post('casoclinico_nombre'),
            'casoclinico_descripcion'=>  $this->input->post('casoclinico_descripcion'),
            'casoclinico_fecha'=>  date('Y/m/d'),
            'casoclinico_hora'=>date('h:i:s A')
        );
        if($this->input->post('accion')=='add'){
            if($this->config_mdl->_insert('casosclinicos',$data)){
                $this->setOutput(array('accion'=>'1'));
            }
        }else{
            unset($data['casoclinico_fecha']);
            unset($data['casoclinico_hora']);
            if($this->config_mdl->_update_data('casosclinicos',$data,array('casoclinico_id'=>  $this->input->post('casoclinico_id')))){
                $this->setOutput(array('accion'=>'1'));
            }
        }
    }
    public function casosclinicos_img() {
        $sql['Gestion']=  $this->config_mdl->_get_data_condition('casos_clinicos_img',array(
            'casoclinico_id'=>  $this->input->get('cc')
        ));
        $this->load->view('admin_casosclinicos_img',$sql);
    }
    public function eliminar_casoclinico() {
        $id=  $this->input->post('id');
        foreach ($this->config_mdl->_get_data_condition('preguntas',array('casoclinico_id'=>$id)) as $preg) { 
            foreach ($this->config_mdl->_get_data_condition('respuestas',array('pregunta_id'=>$preg['pregunta_id'])) as $res) { 
                $this->config_mdl->_delete_data('respuestas',array('pregunta_id'=>$preg['pregunta_id']));
            }
        }
        $this->config_mdl->_delete_data('preguntas',array('casoclinico_id'=>$id));
        $this->config_mdl->_delete_data('casosclinicos',array('casoclinico_id'=>$id));
        $this->setOutput(array('accion'=>'1'));
    }
    public function preguntas() {
        $sql['Gestion']=  $this->config_mdl->_get_data_condition('preguntas',array(
            'casoclinico_id'=>  $this->input->get('cc')
        ));
        $this->load->view('admin_preguntas',$sql);
    }
    public function preguntas_add() {
        $sql['info']=  $this->config_mdl->_get_data_condition('preguntas',array(
            'pregunta_id'=>  $this->input->get('p')
        ));
        $this->load->view('admin_preguntas_add',$sql);
    }
    public function insert_preguntas() {
        $data=array(
            'pregunta_nombre'=>  $this->input->post('pregunta_nombre'),
            'casoclinico_id'=>  $this->input->post('casoclinico_id')
        );
        if($this->input->post('accion')=='add'){
            if($this->config_mdl->_insert('preguntas',$data)){
                $this->setOutput(array('accion'=>'1'));
            }
        }else{
            if($this->config_mdl->_update_data('preguntas',$data,array('pregunta_id'=>  $this->input->post('pregunta_id')))){
                $this->setOutput(array('accion'=>'1'));
            }
        }
    }
    public function eliminar_pregunta() {
        $this->config_mdl->_delete_data('respuestas',array('pregunta_id'=>  $this->input->post('id')));
        $this->config_mdl->_delete_data('preguntas',array('pregunta_id'=>  $this->input->post('id')));
        $this->setOutput(array('accion'=>'1'));
    }
    public function respuestas() {
        $sql['pregunta']=  $this->config_mdl->_get_data_condition('preguntas',array(
            'pregunta_id'=>  $this->input->get('preg')
        ));
        $sql['Gestion']=  $this->config_mdl->_get_data_condition('respuestas',array(
            'pregunta_id'=>  $this->input->get('preg')
        ));
        $this->load->view('admin_respuestas',$sql);
    }
    public function respuestas_add() {
        $sql['info']=  $this->config_mdl->_get_data_condition('respuestas',array('respuesta_id'=>  $this->input->get('r')));
        $this->load->view('admin_respuestas_add',$sql);
    }
    public function insert_respuestas() {
        $data=array(
            'respuesta_nombre'=>  $this->input->post('respuesta_nombre'),
            'respuesta_valor'=>  $this->input->post('respuesta_valor'),
            'pregunta_id'=>  $this->input->post('pregunta_id')
        );
        if($this->input->post('accion')=='add'){
            if($this->config_mdl->_insert('respuestas',$data)){
                $this->setOutput(array('accion'=>'1'));
            }
        }else{
            if($this->config_mdl->_update_data('respuestas',$data,array('respuesta_id'=>  $this->input->post('respuesta_id')))){
                $this->setOutput(array('accion'=>'1'));
            }
        }
    }
    public function eliminar_respuesta() {
        $this->config_mdl->_delete_data('respuestas',array('respuesta_id'=>  $this->input->post('id')));
        $this->setOutput(array('accion'=>'1'));
    }
    public function resultados() {
        $sql['Gestion']=  $this->config_mdl->_query('SELECT * FROM usuarios, resultado_evaluacion WHERE 
            usuarios.usuario_id=resultado_evaluacion.usuario_id GROUP BY resultado_evaluacion.usuario_id');
        $this->load->view('admin_resultados',$sql);
    }
    public function resultados_usuario() {
        $sql['info']=  $this->config_mdl->_get_data_condition('usuarios',array(
            'usuario_id'=>  $this->input->get('u')
        ));
        $sql['Gestion']=  $this->admin_mdl->_resultados($this->input->get('u'));
        $sql['total_preg']=  $this->config_mdl->_get_data('preguntas');
        $this->load->view('admin_resultados_usuario',$sql);
    }
    public function eliminar_evaluacion() {
        $this->config_mdl->_delete_data('resultado_evaluacion',array('usuario_id'=>  $this->input->post('id')));
        $this->setOutput(array('accion'=>'1'));
    }
    public function inser_img_cc() {
        $data=array(
            'casoclinico_img'=>  $this->input->post('casoclinico_img'),
            'casoclinico_id'=>  $this->input->post('casoclinico_id')
        );
        if($this->config_mdl->_insert('casos_clinicos_img',$data)){
            $this->setOutput(array('accion'=>'1'));
        }
    }
    public function eliminar_img_cc() {
        $this->config_mdl->_delete_data('casos_clinicos_img',array('casoclinico_id'=>  $this->input->post('id')));
        $this->setOutput(array('accion'=>'1'));
    }
}
