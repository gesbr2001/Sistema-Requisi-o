<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expedicao extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
        $this->load->model('Motorista_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('expedicao');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('expedicao/index', $data);
        $this->load->view('layout/footer');
    }

    public function expedir($id)
    {
        $data['requisicao'] = $this->Requisicao_model->buscar_por_id($id);

        if (!$data['requisicao'] || $data['requisicao']->status != 'expedicao') {
            redirect('expedicao');
        }

        $data['motoristas'] = $this->Motorista_model->listar();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('expedicao/expedir', $data);
        $this->load->view('layout/footer');
    }

    public function processar($id)
    {
        $sub_status = $this->input->post('status_expedicao'); // CAF, em rota, entregue

        $dados = [
            'motorista' => $this->input->post('motorista'),
            'placa_carro' => $this->input->post('placa_carro'),
            'qtd_volume' => $this->input->post('qtd_volume'),
            'status_expedicao' => "[$sub_status] " . $this->input->post('status_expedicao'),
            'data_expedicao' => date('Y-m-d H:i:s')
        ];

        if ($sub_status == 'entregue') {
            $dados['status'] = 'entregue';
        } else {
            // Keep status as expedicao but update details
            $dados['status'] = 'expedicao';
        }

        $this->Requisicao_model->atualizar($id, $dados);
        redirect('expedicao');
    }
}
