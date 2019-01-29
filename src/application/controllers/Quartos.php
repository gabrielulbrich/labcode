<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quartos extends CI_Controller {

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
	$this->load->model('Quartos_model');
	$this->load->helper('url');
  }

	public function index()
	{
		$data['pagina'] = 'quartos/quartos_view.php';
		$data['quartos'] = $this->Quartos_model->selecionar();

        if ($this->session->userdata ('logged_in') === true)
        {
            $this->load->view('index.php', $data);
        }else{
            redirect('/login');
        }
	}

	public function novoQuarto()
	{
		$data['dados'] = $this->Quartos_model->criarQuarto();
		redirect('/quartos');
	}

	public function popular_modal()
	{
		$cod_lista = $this->input->post('cod_item');
		$item = $this->Quartos_model->getById($cod_lista);
		if ($item) {
			$data = array(
				'status' 	 => true,
				'quarto' 	 => $item[0]->nome,
				'idquarto' => $item[0]->idquarto
			);
			echo json_encode($data);
		}
	}

	public function excluirQuarto($idquarto, $nomequarto)
	{
		$quarto = $nomequarto;
		if($this->Quartos_model->excluirQuarto($idquarto))
		{
			$this->session->set_flashdata('sucess', $quarto.' excluido');					
		}else{
			$this->session->set_flashdata('error', 'Não foi possível excluir o quarto.');
		}
	} 
}