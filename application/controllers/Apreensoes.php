<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apreensoes extends CI_Controller{

    public function index(){

        $this->load->view('revistas-e-apreensoes-view');
    }
}
