<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Relatorio_model');
    }

    public function index()
    {
        $start_date = $this->input->get('start_date') ?: date('Y-m-01'); // First day of current month
        $end_date = $this->input->get('end_date') ?: date('Y-m-d');

        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        // Fetch data for reports
        $data['by_type'] = $this->Relatorio_model->get_count_by_type($start_date, $end_date);
        $data['by_separator'] = $this->Relatorio_model->get_count_by_separator($start_date, $end_date);
        $data['by_conferente'] = $this->Relatorio_model->get_count_by_conferente($start_date, $end_date);
        $data['by_driver'] = $this->Relatorio_model->get_count_by_driver($start_date, $end_date);
        $data['by_group'] = $this->Relatorio_model->get_count_by_group($start_date, $end_date);
        $data['by_delivery_status'] = $this->Relatorio_model->get_count_by_delivery_status($start_date, $end_date);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('relatorio/index', $data);
        $this->load->view('layout/footer');
    }
}
