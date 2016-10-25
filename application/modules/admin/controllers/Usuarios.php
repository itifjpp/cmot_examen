<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author felipe de jesus
 */
require_once APPPATH.'modules/config/controllers/Config.php';
class Usuarios extends Config{
    //put your code here
    public function index() {
        $sql['Gestion']=  $this->config_mdl->_get_data('usuarios');
        $this->load->view('admin_usuarios',$sql);
    }
    public function add() {
        $sql['info']=  $this->config_mdl->_get_data_condition('usuarios',array(
            'usuario_id'=>  $this->input->get('u')
        ));
        $this->load->view('admin_usuarios_add',$sql);
    }
    public function insert_user() {
        $data=array(
            'usuario_nombre'=>  strtoupper($this->input->post('usuario_nombre')),
            'usuario_apellidos'=>  strtoupper($this->input->post('usuario_apellidos')),
            'usuario_rfc'=>  strtoupper($this->input->post('usuario_rfc')),
            'usuario_registro'=>  strtoupper($this->input->post('usuario_registro')),
            'usuario_user'=>  $this->input->post('usuario_user'),
            'usuario_pass'=>  md5($this->input->post('usuario_pass')),
            'usuario_rol'=>  $this->input->post('usuario_rol')
        );
        if($this->input->post('accion')=='add'){
            $this->config_mdl->_insert('usuarios',$data);
        }else{
            if($this->input->post('usuario_pass')==''){
                unset($data['usuario_pass']);
            }
            unset($data['usuario_user']);
            $this->config_mdl->_update_data('usuarios',$data,array(
               'usuario_id'=>  $this->input->post('usuario_id') 
            ));
        }
        $this->setOutput(array('accion'=>'1'));
    }
    public function eliminar_user() {
        $this->config_mdl->_delete_data('usuarios',array(
            'usuario_id'=>  $this->input->post('usuario_id')
        ));
        $this->setOutput(array('accion'=>'1'));
    }
}
