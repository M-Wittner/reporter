<?php

class Reports_model extends CI_Model {
	function getReports() {
		$q = $this->db->get('reports');
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		return $data;
		}
	}
	
	function createReport($data) {
		$this->db->insert('reports', $data);
		return;
	}
	
	function updateReport($data){
		$this->db->where('id', 1);
		$this->db->update('reports', $data);
	}
	
	function deleteReport(){
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('reports');
	}
	
}