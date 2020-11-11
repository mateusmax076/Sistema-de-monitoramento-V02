<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function index(){

    $this->session->sess_destroy(); // destroi a sessão 

    $this->load->view('login-view'); // Carrega a view de login

  }


  public function verifica(){    	// faz a verificação pra ver se a pessoa tem o login e a senha
         
    $this->load->model("Login_model");
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $user = $this->Login_model->verifica($login, $senha);
    //print "<pre>";   //Print => qnd descomentados exibem na tela o que está contido na variável $user
    //print_r($user);
    //print "</pre>";
    //exit();

      //OBS: #### SESSION ESTÃO SENDO CRIADAS EM VARIOS CONTROLLERS TEM QUE SER REVISTO PRA ENTENDER O QUE ESTÁ ACONTECENDO  ####

    if($user){
      $this->session->set_userdata("logged_user", $user); //Estão sendo criadas duas session uma com os dados e a outra sem os dados
      //print "<pre>";  //Print => qnd descomentados exibem na tela o que está contido na $_SESSION
      //print_r($_SESSION);
      //print "</pre>";
      //exit();

      //$this->output->enable_profiler(TRUE);  // exibe erros serve como debug
      redirect("Home");
    }else{
      $this->session->sess_destroy();
      redirect("Login");
    }

  }

}
