<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_mdl
 *
 * @author felipe de jesus
 */
class Login_mdl extends CI_Model{
    //put your code here
    public function _acceder($user,$pass) {
        return $this->db
                ->where('usuario_user',$user)
                ->where('usuario_pass',  md5($pass))
                ->get('usuarios')
                ->result_array();
    }
    public function _inser_user($data) {
        return $this->db
                ->insert('cmot_usuarios',$data);
    }
    public function _is_admin() {
        return $this->db
                ->where('cmot_usuarios.rol_id=cmot_rol.rol_id')
                ->where('cmot_usuarios.acceso_is=cmot_administrador.admin_id')
                ->where('cmot_rol.rol_id','1')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_usuarios, cmot_rol, cmot_administrador')
                ->result_array();  
    }
    public function _is_medico_login() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_rol.rol_id=cmot_usuarios.rol_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_medicos, cmot_usuarios, cmot_rol')
                ->result_array();  
    }    
    public function _is_medico() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_rol.rol_id=cmot_usuarios.rol_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_medicos, cmot_usuarios, cmot_rol')
                ->result_array();  
    }    
    public function _get_user_reset($mail,$user) {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_medicos.medico_email',$mail)
                ->where('cmot_usuarios.usuario_user',$user)
                ->get('cmot_usuarios, cmot_medicos')
                ->result_array();
    }
}
