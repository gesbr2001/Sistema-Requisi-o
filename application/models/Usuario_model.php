<?php
class Usuario_model extends CI_Model
{

    public function login($email)
    {
        return $this->db
            ->where('email', $email)
            ->get('usuarios')
            ->row();
    }

    public function listar()
    {
        return $this->db->get('usuarios')->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->where('id', $id)->get('usuarios')->row();
    }

    public function criar($dados)
    {
        return $this->db->insert('usuarios', $dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->db->where('id', $id)->update('usuarios', $dados);
    }

    public function deletar($id)
    {
        return $this->db->where('id', $id)->delete('usuarios');
    }
}
