<?php
class Motorista_model extends CI_Model
{

    public function listar($busca = null)
    {
        if ($busca) {
            $this->db->like('nome', $busca);
        }
        return $this->db->get('motoristas')->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->get_where('motoristas', ['id' => $id])->row();
    }

    public function criar($dados)
    {
        return $this->db->insert('motoristas', $dados);
    }

    public function atualizar($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('motoristas', $dados);
    }

    public function deletar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('motoristas');
    }
}
