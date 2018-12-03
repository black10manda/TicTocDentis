<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {
public function cal()
	{
		$data['titulo']='Calendario';
		$this->load->view('Calendario/header.php',$data);
		$this->load->view('Calendario/calendario.php');		
		$this->load->view('Calendario/footer.php');

	}

}