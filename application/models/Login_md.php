<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_md
 *
 * @author svega
 */
class Login_md extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getPersonaByLogin($rut, $contrasena) {
        $usuario = $this->db->get_where('Persona', array('rut' => $rut, 'contrasena' => $contrasena));
        return $usuario->row();
    }

}
