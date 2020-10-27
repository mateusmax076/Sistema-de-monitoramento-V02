<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agente_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroAgente(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente
        $data = array(
            'nomecompleto'=> $this->input->post('nomecompleto'), //Recebe os dados via post
            'matricula'=> $this->input->post('matricula'),
            'nucleo'=> $this->input->post('nucleo'),
            'unidadeprisional'=> $this->input->post('unidadeprisional'),
            'emailinstitucional'=> $this->input->post('emailinstitucional')
        );
        $this->db->insert('tbl_agente', $data);
    }

    
}