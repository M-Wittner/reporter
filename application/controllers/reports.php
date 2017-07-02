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
		$data['main_content'] = 'Reports/index';
		$this->load->view('includes/template', $data);
		echo json_encode($repResult);
		
	}
	function All() {
		$reports = $this->reportModel->Reports();
		echo json_encode($reports);
	}
	
	function Create() {
		$data['main_content'] = 'Reports/create';
		$this->load->view('includes/template', $data);
	}
	
	function Show() {
		$data['main_content'] = 'Reports/show';
		$this->load->view('includes/template', $data);
	}
}
