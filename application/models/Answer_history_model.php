<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_history_model extends CI_model{
	private $id;
	private $question_history_id;
	private $anwer;

	function __construct(){
		parent::__construct();
	}

	function getId() {
            return $this->id;
        }

        function getQuestion_history_id() {
            return $this->question_history_id;
        }

        function getAnwer() {
            return $this->anwer;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setQuestion_history_id($question_history_id) {
            $this->question_history_id = $question_history_id;
        }

        function setAnwer($anwer) {
            $this->anwer = $anwer;
        }




}

