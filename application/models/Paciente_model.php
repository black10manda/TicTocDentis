<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente_model extends CI_model{
	private $id;
	private $name;
	private $brith_date;
	private $email;
	private $place_of_date;
	private $occupation;
	private $home;
	private $phone;
	private $cellphone;
	private $sex;

	function __construct(){
		parent::__construct();
	}

		function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getBrith_date() {
            return $this->brith_date;
        }

        function getEmail() {
            return $this->email;
        }

        function getPlace_of_date() {
            return $this->place_of_date;
        }

        function getOccupation() {
            return $this->occupation;
        }

        function getHome() {
            return $this->home;
        }

        function getPhone() {
            return $this->phone;
        }

        function getCellphone() {
            return $this->cellphone;
        }

        function getSex() {
            return $this->sex;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setBrith_date($brith_date) {
            $this->brith_date = $brith_date;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPlace_of_date($place_of_date) {
            $this->place_of_date = $place_of_date;
        }

        function setOccupation($occupation) {
            $this->occupation = $occupation;
        }

        function setHome($home) {
            $this->home = $home;
        }

        function setPhone($phone) {
            $this->phone = $phone;
        }

        function setCellphone($cellphone) {
            $this->cellphone = $cellphone;
        }

        function setSex($sex) {
            $this->sex = $sex;
        }
	

	public function Listar(){
		if ($this->id != null) {
			$this->db->where('id',$this->id);
		}
		$cat=$this->db->get('patient');
		return $cat->result();
	}

	/*public function guardar(){
		$data =array(
			'categoria' => $this->categoria,
			'imagen' => $this->imagen
		);

		if ($this->idCategoria ==null) {
			# code...
			$this->db->insert('Categoria',$data);
		} else {
			# code...
			$this->db->where('idCategoria',$this->idCategoria);
			$this->db->update('categoria',$data);
		}*/


}