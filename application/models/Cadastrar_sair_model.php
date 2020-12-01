<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_sair_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastrar_sair(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'datasaida'=> $this->input->post('datasaida'),
            'processo'=> $this->input->post('processo'),
            'siap'=> $this->input->post('siap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'nomemae'=> $this->input->post('nomemae'),
            'nomepai'=> $this->input->post('nomepai'),
            'motivo'=> $this->input->post('motivo'),
            'origem'=> $this->input->post('origem'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'observacoesgerais'=> $this->input->post('observacoesgerais')
        );
        $this->db->insert('cadastrar_sair', $data);

    }

    

function get_cadastrar_sair_like ()  {    //fazer pesquisar

    $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like ('nome',$termo);
     return $this->db->get('cadastrar_sair')->result();
		

	}


}