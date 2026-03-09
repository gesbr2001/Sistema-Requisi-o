<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
        $this->load->model('Usuario_model');
    }

    public function trocar_senha()
    {
        $data['titulo'] = "Alterar Minha Senha";

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perfil/trocar_senha', $data);
        $this->load->view('layout/footer');
    }

    public function salvar_senha()
    {
        $usuario_id = $this->session->userdata('id');
        $senha_atual = $this->input->post('senha_atual');
        $nova_senha = $this->input->post('nova_senha');
        $confirmar_senha = $this->input->post('confirmar_senha');

        if ($nova_senha !== $confirmar_senha) {
            $this->session->set_flashdata('erro', 'A nova senha e a confirmação não coincidem.');
            redirect('perfil/trocar_senha');
        }

        $usuario = $this->Usuario_model->buscar_por_id($usuario_id);

        if (password_verify($senha_atual, $usuario->senha)) {
            $dados = [
                'senha' => password_hash($nova_senha, PASSWORD_DEFAULT)
            ];
            $this->Usuario_model->atualizar($usuario_id, $dados);
            $this->session->set_flashdata('sucesso', 'Senha alterada com sucesso!');
        } else {
            $this->session->set_flashdata('erro', 'A senha atual está incorreta.');
        }

        redirect('perfil/trocar_senha');
    }
}
