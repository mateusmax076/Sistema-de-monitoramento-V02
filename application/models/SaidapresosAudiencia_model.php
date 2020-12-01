
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function SaidapresosAudiencia(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'dataentrada'=> $this->input->post('dataentrada'),
            'siap'=> $this->input->post('siap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'origem'=> $this->input->post('origem'),
            'condutores'=> $this->input->post('condutores')
            );
        $this->db->insert('SaidapresosAudiencia', $data);

    }

    

function get_cadastrar_sair_like ()  {

    $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like ('nome',$termo);
     return $this->db->get('SaidapresosAudiencia')->result();
		

	}


}