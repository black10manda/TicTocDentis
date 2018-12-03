<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Question_history_model extends CI_model{

	private $id;
	private $question;


	function __construct(){
		parent::__construct();
	}

	function getId() {
            return $this->id;
        }

        function getQuestion() {
            return $this->question;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setQuestion($question) {
            $this->question = $question;
        }


}