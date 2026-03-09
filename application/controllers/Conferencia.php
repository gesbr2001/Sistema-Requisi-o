<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conferencia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
        $this->load->model('Conferente_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('conferencia');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('conferencia/index', $data);
        $this->load->view('layout/footer');
    }

    public function conferir($id)
    {
        $data['requisicao'] = $this->Requisicao_model->buscar_por_id($id);

        if (!$data['requisicao'] || $data['requisicao']->status != 'conferencia') {
            redirect('conferencia');
        }

        $data['conferentes'] = $this->Conferente_model->listar();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('conferencia/conferir', $data);
        $this->load->view('layout/footer');
    }

    public function processar($id)
    {
        $dados = [
            'status' => 'expedicao',
            'conferente' => $this->input->post('conferente'),
            'qtd_itens' => $this->input->post('qtd_itens'),
            'itens_divergentes' => $this->input->post('itens_divergentes'),
            'observacao_conferencia' => $this->input->post('observacao_conferencia'),
            'data_conferencia' => date('Y-m-d H:i:s')
        ];

        $this->Requisicao_model->atualizar($id, $dados);
        redirect('conferencia');
    }

    public function historico()
    {
        $data = $this->input->get('data') ?: date('Y-m-d');
        $data_view['requisicoes'] = $this->Requisicao_model->buscar_historico_conferencia($data);
        $data_view['data_selecionada'] = $data;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('conferencia/historico', $data_view);
        $this->load->view('layout/footer');
    }
}
