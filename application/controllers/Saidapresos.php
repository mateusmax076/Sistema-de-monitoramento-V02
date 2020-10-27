<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saidapresos extends CI_Controller{

    public function index(){

        $this->load->view('saida-presos-view'); // Carrega a view de login
    }
}
