<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/12/18
 * Time: 11:45 AM
 */

class Quartos_model extends CI_Model
{
    // public $nome;
    // public $senha;
    // public $email;

    public function criarQuarto()
    {
        if(!$this->db->insert('form', $data))
            throw new Exception($this->db->_error_message());
    }
    public  function selecionar(){
        $this->db->select();
        $this->db->from('form');
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();

        return $query->result();
    }
}