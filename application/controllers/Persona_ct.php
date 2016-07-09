<?php

/**
 * Description of Persona_ct
 *
 * @author svega
 */
class Persona_ct extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Persona_md');
                
                
	}	
	function index()
	{			
		$this->form_validation->set_rules('rut', 'rut', 'required|trim|is_numeric|max_length[10]');			
		$this->form_validation->set_rules('dv', 'dv', 'required|trim|max_length[1]');			
		$this->form_validation->set_rules('nombre', 'nombre', 'required|trim|max_length[50]');			
		$this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'required|trim|max_length[50]');			
		$this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno', 'required|trim|max_length[50]');			
		$this->form_validation->set_rules('contrasena', 'Contraseña', 'required|trim|max_length[15]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('Personas');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'rut' => set_value('rut'),
					       	'dv' => set_value('dv'),
					       	'nombre' => set_value('nombre'),
					       	'apellidoPaterno' => set_value('apellidoPaterno'),
					       	'apellidoMaterno' => set_value('apellidoMaterno'),
					       	'contrasena' => set_value('contrasena')
						);
					
			// run insert model to write data to db
		
			if ($this->Persona_md->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{

				redirect('Persona_ct/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
        
    }	

