<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Separacao extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
        $this->load->model('Separador_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('separacao');
        $data['separadores'] = $this->Separador_model->listar();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('separacao/index', $data);
        $this->load->view('layout/footer');
    }

    public function enviarConferencia($id)
    {
        $dados = [
            'status' => 'conferencia',
            'separador' => $this->input->post('separador'),
            'data_separacao' => date('Y-m-d H:i:s')
        ];

        $this->Requisicao_model->atualizar($id, $dados);

        redirect('separacao');
    }
}
