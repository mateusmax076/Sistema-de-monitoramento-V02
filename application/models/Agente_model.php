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


    function cadastroAgenteMaster(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente
        $data = array(
            'nomecompleto'=> $this->input->post('nomecompleto'), //Recebe os dados via post
            'matricula'=> $this->input->post('matricula'),
            'nucleo'=> $this->input->post('nucleo'),
            'unidadeprisional'=> $this->input->post('unidadeprisional'),
            'emailinstitucional'=> $this->input->post('emailinstitucional'),
            'login'=> $this->input->post('login'),
            'senha'=> $this->input->post('senha'),
            'funcao'=> $this->input->post('funcao'),
            'funcionarioativo'=> $this->input->post('funcionarioativo')
        );
        $this->db->insert('tbl_agente', $data);
    }



    public function cadastrados(){
        return $this->db->get("tbl_agente")->result_array();
    }

    
}