<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracao extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Destino_model');
        $this->load->model('Separador_model');
        $this->load->model('Conferente_model');
        $this->load->model('Motorista_model');

        // Basic auth check - simplified for now
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/index');
        $this->load->view('layout/footer');
    }

    // --- Destinos (Locais Solicitantes) ---
    public function destinos()
    {
        $data['itens'] = $this->Destino_model->listar();
        $data['titulo'] = "Locais Solicitantes";
        $data['tipo'] = "destinos";
        $data['prefixo'] = "destino";
        $data['campo_nome'] = "locais_solicitantes";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/lista', $data);
        $this->load->view('layout/footer');
    }

    public function destino_novo()
    {
        $data['titulo'] = "Novo Local Solicitante";
        $data['tipo'] = "destinos";
        $data['prefixo'] = "destino";
        $data['campo_nome'] = "locais_solicitantes";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function destino_editar($id)
    {
        $data['item'] = $this->Destino_model->buscar_por_id($id);
        $data['titulo'] = "Editar Local Solicitante";
        $data['tipo'] = "destinos";
        $data['prefixo'] = "destino";
        $data['campo_nome'] = "locais_solicitantes";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function destino_salvar()
    {
        $id = $this->input->post('id');
        $dados = ['locais_solicitantes' => $this->input->post('nome')];

        if ($id) {
            $this->Destino_model->atualizar($id, $dados);
        } else {
            $this->Destino_model->criar($dados);
        }
        redirect('configuracao/destinos');
    }

    public function destino_deletar($id)
    {
        $this->Destino_model->deletar($id);
        redirect('configuracao/destinos');
    }

    // --- Separadores ---
    public function separadores()
    {
        $data['itens'] = $this->Separador_model->listar();
        $data['titulo'] = "Separadores";
        $data['tipo'] = "separadores";
        $data['prefixo'] = "separador";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/lista', $data);
        $this->load->view('layout/footer');
    }

    public function separador_novo()
    {
        $data['titulo'] = "Novo Separador";
        $data['tipo'] = "separadores";
        $data['prefixo'] = "separador";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function separador_editar($id)
    {
        $data['item'] = $this->Separador_model->buscar_por_id($id);
        $data['titulo'] = "Editar Separador";
        $data['tipo'] = "separadores";
        $data['prefixo'] = "separador";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function separador_salvar()
    {
        $id = $this->input->post('id');
        $dados = ['nome' => $this->input->post('nome')];

        if ($id) {
            $this->Separador_model->atualizar($id, $dados);
        } else {
            $this->Separador_model->criar($dados);
        }
        redirect('configuracao/separadores');
    }

    public function separador_deletar($id)
    {
        $this->Separador_model->deletar($id);
        redirect('configuracao/separadores');
    }

    // --- Conferentes ---
    public function conferentes()
    {
        $data['itens'] = $this->Conferente_model->listar();
        $data['titulo'] = "Conferentes";
        $data['tipo'] = "conferentes";
        $data['prefixo'] = "conferente";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/lista', $data);
        $this->load->view('layout/footer');
    }

    public function conferente_novo()
    {
        $data['titulo'] = "Novo Conferente";
        $data['tipo'] = "conferentes";
        $data['prefixo'] = "conferente";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function conferente_editar($id)
    {
        $data['item'] = $this->Conferente_model->buscar_por_id($id);
        $data['titulo'] = "Editar Conferente";
        $data['tipo'] = "conferentes";
        $data['prefixo'] = "conferente";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function conferente_salvar()
    {
        $id = $this->input->post('id');
        $dados = ['nome' => $this->input->post('nome')];

        if ($id) {
            $this->Conferente_model->atualizar($id, $dados);
        } else {
            $this->Conferente_model->criar($dados);
        }
        redirect('configuracao/conferentes');
    }

    public function conferente_deletar($id)
    {
        $this->Conferente_model->deletar($id);
        redirect('configuracao/conferentes');
    }

    // --- Motoristas ---
    public function motoristas()
    {
        $data['itens'] = $this->Motorista_model->listar();
        $data['titulo'] = "Motoristas";
        $data['tipo'] = "motoristas";
        $data['prefixo'] = "motorista";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/lista', $data);
        $this->load->view('layout/footer');
    }

    public function motorista_novo()
    {
        $data['titulo'] = "Novo Motorista";
        $data['tipo'] = "motoristas";
        $data['prefixo'] = "motorista";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function motorista_editar($id)
    {
        $data['item'] = $this->Motorista_model->buscar_por_id($id);
        $data['titulo'] = "Editar Motorista";
        $data['tipo'] = "motoristas";
        $data['prefixo'] = "motorista";
        $data['campo_nome'] = "nome";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('configuracao/formulario', $data);
        $this->load->view('layout/footer');
    }

    public function motorista_salvar()
    {
        $id = $this->input->post('id');
        $dados = ['nome' => $this->input->post('nome')];

        if ($id) {
            $this->Motorista_model->atualizar($id, $dados);
        } else {
            $this->Motorista_model->criar($dados);
        }
        redirect('configuracao/motoristas');
    }

    public function motorista_deletar($id)
    {
        $this->Motorista_model->deletar($id);
        redirect('configuracao/motoristas');
    }
}
