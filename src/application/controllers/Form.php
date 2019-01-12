<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/12/18
 * Time: 11:45 AM
 */

class Form extends CI_Controller
{
    public function __construct() {
        parent::__construct ();
        $this->load->library ('session');
        $this->load->library('form_validation');
        $this->load->library('parser');
        $this->load->model('Form_model');
    }

    public function cadastro()
    {
        $data['pagina'] = 'form/form_cadastrar_view.php';
        if ($this->session->userdata ('logged_in') === true)
        {
            $this->load->view('index', $data);
        }else{
            redirect('/login');
        }
    }

    public function listagem()
    {
        $data['pagina'] = 'form/form_lista_view.php';
        if ($this->session->userdata ('logged_in') === true)
        {
            $data['dados'] = $this->Form_model->selecionar();
            $this->load->view('index', $data);
        }else{
            redirect('/login');
        }
    }

    public function editar()
    {
        //$this->valida();

        $id = $this->uri->segment(3);
        if(is_null($id))
            redirect('/form/lista');
        $data['pagina'] = 'form/form_editar_view.php';
        $data['editar'] = $this->Form_model->getById($id);
        $this->load->view('index',$data);
    }

    public function inserir()
    {
        $this->valida();

        $data = array(
            'nome' => $this->input->post('nome'),
            'senha' => $this->input->post('senha'),
            'email' => $this->input->post('email')
        );
        $this->Form_model->inserir($data);

        $this->session->set_flashdata('sucess', 'Formulário enviado');
        redirect('/form/cadastro');
    }

    public function excluir()
    {
        $id = $this->uri->segment(3);
        // Se não foi passado um ID, então redireciona para a home
        if(is_null($id))
            redirect('/form/lista');
        $status = $this->Form_model->excluir($id);
        //die(var_dump($status));
        // Checa o status da operação gravando a mensagem na seção
        if($status){
            $this->session->set_flashdata('sucess', 'Formulário excluído com sucesso.');
        }else{
            $this->session->set_flashdata('error', 'Não foi possível excluir o contato.');
        }
        redirect('/form/lista');
    }

    public function update()
    {
        $this->valida();

        $data = array(
            'idform' => $this->input->post('idform'),
            'nome' => $this->input->post('nome'),
            'senha' => $this->input->post('senha'),
            'email' => $this->input->post('email')
        );
        $this->Form_model->editar($data);

        $this->session->set_flashdata('sucess', 'Alterado com sucesso');
        redirect('/form/lista');
    }

    public function valida()
    {

        $this->form_validation->set_rules('nome', 'Username');
        $this->form_validation->set_rules('senha', 'Password');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $erros = array('msg' => validation_errors());
            $this->session->set_flashdata('erro', $erros);
            redirect('/form/cadastro');
        }
    }

}