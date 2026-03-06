<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historico extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Requisicao_model');
    }

    public function index()
    {
        $data['requisicoes'] = $this->Requisicao_model->buscar_por_status('entregue');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('historico/index', $data);
        $this->load->view('layout/footer');
    }
}
