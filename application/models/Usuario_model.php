<?php
class Usuario_model extends CI_Model {

    public function login($email)
    {
        return $this->db
        ->where('email',$email)
        ->get('usuarios')
        ->row();
    }

}
