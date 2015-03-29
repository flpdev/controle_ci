<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index (){

        $dados = array(
            'titulo' => 'Home - Controle Empresarial',
        );


        $this->load->view('head',$dados);
        $this->load->view('home');
        $this->load->view('footer');
    }

}