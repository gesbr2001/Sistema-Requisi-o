<?php
class Requisicao_model extends CI_Model {

    public function buscar_por_status($status)
    {
        return $this->db->select('r.*, d.locais_solicitantes as destino_nome')
                        ->from('requisicoes r')
                        ->join('destinos d', 'r.destino_id = d.id', 'left')
                        ->where('r.status', $status)
                        ->get()
                        ->result();
    }

    public function buscar_por_id($id)
    {
        return $this->db->select('r.*, d.locais_solicitantes as destino_nome')
                        ->from('requisicoes r')
                        ->join('destinos d', 'r.destino_id = d.id', 'left')
                        ->where('r.id', $id)
                        ->get()
                        ->row();
    }

    public function atualizar($id, $dados)
    {
        $this->db->where('id', $id);
        return $this->db->update('requisicoes', $dados);
    }

    public function criar($dados)
    {
        $this->db->insert('requisicoes', $dados);
        return $this->db->insert_id();
    }

    public function contar_por_status($status)
    {
        return $this->db->where('status', $status)
                        ->from('requisicoes')
                        ->count_all_results();
    }

    public function buscar_historico_protocolo()
    {
        return $this->db->select('r.*, d.locais_solicitantes as destino_nome, u.nome as usuario_nome')
                        ->from('requisicoes r')
                        ->join('destinos d', 'r.destino_id = d.id', 'left')
                        ->join('usuarios u', 'r.usuario_id = u.id', 'left')
                        ->order_by('r.data_protocolo', 'DESC')
                        ->get()
                        ->result();
    }

    public function buscar_historico_triagem()
    {
        return $this->db->select('r.*, d.locais_solicitantes as destino_nome')
                        ->from('requisicoes r')
                        ->join('destinos d', 'r.destino_id = d.id', 'left')
                        ->group_start()
                            ->where('r.data_triagem IS NOT NULL')
                            ->or_where('r.prioridade IS NOT NULL')
                        ->group_end()
                        ->order_by('r.id', 'DESC')
                        ->get()
                        ->result();
    }

    public function buscar_ativas($prioridade = null)
    {
        $this->db->select('r.*, d.locais_solicitantes as destino_nome')
                 ->from('requisicoes r')
                 ->join('destinos d', 'r.destino_id = d.id', 'left')
                 ->where('r.status !=', 'entregue');

        if ($prioridade) {
            $this->db->where('r.prioridade', $prioridade);
        }

        return $this->db->order_by('r.id', 'DESC')
                        ->get()
                        ->result();
    }
}
