<?php
/**
 * Description of Postulante_ct
 *
 * @author svega
 */

class Postulante_ct extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Postulante_md');
	}	
	function index()
	{			
            
		$this->form_validation->set_rules('rut', 'Rut', 'required|trim|is_numeric|max_length[10]');			
		$this->form_validation->set_rules('fechaNacimiento', 'Fecha Nacimiento', 'required|trim');			
		$this->form_validation->set_rules('sexo', 'Sexo', 'required|trim|max_length[1]');			
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|is_numeric|max_length[10]');			
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|valid_email|max_length[50]');			
		$this->form_validation->set_rules('direccion', 'Direccion', 'required|trim|max_length[100]');			
		$this->form_validation->set_rules('experiencia', 'Experiencia', 'required|trim|max_length[1]');			
		$this->form_validation->set_rules('anos', 'Años', 'required|trim|is_numeric|max_length[2]');			
		$this->form_validation->set_rules('idComuna', 'Comuna', 'required|trim|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('idEducacion', 'Educacion', 'required|trim|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('idModalidad', 'Modalidad', 'required|trim|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('idCurso', 'Curso', 'required|trim|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('idEstado', 'Estado', 'required|trim|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('idPerfil', 'Perfil', 'required|trim|is_numeric|max_length[3]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                    
			$this->load->view('Postulantes');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'rut' => set_value('rut'),
					       	'fechaNacimiento' => set_value('fechaNacimiento'),
					       	'sexo' => set_value('sexo'),
					       	'telefono' => set_value('telefono'),
					       	'email' => set_value('email'),
					       	'direccion' => set_value('direccion'),
					       	'experiencia' => set_value('experiencia'),
					       	'anos' => set_value('anos'),
					       	'idComuna' => set_value('idComuna'),
					       	'idEducacion' => set_value('idEducacion'),
					       	'idModalidad' => set_value('idModalidad'),
					       	'idCurso' => set_value('idCurso'),
					       	'idEstado' => set_value('idEstado'),
					       	'idPerfil' => set_value('idPerfil')
						);
					
			// run insert model to write data to db
		
			if ($this->Postulante_md->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Postulante_ct/success');   // or whatever logic needs to occur
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