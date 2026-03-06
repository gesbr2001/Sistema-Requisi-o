<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Protocolo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
        $this->load->model('Destino_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('protocolo');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('protocolo/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function novo()
    {
        $data['destinos'] = $this->Destino_model->listar();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('protocolo/nova_requisicao', $data);
        $this->load->view('layout/footer');
    }

    public function salvar()
    {
        $dados = [
            'numero_requisicao'  => $this->input->post('numero_requisicao'),
            'destino_id'         => $this->input->post('destino_id'),
            'grupo'              => $this->input->post('grupo'),
            'tipo_requisicao'    => $this->input->post('tipo_requisicao'),
            'centro_custo'       => $this->input->post('centro_custo'),
            'status'             => 'protocolo',
            'status_protocolo'   => $this->input->post('entrega_status'), 
            'observacao_protocolo' => $this->input->post('observacao_protocolo'),
            'data_protocolo'     => date('Y-m-d H:i:s'),
            'usuario_id'         => $this->session->userdata('id')
        ];

        $this->Requisicao_model->criar($dados);
        redirect('protocolo');
    }

    public function editar($id)
    {
        $data['requisicao'] = $this->Requisicao_model->buscar_por_id($id);
        
        if (!$data['requisicao'] || $data['requisicao']->status != 'protocolo') {
            redirect('protocolo');
        }

        $data['destinos'] = $this->Destino_model->listar();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('protocolo/editar_requisicao', $data);
        $this->load->view('layout/footer');
    }

    public function atualizar($id)
    {
        $dados = [
            'numero_requisicao'  => $this->input->post('numero_requisicao'),
            'destino_id'         => $this->input->post('destino_id'),
            'grupo'              => $this->input->post('grupo'),
            'tipo_requisicao'    => $this->input->post('tipo_requisicao'),
            'centro_custo'       => $this->input->post('centro_custo'),
            'status_protocolo'   => $this->input->post('entrega_status'), 
            'observacao_protocolo' => $this->input->post('observacao_protocolo')
        ];

        $this->Requisicao_model->atualizar($id, $dados);
        redirect('protocolo');
    }

    public function enviarTriagem($id)
    {
        $this->Requisicao_model->atualizar($id, ['status' => 'triagem']);
        redirect('protocolo');
    }

    public function historico()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_historico_protocolo();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('protocolo/historico', $data);
        $this->load->view('layout/footer');
    }
}
