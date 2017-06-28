<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {
	public function __construct() {

	parent::__construct();
	$this->load->helper(array('form','url'));
	$this->load->library(array('session'));
	$this->load->database('');
	$this->load->model('reportModel');
    }

	function index() {
		$repResult = $this->reportModel->Reports();
		$data['reportsList'] = $repResult;
//		$this->load->view('_shared/_layout.php', $data);
		$this->load->view('Reports/index', $data);
		echo json_encode($data);
		
		
	}
	function All() {
		$reports = $this->reportModel->Reports();
		echo json_encode($reports);
	}
	
//	function New() {
//		$this->load->view('Reports/new');
//	}
}
