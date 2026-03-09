<?php
class Relatorio_model extends CI_Model
{
    public function get_count_by_type($start_date = null, $end_date = null)
    {
        $this->db->select('tipo_requisicao as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        return $this->db->group_by('tipo_requisicao')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    public function get_count_by_separator($start_date = null, $end_date = null)
    {
        $this->db->select('separador as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        $this->db->where('separador IS NOT NULL');
        return $this->db->group_by('separador')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    public function get_count_by_conferente($start_date = null, $end_date = null)
    {
        $this->db->select('conferente as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        $this->db->where('conferente IS NOT NULL');
        return $this->db->group_by('conferente')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    public function get_count_by_driver($start_date = null, $end_date = null)
    {
        $this->db->select('motorista as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        $this->db->where('motorista IS NOT NULL');
        return $this->db->group_by('motorista')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    public function get_count_by_group($start_date = null, $end_date = null)
    {
        $this->db->select('grupo as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        return $this->db->group_by('grupo')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    public function get_count_by_delivery_status($start_date = null, $end_date = null)
    {
        $this->db->select('status_protocolo as label, COUNT(*) as value');
        $this->apply_filters($start_date, $end_date);
        return $this->db->group_by('status_protocolo')
            ->order_by('value', 'DESC')
            ->get('requisicoes')
            ->result();
    }

    private function apply_filters($start_date, $end_date)
    {
        if ($start_date) {
            $this->db->where('DATE(data_protocolo) >=', $start_date);
        }
        if ($end_date) {
            $this->db->where('DATE(data_protocolo) <=', $end_date);
        }
    }
}
