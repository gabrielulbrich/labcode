<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct ();
        $this->load->library ('session');
    }

	public function index()
	{
		$data['pagina'] = 'home/dashboard_view.php';

        if ($this->session->userdata ('logged_in') === true)
        {
            $this->load->view('index.php', $data);
        }else{
            redirect('/login');
        }
	}

	public function alterarImg()
	{
		$nome							= $this->input->post('nome');
		$config['upload_path']          = './uploads/';
		$config['file_name']			= $nome.'.png';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$this->session->set_flashdata('sucess', 'Imagem salva');
			redirect('/Welcome');
		}
	}

	public function uploadImg()
    {
        if ($_FILES['file']['name']) {
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = FCPATH.'assets/uploads/' . $filename; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination);
                echo base_url().'/assets/uploads/' . $filename;//change this URL
            }
            else
            {
                echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
            }
        }
    }
}
