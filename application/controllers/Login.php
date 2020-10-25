<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function index(){

        $this->load->view('login-view'); // Carrega a view de login
    }

    public function home(){

      $this->load->view('home-view');
    }

    public function entradaPresos(){
      $this->load->view('entrada-presos-view');
    }
}
