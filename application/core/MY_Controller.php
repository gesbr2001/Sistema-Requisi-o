
<?php 
class MY_Controller extends CI_Controller {

    public function verificar_login()
    {
        if(!$this->session->userdata('logado')){
            redirect('auth/login');
        }
    }

}

?>
