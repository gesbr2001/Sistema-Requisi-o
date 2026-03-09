<?php
class Logs_model extends CI_Model
{

    public function registrar($usuario_id, $evento)
    {
        $dados = [
            'usuario_id' => $usuario_id,
            'evento' => $evento,
            'data_hora' => date('Y-m-d H:i:s')
        ];
        return $this->db->insert('logs_acesso', $dados);
    }

    public function listar_todos()
    {
        return $this->db->select('l.*, u.nome as usuario_nome')
            ->from('logs_acesso l')
            ->join('usuarios u', 'l.usuario_id = u.id', 'left')
            ->order_by('l.data_hora', 'DESC')
            ->limit(100)
            ->get()
            ->result();
    }
}
