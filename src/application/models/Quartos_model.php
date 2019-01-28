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
      $query = $this->db->select_max('idquarto')
               ->from('quartos')
               ->get()
               ->result();

      // print_r();
      // //echo ['idquarto'];
      //die();

      $data = array(
        'nome' => 'Quarto '.$query[0]->idquarto,
        'limpeza' => 0,
        'ocupado' => 0,
        'is_deleted' => 0,
      );

      if(!$this->db->insert('quartos', $data))
            throw new Exception($this->db->_error_message());
    }
    public function selecionar(){
        $query = $this->db->select()
                 ->from('quartos')
                 ->where('is_deleted', 0)
                 ->get()
                 ->result();

        return $query;
    }
}