<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/28/18
 * Time: 3:56 PM
 */

class CadastroCliente extends CI_Controller
{
    public function __construct() {
        parent::__construct ();
        $this->load->library ( 'session' );
        $this->load->library('form_validation');
        $this->load->model('cadastrocliente_model');
    }

    public function index()
    {
        $data['pagina'] = 'cliente/cliente_cadastrar_view.php';
        if ($this->session->userdata ('logged_in') === true)
        {
            $this->load->view('index',$data);
        }else{
            redirect('/login');
        }

    }

    public function cadastro()
    {

        // set validation rules
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('rua', 'Endereco', 'trim|required');
        $this->form_validation->set_rules('numero', 'Numero', 'trim|required');
        $this->form_validation->set_rules('cidade', 'Cidade', 'trim|required');
        $this->form_validation->set_rules('estado', 'Estado', 'trim|required');
        $this->form_validation->set_rules('cep', 'CEP', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $erros = array('msg' => validation_errors());
            $this->session->set_flashdata('error', $erros);
            redirect('/cliente/cadastro');
        }
        else
        {
            $data = array(
                'nome' => $this->input->post('nome'),
                'sexo' => $this->input->post('sexo'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
                'endereco' => $this->input->post('rua'),
                'numero'    => $this->input->post('numero'),
                'cidade' => $this->input->post('cidade'),
                'estado' => $this->input->post('estado'),
                'cep' => $this->input->post('cep'),
                'created_at' => date('Y-m-j H:i:s')
            );
            $this->cadastrocliente_model->cadastrar($data);

            $this->session->set_flashdata('sucess', 'Cliente Cadastrado.');
            redirect('/cliente/cadastro');
        }
    }

    public function listagem()
    {
        $data['pagina'] = 'cliente/cliente_listar_view.php';
        if ($this->session->userdata ('logged_in') === true)
        {
            $this->load->view('index',$data);
        }else{
            redirect('/login');
        }
    }

    public function consulta($cep)
    {
        //$cep = $this->input->post('cep');
        //echo $cep;
        //die($cep);
        $this->load->library('curl');
        echo $this->curl->consulta($cep);   
    }

    public function api()
    {
        $result = $this->cadastrocliente_model->selecionar();
        //print_r($result);
        $itens = array();
        if(!empty($result)):
            foreach($result as $row):
                $itens[] = array(
                    $row->id,
                    $row->nome,
                    $row->cpf,
                    $row->email,
                    $row->is_deleted
                );
            endforeach;
        endif;

        $count = count($itens);

        $result = array(
            'draw' => 1,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $itens
        );

        echo json_encode($result);
    }
 }