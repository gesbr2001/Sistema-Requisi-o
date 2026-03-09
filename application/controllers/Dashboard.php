<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
    }

    public function index()
    {
        $prioridade = $this->input->get('prioridade');
        $busca = $this->input->get('busca');

        $data['protocolo'] = $this->Requisicao_model->contar_por_status('protocolo');
        $data['triagem'] = $this->Requisicao_model->contar_por_status('triagem');
        $data['separacao'] = $this->Requisicao_model->contar_por_status('separacao');
        $data['expedicao'] = $this->Requisicao_model->contar_por_status('expedicao');

        $data['requisicoes_ativas'] = $this->Requisicao_model->buscar_ativas($prioridade, $busca);
        $data['prioridade_selecionada'] = $prioridade;
        $data['busca_selecionada'] = $busca;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('layout/footer');
    }

}