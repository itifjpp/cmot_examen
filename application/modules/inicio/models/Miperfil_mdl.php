<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Miperfil_mdl
 *
 * @author felipe de jesus
 */
class Miperfil_mdl extends CI_Model{
    //put your code here
    public function _get_servicios() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_servicios.medico_id=cmot_medicos.medico_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_usuarios, cmot_medicos, cmot_m_servicios')
                ->result_array();
    }
    public function _insert($tabla,$data) {
        return $this->db->insert($tabla,$data);
    }
    public function _update_info($data,$medico) {
        return $this->db
                ->where('medico_id',$medico)
                ->update('cmot_medicos',$data);
    }
    public function _get_trayectoria() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_trayectoria.medico_id=cmot_medicos.medico_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_usuarios, cmot_medicos, cmot_m_trayectoria')
                ->result_array();
    }
    public function _get_formacion() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_m_formacion.medico_id=cmot_medicos.medico_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->get('cmot_usuarios, cmot_medicos, cmot_m_formacion')
                ->result_array();
    }
    public function _get_history_pagos() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_pagos.medico_id=cmot_medicos.medico_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->order_by('cmot_pagos.pago_id','DESC')
                ->get('cmot_pagos,cmot_medicos,cmot_usuarios')
                ->result_array();
    }
    public function _get_history_pagos_total() {
        return $this->db
                ->where('cmot_usuarios.acceso_is=cmot_medicos.medico_id')
                ->where('cmot_pagos.medico_id=cmot_medicos.medico_id')
                ->where('cmot_usuarios.usuario_id',$_SESSION['idUser'])
                ->select_sum('cmot_pagos.pago_abono')
                ->get('cmot_pagos,cmot_medicos,cmot_usuarios')
                ->result_array();
    }
    public function _get_hopitales_residencias($medico) {
        return $this->db
                ->where('cmot_estados.estado_id=cmot_medico_residencia.estado_id')
                ->where('cmot_medico_residencia.hospital_id=cmot_hospitales.hospital_id')
                ->where('cmot_medico_residencia.medico_id=cmot_medicos.medico_id')
                ->where('cmot_medicos.medico_id',$medico)
                ->get('cmot_medico_residencia,cmot_medicos,cmot_hospitales,cmot_estados')
                ->result_array();
    }
    public function _get_tabulador($tab) {
        return $this->db
                ->where('cmot_tabulador_puntos.tabulador_id=cmot_tabulador.tabulador_id')
                ->where('cmot_tabulador.tabulador_id',$tab)
                ->get('cmot_tabulador_puntos,cmot_tabulador')
                ->result_array();
    }
}
