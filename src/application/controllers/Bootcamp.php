<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/28/18
 * Time: 3:56 PM
 */

class Bootcamp extends CI_Controller
{
    public function __construct() {
        parent::__construct ();
        $this->load->library ( 'session' );
        $this->load->library('form_validation');
        //$this->load->model('cadastrocliente_model');
    }

    public function botaoDinamico()
    {
        if ($this->session->userdata ('logged_in') === true)
        {
            //$this->load->view('header/header');
            //$this->load->view('index');
            $this->load->view('bootcamp/botao_dinamico');
            //$this->load->view('header/footer');
        }else{
            redirect('/login');
        }

    }

    public function api(){
        die('teste');
    }

    public function animaisFantasticos()
    {
        if ($this->session->userdata ('logged_in') === true)
        {
            //$this->load->view('header/header');
            //$this->load->view('index');
            $this->load->view('bootcamp/animais_fantasticos');
            //$this->load->view('header/footer');
        }else{
            redirect('/login');
        }

    }
}