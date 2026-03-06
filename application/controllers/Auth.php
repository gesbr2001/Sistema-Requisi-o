<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function autenticar()
    {
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $this->load->model('Usuario_model');

        $usuario = $this->Usuario_model->login($email);

        if($usuario && password_verify($senha, $usuario->senha)){

            $this->session->set_userdata([
                'id' => $usuario->id,
                'nome' => $usuario->nome,
                'perfil' => $usuario->perfil,
                'logado' => true
            ]);

            redirect('dashboard');

        }else{

            $this->session->set_flashdata('erro','Email ou senha inválidos');
            redirect('auth/login');

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
