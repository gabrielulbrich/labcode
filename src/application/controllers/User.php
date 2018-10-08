<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	
	
	public function index() {
		
    $this->load->view('user/login/login');
		
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'Nome de usuário já existe. Por favor, escolha outro.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('user/header');
			$this->load->view('user/register/register', $data);
			$this->load->view('user/footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('user/header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('user/footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'Ocorreu um problema ao criar a conta. Por favor, tente novamente.';
				
				// send error to the view
				$this->load->view('user/header');
				$this->load->view('user/register/register', $data);
				$this->load->view('user/footer');
				
			}
			
		}
		
	}
		
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->library('session');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('user/header');
			$this->load->view('user/login/login');
			$this->load->view('user/footer');

			//die('lalal');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
                $this->session->set_userdata('user_id', (int)$user->id);
                $this->session->set_userdata('username', (string)$user->username);
                $this->session->set_userdata('logged_in', (bool)true);
                $this->session->set_userdata('is_confirmed', (bool)$user->is_confirmed);
                $this->session->set_userdata('is_admin', (bool)$user->is_admin);

				$data->sucess = 'Parabens';
				// user login ok
				//$this->load->view('header');


				$this->load->view('index', $data);
                redirect('/');

			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('user/header');
				$this->load->view('user/login/login', $data);
				$this->load->view('user/footer');
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
            $this->session->sess_destroy();
			
			// user logout ok
			$this->load->view('user/header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('user/footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/login');
			
		}
		
	}
	
}
