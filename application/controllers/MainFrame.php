<?php
	
	include 'classes/Student.php';
	
	class MainFrame extends CI_Controller {
		private $student;

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			echo getcwd();
		}
		
		public function index() {
			echo 'hello world';
		}
	}