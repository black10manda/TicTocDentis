<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['titulo']='Pacientes';
		$this->load->view('Pacientes/header.php',$data);
		$this->load->view('Pacientes/index.php');		
		$this->load->view('Pacientes/footer.php');

	}

	public function agregar()
	{
		$data['titulo']='Agregar Paciente';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/agregarPacientes.php');		
		$this->load->view('Pacientes/footer.php');

	}

	public function historia()
	{
		$data['titulo']='Historia Paciente';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/historiaOdontologica.php');		
		$this->load->view('Pacientes/footer.php');

	}

	public function examen()
	{
		$data['titulo']='Examen Oral';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/examenOral.php');		
		$this->load->view('Pacientes/footer.php');

	}

	public function editar()
	{
		$data['titulo']='Editar Paciente';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/editar.php');		
		$this->load->view('Pacientes/footer.php');

	}

	public function historial()
	{
		$data['titulo']='Historial';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/historial.php');		
		$this->load->view('Pacientes/footer.php');

	}


	public function tratamiento()
	{
		$data['titulo']='Nuevo Tratamiento';

		$this->load->view('Pacientes/header.php', $data);
		$this->load->view('Pacientes/tratamiento.php');		
		$this->load->view('Pacientes/footer.php');

	}





}
