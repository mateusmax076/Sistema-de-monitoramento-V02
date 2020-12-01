
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicao_sair_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function atualizar(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
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
        $this->db->where('id',$id);
        $this->db->update('cadastrar_sair', $data);

    }

    
}