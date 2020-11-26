<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransitoExterno extends CI_Controller{

    public function index(){

        $this->load->view('transito-externo-view');
    }
}
