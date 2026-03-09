<?php
class Destino_model extends CI_Model
{

    public function listar($busca = null)
    {
        if ($busca) {
            $this->db->like('locais_solicitantes', $busca);
        }
        return $this->db->get('destinos')->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->get_where('destinos', ['id' => $id])->row();
    }

    public function criar($dados)
    {
        return $this->db->insert('destinos', $dados);
    }

    public function atualizar($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('destinos', $dados);
    }

    public function deletar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('destinos');
    }
}
