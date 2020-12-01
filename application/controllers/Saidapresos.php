<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saidapresos extends CI_Controller{

    public function index(){
        $this->db->select('*');
        $dados['cadastrar_sair'] = $this->db->get('cadastrar_sair')->result();
        $this->load->view('Saida-presos-view',$dados);



    }


    
	public function usuarios(){
		return $this->db->get('cadastrar_sair')->result_array();
	}
     
    public function pesquisar(){
        
        $this->load->model('cadastrar_sair_model','cadastrar_sair');
        $dados['cadastrar_sair'] = $this->cadastrar_sair->get_cadastrar_sair_like();
        $this->load->view('Saida-presos-view',$dados);
     
        
    

    }
     


}
