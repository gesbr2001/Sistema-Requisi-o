<?php
class Separador_model extends CI_Model
{

    public function listar()
    {
        return $this->db->get('separadores')->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->get_where('separadores', ['id' => $id])->row();
    }

    public function criar($dados)
    {
        return $this->db->insert('separadores', $dados);
    }

    public function atualizar($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('separadores', $dados);
    }

    public function deletar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('separadores');
    }
}
