<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config_mdl
 *
 * @author felipe de jesus
 */
class Config_mdl extends CI_Model{
    public function _insert($table,$data) {
        return $this->db->insert($table,$data);
    }
    public function _get_data($table) {
        return $this->db->get($table)->result_array();
    }
    public function _get_data_condition($table,$condicion) {
        return $this->db->get_where($table,$condicion)->result_array();
    }
    public function _get_data_order($table,$attr,$order) {
        return $this->db->order_by($attr,$order)->get($table)->result_array();
    }
    public function _update_data($table,$data,$condicion) {
        return $this->db->update($table,$data,$condicion);
    }
    public function _delete_data($table,$condicion) {
        return $this->db->delete($table,$condicion);
    } 
    public function _get_last_id($table,$id) {
        $sql= $this->db->select_max($id,'last_id')->get($table)->result_array();
        return $sql[0]['last_id'];
    }
    public function _query($query) {
        return $this->db->query($query)->result_array();
    }
    public function _insert_history($table,$accion,$detalles) {
        return $this->db->insert('cmot_history',array(
            'history_table'=>$table,
            'history_accion'=>$accion,
            'history_detalles'=>$detalles,
            'history_fecha'=>  date('Y/m/d'),
            'history_hora'=>  date('h:i:s A'),
            'history_rol'=>$_SESSION['idRol'],
            'history_user'=>$_SESSION['idUser']
        ));
    }
    public function _sum_data($table,$campo,$condition) {
        $sql= $this->db
                ->where($condition)
                ->select_sum($campo,'total')
                ->get($table)
                ->result_array();
        if($sql[0]['total']>0){
            return $sql[0]['total'];
        }else{
            return 0;
        }
        
    }
}
