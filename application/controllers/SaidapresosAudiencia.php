<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia extends CI_Controller{
    public function __construct(){
        parent:: __construct();
    //carregando o model dos presos
    }

    public function index(){
        
        $this->db->select('*');
        $dados['SaidapresosAudiencia'] = $this->db->get('SaidapresosAudiencia')->result();
        $this->load->view('saida-presosAudiencia-view',$dados);
    }

    public function audiencia(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->load->view('cadastrar_audiencia_view');
    }

    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->saidapresosAudiencia_model->SaidapresosAudiencia();
        $this->load->model('saidapresosAudiencia_model');
        redirect('saidapresosAudiencia');
    }

    public function pesquisar(){
        
        $this->load->model('SaidapresosAudiencia_model','SaidapresosAudiencia');
        $dados['SaidapresosAudiencia'] = $this->cadastrar_sair->get_cadastrar_sair_like();
        $this->load->view('saida-presosAudiencia-view',$dados);
        
    }


}
