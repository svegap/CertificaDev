<?php

/**
 * Description of Login_ct
 *
 * @author svega
 */
class Login_ct extends CI_Controller{
    	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Login_md');
                
                
	}
    
    public function login(){

        $this->load->model('Login_md');
        $this->load->model('Persona_md');
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->input->post('btnLogin')){

            $login = $this->input->post('txtRut');
            $clave = $this->input->post('iptPassword');
            
            $usuario = $this->Login_md->getPersonaByLogin($login, $clave);
            if ($usuario == NULL){
                $data['mensaje'] = "Usuario no encontrado";
            }
            elseif ($usuario->clave != md5($clave)){
                $data['mensaje'] = "Clave incorrecta";
            }
            else{
                $this->session->set_userdata('usrsesion',$usuario);
                if ($usuario->idPerfil == 1){
                    redirect('Persona_ct/index');
                }
                else{

                    redirect('Inicio/index');
                }
            }

        }        
       if ($this->input->post('btnRegistrar')){
            var_dump("regeistro");
        }
        $data['titulo'] = 'Bienvenido!!!';
        $this->load->view('login',$data);
        
}
}