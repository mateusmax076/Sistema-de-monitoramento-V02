<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function verifica($login, $senha){

        $this->db->where('login', $login);
        $this->db->where('senha', $senha);        
        $user = $this->db->get("tbl_agente")->row_array();
        return $user;
    }

}