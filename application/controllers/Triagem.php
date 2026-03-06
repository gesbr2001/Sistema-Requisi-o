<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Triagem extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('triagem');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('triagem/index', $data);
        $this->load->view('layout/footer');
    }

    public function enviarSeparacao($id)
    {
        $dados = [
            'status' => 'separacao',
            'prioridade' => $this->input->post('prioridade'),
            'data_triagem' => date('Y-m-d H:i:s')
        ];

        $this->Requisicao_model->atualizar($id, $dados);

        redirect('triagem');
    }

    public function historico()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_historico_triagem();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('triagem/historico', $data);
        $this->load->view('layout/footer');
    }
}
