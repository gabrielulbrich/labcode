<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class CadastroCliente_model extends CI_Model
{
    public $nome;
    public $sexo;
    public $cpf;
    public $email;
    public $endereco;
    public $numero;
    public $cidade;
    public $estado;
    public $cep;
    public $data;

    public function cadastrar($data)
    {
        if (!$this->db->insert('cliente', $data))
            throw new Exception($this->db->_error_message());
    }

    public function selecionar()
    {
        $this->db->select('id, nome, cpf, email, is_deleted');
        $this->db->from('cliente');
        $this->db->where('is_deleted', 0);

        $query = $this->db->get();
        //die(var_dump($query));

        return $query->result();
    }

    public function alterar(){
        //
    }
    public function excluir(){

    }
}
