<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/28/18
 * Time: 3:56 PM
 */

class AnimaisFantasticos extends CI_Controller
{
    public function __construct() {
        parent::__construct ();
        $this->load->library ( 'session' );
        $this->load->library('form_validation');
        //$this->load->model('cadastrocliente_model');
    }

    public function index()
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