<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';
class Login extends Config{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->load->view('login');
    }
    public function acceder() {
        $sql=  $this->login_mdl->_acceder($this->input->post('txtuser'),$this->input->post('txtpass'));
        if(!empty($sql)){
            if($sql[0]['usuario_status_eliminado']==''){
                if($sql[0]['usuario_status']!='Bloqueado'){
                    $data=array(
                        'usuario_ultimo_acceso'=>  $this->input->post('usuario_ultimo_acceso'),
                        'usuario_ultimo_acceso_hora'=>  $this->input->post('usuario_ultimo_acceso_hora')
                    );
                    $this->config_mdl->_update_data('cmot_usuarios',$data,array(
                        'rol_id'=>'2',
                        'usuario_id'=>$sql[0]['usuario_id']
                    ));
                    $_SESSION['idUser']=$sql[0]['usuario_id'];
                    $_SESSION['idRol']=$sql[0]['rol_id'];
                    if($_SESSION['idRol']=='2'){
                        $this->config_mdl->_insert_history('N/E','INICIO DE SESIÓN','INICIO DE SESIÓN');
                    }
                    
                    $this->setOutput(array(
                        'accion'=>'1',
                        'rol_id'=>$sql[0]['rol_id']
                    ));
                }else{
                    $this->setOutput(array(
                        'accion'=>'3',
                        'rol_id'=>''
                    ));
                } 
            }else{
                $this->setOutput(array(
                    'accion'=>'4',
                    'rol_id'=>''
                ));    
            }

        }else{
            $this->setOutput(array(
                'accion'=>'2',
                'rol_id'=>''
            ));
            
        }
    }
    public function check_user() {
        $sql=  $this->config_mdl->_get_data_condition('cmot_usuarios',array(
            'usuario_user'=>  $this->input->post('user')
        ));
        if(empty($sql)){
            $this->setOutput(array('accion'=>'1','val'=>  $this->input->post('user'))); 
        }else{
            $this->setOutput(array('accion'=>'2','val'=>  $this->input->post('user'))); 
        }
    }
    public function registrarme() {
        $sql['config']=  $this->config_mdl->_get_data_condition('cmot_conf_registro',array(
            'conf_registro_status'=>'Activo'
        ));
        $this->load->view('registro',$sql);
    }
    public function insert_registro() {
        $url=  $this->input->post('medico_nombre').' '.$this->input->post('medico_apellidos');
        $check_url=  $this->config_mdl->_get_data_condition('cmot_medicos',array('medico_url'=>  $this->cambiar_texto($url)));
        $sql_max=  $this->config_mdl->_get_last_id('cmot_medicos','medico_id');
        if(empty($check_url)){
            $medico_url=$url;
        }else{
            $medico_url=$url.$sql_max;
        }
        $data_medico=array(
            'medico_nombre'=>  $this->input->post('medico_nombre'),
            'medico_apellidos'=>  $this->input->post('medico_apellidos'),
            'medico_email'=>  $this->input->post('medico_email'),
            'medico_url'=>  $this->cambiar_texto($medico_url),
            'medico_tipo'=>'En proceso',
            'medico_perfil'=>'default.png'
        );

        if($this->config_mdl->_insert('cmot_medicos',$data_medico)){
            $id=$this->config_mdl->_get_last_id('cmot_medicos','medico_id');
            $data_user=array(
                'usuario_user'=>  $this->input->post('usuario_user'),
                'usuario_pass'=>  md5($this->input->post('usuario_pass')),
                'rol_id'=>'2',
                'acceso_is'=> $id 
            );
            $this->config_mdl->_insert('cmot_usuarios',$data_user);
            //$this->config_mdl->_insert('cmot_medico_curriculum',array('medico_id'=>$id));
            //$this->config_mdl->_insert('cmot_medico_residencia',array('medico_id'=>$id));
            $this->config_mdl->_insert_history('cmot_medicos,','INSERT','Registro de nuevo médico en proceso de certificación');
            $this->config_mdl->_insert('cmot_pagos',array('medico_id'=>$id));
            $this->config_mdl->_insert('cmot_medicos_status_info',array('medico_id'=>$id));
            $id_session=$this->config_mdl->_get_last_id('cmot_usuarios','usuario_id');
            $this->cmot_mail(array(
                'mail'=>$this->input->post('medico_email'),
                'subject'=>'Confirmación de registro en la plataforma del CMOT',
                'msj1'=>'!Gracias por registrarte¡',
                'msj2'=>'A continuación encontrarás tu claves de acceso para el ingreso a la plataforma CMOT.',
                'msj3'=>'Usuario: '.$this->input->post('usuario_user').'<br>Contraseña:'.$this->input->post('usuario_pass'),
                'info'=>'No'
            ));
            $_SESSION['idUser']=$id_session ;
            $_SESSION['idRol']=2;
            $this->setOutput(array(
                'accion'=>'1',
                'rol_id'=>'2'
            ));
        }else{
            $this->setOutput(array(
                'accion'=>'2',
                'rol_id'=>''
            )); 
        }
    }
    public function reset_pass() {
        $this->load->view('reset_pass');
    }
    public function check_user_reset() {
        $sql=  $this->login_mdl->_get_user_reset($this->input->post('txtmail'),  $this->input->post('txtuser'));
        if(!empty($sql)){
            $this->cmot_mail(array(
                'mail'=>$this->input->post('txtmail'),
                'subject'=>'Enlace de recuperación de contraseña',
                'msj1'=>'',
                'msj2'=>'Click en el siguiente enlace para cambiar su contraseña',
                'msj3'=>'<center><a href="'.  base_url().'login/cambiar_pass?u='.  base64_encode($sql[0]['usuario_id']).'&e='.  base64_encode($this->input->post('txtmail')).'">Clic aqui</a></center>', 
                'info'=>'No'
            ));
            
            $this->setOutput(array('accion'=>'1','id'=>$sql[0]['usuario_id']));
        }else{
            $this->setOutput(array('accion'=>'2'));
        }
    }
    public function cambiar_pass() {
        $this->load->view('cambiar_pass');
    }
}
