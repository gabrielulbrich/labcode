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

      $data = array(
        'nome' => 'Quarto '.$query[0]->idquarto,
        'limpeza' => 0,
        'ocupado' => 0,
        'is_deleted' => 0,
      );

      if(!$this->db->insert('quartos', $data)) {
        $this->session->set_flashdata('error', 'Não foi possível adicionar o quarto.');
      }else{
        $this->session->set_flashdata('sucess', 'Quarto '.$query[0]->idquarto.' adicionado');
      }
              
    }
    public function selecionar(){
        $query = $this->db->select()
                 ->from('quartos')
                 ->where('is_deleted', 0)
                 ->get()
                 ->result();

        return $query;
    }
    public function getById($cod_lista){
      $query = $this->db->select()
      ->from('quartos')
      ->where('idquarto', $cod_lista)
      ->get()
      ->result();

      return $query;
    }

    public function excluirQuarto($idquarto)
    {
      $query = $this->db->set('is_deleted', 1)
      ->where('idquarto', $idquarto)
      ->update('quartos');

      return $query;
    }
}