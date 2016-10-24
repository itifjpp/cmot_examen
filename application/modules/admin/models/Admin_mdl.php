<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_mdl
 *
 * @author felipe de jesus
 */
class Admin_mdl extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function _get_preguntas($cc) {
        return $this->db
                ->where('casoclinico_id',$cc)
                ->order_by('pregunta_id','ASC')
                ->get('preguntas')
                ->result_array();
    }
    public function _get_respuestas($preg) {
        return $this->db
                ->where('preguntas.pregunta_id=respuestas.pregunta_id')
                ->where('preguntas.pregunta_id',$preg)
                ->get('preguntas,respuestas')
                ->result_array();
    }
    public function _resultados($user) {
        return $this->db
                ->where('resultado_evaluacion.resultado_pregunta=preguntas.pregunta_id')
                ->where('casosclinicos.casoclinico_id=preguntas.casoclinico_id')
                ->where('preguntas.pregunta_id=respuestas.pregunta_id')
                ->where('resultado_evaluacion.resultado_respuesta=respuestas.respuesta_id')
                ->where('resultado_evaluacion.casoclinico_id=casosclinicos.casoclinico_id')
                ->where('resultado_evaluacion.usuario_id',$user)
                ->get('preguntas, respuestas, resultado_evaluacion,casosclinicos')
                ->result_array();
    }   
    
}
