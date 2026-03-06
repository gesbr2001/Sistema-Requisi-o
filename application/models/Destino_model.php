<?php
class Destino_model extends CI_Model {

    public function listar()
    {
        return $this->db->get('destinos')->result();
    }

}