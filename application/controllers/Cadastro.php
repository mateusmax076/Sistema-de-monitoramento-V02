<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Agente_model');//carregando o model do agente
    }

    public function index(){

        $this->load->view('cadastro-view'); //Carrega a view de cadastro do agente

    }

    public function create(){ //Carrega a Função cadastroAgente que está no Agente_model
        $this->Agente_model->cadastroAgente();
        redirect('Login');

    }
}