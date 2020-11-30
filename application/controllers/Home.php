<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){

        $this->load->view('home-view'); // Carrega a view de login
    }

    public function entradaPresos(){

      $this->load->view('entrada-presos-view');
    }
        
    
    public function admin(){
        //$this->session->sess_destroy();    
        //print "<pre>";
        //print_r($_SESSION);
        //print "</pre>";
        //exit();

        $this->load->view('admin-view'); // Carrega a view de login
    }
}
