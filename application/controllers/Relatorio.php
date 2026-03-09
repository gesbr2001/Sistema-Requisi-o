<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Relatorio_model');
        $this->load->library('Pdf');
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

    public function exportar_excel()
    {
        $start_date = $this->input->get('start_date') ?: date('Y-m-01');
        $end_date = $this->input->get('end_date') ?: date('Y-m-d');

        $by_type = $this->Relatorio_model->get_count_by_type($start_date, $end_date);
        $by_separator = $this->Relatorio_model->get_count_by_separator($start_date, $end_date);
        $by_conferente = $this->Relatorio_model->get_count_by_conferente($start_date, $end_date);
        $by_driver = $this->Relatorio_model->get_count_by_driver($start_date, $end_date);
        $by_group = $this->Relatorio_model->get_count_by_group($start_date, $end_date);
        $by_delivery_status = $this->Relatorio_model->get_count_by_delivery_status($start_date, $end_date);

        $filename = "Relatorio_Requisicoes_" . $start_date . "_a_" . $end_date . ".csv";

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);

        $output = fopen('php://output', 'w');

        // Add UTF-8 BOM for Excel
        fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

        // 1. Total por Tipo
        fputcsv($output, ['TOTAL POR TIPO'], ';');
        fputcsv($output, ['Tipo', 'Quantidade'], ';');
        foreach ($by_type as $item)
            fputcsv($output, [$item->label, $item->value], ';');
        fputcsv($output, [], ';');

        // 2. Separadores
        fputcsv($output, ['ATIVIDADE SEPARADORES'], ';');
        fputcsv($output, ['Nome', 'Quantidade'], ';');
        foreach ($by_separator as $item)
            fputcsv($output, [$item->label, $item->value], ';');
        fputcsv($output, [], ';');

        // 3. Conferentes
        fputcsv($output, ['ATIVIDADE CONFERENTES'], ';');
        fputcsv($output, ['Nome', 'Quantidade'], ';');
        foreach ($by_conferente as $item)
            fputcsv($output, [$item->label, $item->value], ';');
        fputcsv($output, [], ';');

        // 4. Motoristas
        fputcsv($output, ['ATIVIDADE MOTORISTAS'], ';');
        fputcsv($output, ['Nome', 'Quantidade'], ';');
        foreach ($by_driver as $item)
            fputcsv($output, [$item->label, $item->value], ';');
        fputcsv($output, [], ';');

        // 5. Grupos
        fputcsv($output, ['POR GRUPO'], ';');
        fputcsv($output, ['Grupo', 'Quantidade'], ';');
        foreach ($by_group as $item)
            fputcsv($output, [$item->label, $item->value], ';');
        fputcsv($output, [], ';');

        // 6. Entrega/Status
        fputcsv($output, ['POR ENTREGA / STATUS'], ';');
        fputcsv($output, ['Status', 'Quantidade'], ';');
        foreach ($by_delivery_status as $item)
            fputcsv($output, [$item->label, $item->value], ';');

    }

    public function exportar_pdf()
    {
        $start_date = $this->input->post('start_date') ?: date('Y-m-01');
        $end_date = $this->input->post('end_date') ?: date('Y-m-d');

        // Recebe imagens dos gráficos do frontend
        $data['chart_group'] = $this->input->post('chart_group');
        $data['chart_delivery'] = $this->input->post('chart_delivery');

        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        $data['by_type'] = $this->Relatorio_model->get_count_by_type($start_date, $end_date);
        $data['by_separator'] = $this->Relatorio_model->get_count_by_separator($start_date, $end_date);
        $data['by_conferente'] = $this->Relatorio_model->get_count_by_conferente($start_date, $end_date);
        $data['by_driver'] = $this->Relatorio_model->get_count_by_driver($start_date, $end_date);
        $data['by_group'] = $this->Relatorio_model->get_count_by_group($start_date, $end_date);
        $data['by_delivery_status'] = $this->Relatorio_model->get_count_by_delivery_status($start_date, $end_date);

        // Renderiza a view do PDF
        $html = $this->load->view('relatorio/pdf_template', $data, TRUE);

        // Gera o PDF
        $this->pdf->generate($html, "Relatorio_Requisicoes_" . $start_date . "_a_" . $end_date);
    }
}
