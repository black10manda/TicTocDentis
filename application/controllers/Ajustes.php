<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajustes extends CI_Controller {
	public function tratamientos()
	{
		$data['titulo']='Tratamientos';
		$this->load->view('Ajustes/header.php',$data);
		$this->load->view('Ajustes/tratamientos.php');		
		$this->load->view('Ajustes/footer.php');

	}
	public function agregarT()
	{
		$data['titulo']='Tratamientos';
		$this->load->view('Ajustes/header.php',$data);
		$this->load->view('Ajustes/agregarT.php');		
		$this->load->view('Ajustes/footer.php');

	}
	public function diagnosticos()
	{
		$data['titulo']='Tratamientos';
		$this->load->view('Ajustes/header.php',$data);
		$this->load->view('Ajustes/diagnosticos.php');		
		$this->load->view('Ajustes/footer.php');

	}
	public function agregarD()
	{
		$data['titulo']='Tratamientos';
		$this->load->view('Ajustes/header.php',$data);
		$this->load->view('Ajustes/agregarD.php');		
		$this->load->view('Ajustes/footer.php');

	}

}