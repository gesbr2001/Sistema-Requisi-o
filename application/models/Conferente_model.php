<?php
class Conferente_model extends CI_Model
{

    public function listar()
    {
        return $this->db->get('conferentes')->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->get_where('conferentes', ['id' => $id])->row();
    }

    public function criar($dados)
    {
        return $this->db->insert('conferentes', $dados);
    }

    public function atualizar($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('conferentes', $dados);
    }

    public function deletar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('conferentes');
    }
}
