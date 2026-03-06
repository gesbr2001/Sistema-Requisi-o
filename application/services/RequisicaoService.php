<?php

class RequisicaoService {

    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Requisicao_model');
    }

    public function criarRequisicao($dados)
    {

        $dados['status'] = 'protocolo';
        $dados['data_protocolo'] = date('Y-m-d H:i:s');

        return $this->CI->Requisicao_model->insert($dados);

    }

    public function enviarTriagem($id)
    {

        return $this->CI->Requisicao_model->update($id, [
            'status' => 'triagem',
            'data_triagem' => date('Y-m-d H:i:s')
        ]);

    }

    public function enviarSeparacao($id, $prioridade)
    {

        return $this->CI->Requisicao_model->update($id, [
            'status' => 'separacao',
            'prioridade' => $prioridade
        ]);

    }

    public function iniciarSeparacao($id, $separador)
    {

        return $this->CI->Requisicao_model->update($id, [
            'separador' => $separador,
            'data_separacao' => date('Y-m-d H:i:s')
        ]);

    }

    public function enviarConferencia($id)
    {

        return $this->CI->Requisicao_model->update($id, [
            'status' => 'conferencia'
        ]);

    }

    public function finalizarConferencia($id, $dados)
    {

        $dados['status'] = 'expedicao';
        $dados['data_conferencia'] = date('Y-m-d H:i:s');

        return $this->CI->Requisicao_model->update($id, $dados);

    }

    public function finalizarExpedicao($id, $dados)
    {

        $dados['status'] = 'expedido';
        $dados['data_expedicao'] = date('Y-m-d H:i:s');

        return $this->CI->Requisicao_model->update($id, $dados);

    }

}
