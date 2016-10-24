<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inicio_mdl
 *
 * @author felipe de jesus
 */
class Inicio_mdl extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function _get_delegados($estado){
        return $this->db
                ->where('cmot_delegados.estado_id=cmot_estados.estado_id')
                ->where('cmot_estados.estado_nombre',$estado)
                ->get('cmot_estados, cmot_delegados')
                ->result_array();
    }
    public function _get_delegados_estado($estado){
        return $this->db
                ->where('cmot_delegados.estado_id=cmot_estados.estado_id')
                ->where('cmot_estados.estado_url',$estado)
                ->get('cmot_estados, cmot_delegados')
                ->result_array();
    }
    public function _search_medicos($campo) {
        return $this->db
                ->or_like(array('medico_nombre'=>$campo,
                    'medico_apellidos'=>$campo,
                    'medico_ciudad'=>$campo
                ))
                ->where('medico_status_vigencia','Vigente')
                ->get('cmot_medicos')
                ->result_array();
    }
    public function _search_medicos_all() {
        return $this->db
                ->get('cmot_medicos')
                ->result_array();
    }    
    public function insert_medico($data) {
        return $this->db
                ->insert('cmot_medicos',$data);
    }
    public function _max_medico() {
        return $this->db
                ->query('SELECT MAX(cmot_medicos.medico_id) as id FROM cmot_medicos')
                ->result_array();
    }
    public function _search_medico($url) {
        return $this->db
                ->where('medico_url',$url)
                ->get('cmot_medicos')
                ->result_array();
    }
    public function _search_medico_trayectoria($url) {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_trayectoria.medico_id=cmot_medicos.medico_id')
                ->where('cmot_medicos.medico_url',$url)
                ->get('cmot_usuarios, cmot_medicos, cmot_m_trayectoria')
                ->result_array();
    }
    public function _search_medico_servicios($url) {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_servicios.medico_id=cmot_medicos.medico_id')
                ->where('cmot_medicos.medico_url',$url)
                ->get('cmot_usuarios, cmot_medicos, cmot_m_servicios')
                ->result_array();
    }   
    public function _search_medico_formacion($url) {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_formacion.medico_id=cmot_medicos.medico_id')
                ->where('cmot_medicos.medico_url',$url)
                ->get('cmot_usuarios, cmot_medicos, cmot_m_formacion')
                ->result_array();
    }    
    public function _get_estados() {
        return $this->db
                ->get('cmot_estados')
                ->result_array();   
    }
    public function _get_data_medico($medico) {
        return $this->db
                ->where('cmot_estados.estado_id=cmot_medicos.estado_id')
                ->where('cmot_medicos.medico_id=',$medico)
                ->get('cmot_medicos,cmot_estados')
                ->result_array();
    }
    public function _get_medicos_cmo() {
        return $this->db
                ->where('cmot_estados.estado_id=cmot_cmo_medicos.estado_id')
                ->get('cmot_cmo_medicos, cmot_estados')
                ->result_array();
    }
    public function _get_medicos_femecot() {
        return $this->db
                ->where('cmot_estados.estado_id=cmot_femecot_medicos.estado_id')
                ->get('cmot_femecot_medicos, cmot_estados')
                ->result_array();
    }
    public function filtros() {
        return $this->db
                ->query("SELECT  galeria_categoria as cat FROM cmot_galeria WHERE galeria_categoria!='' GROUP BY galeria_categoria")
                ->result_array();
    }
}
