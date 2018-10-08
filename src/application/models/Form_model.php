<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 9/12/18
 * Time: 11:45 AM
 */

class Form_model extends CI_Model
{
    public $nome;
    public $senha;
    public $email;

    public function inserir($data)
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

    function excluir($id) {
        if(is_null($id))
        {
            return false;
        }

        $sql = "UPDATE form SET is_deleted=1 WHERE idform=$id;";
        $this->db->query($sql);

        return true;
    }

    function editar($data){
        if(is_null($data))
        {
            return false;
        }
        $this->db->where('idform', $data['idform']);
        $this->db->update('form', $data);
        return $this->db->affected_rows();
    }

    function getByID($id)
    {
            if(is_null($id))
            {
                return false;
            }
            $this->db->select();
            $this->db->from('form');
            $this->db->where('idform', $id);
            $query = $this->db->get();

            return $query->result();
    }
}