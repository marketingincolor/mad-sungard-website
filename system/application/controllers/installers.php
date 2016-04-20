<?php

class Installers extends Controller {

	function Installers()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('installer_message');
	}
	
	function installer($name)
	{
		$this->load->helper('dom');
		
		$data['installer_name'] = $name;

		$this->load->database();
		$query = $this->db->query('SELECT * FROM disks WHERE name = "'.$name.'"');       
		$row = $query->row();
		
		$client = $this->db->query('SELECT * FROM clients WHERE id ="' .$row->client_id. '"');
		$row2 = $client->row();
		
		if ($row) {
			if ($row2->affiliate_id != '12') { redirect('.','refresh');}
		$data['diskid'] = $row->id;
		$data['installer_name'] = $name;
		$data['office_name'] = $row2->office_name;
		$data['city'] = $row2->city;
		//$this->load->view('installer_message', $data);
		} else {
		$data['diskid'] = "unavailable";
		$data['installer_name'] = "unavailable";
		//redirect('.','refresh');
		}
		//$this->load->view('installer_message', $data);
		
		//$this->load->helper('dom');
		$html = file_get_html('http://www.myprojectcenter.net/matrix.php?d='.$row->id);
		
		//$data['thishtml'] = file_get_html('http://www.myprojectcenter.net/matrix.php?d='.$row->id);
		echo $html;
	}
	
}

/* End of file installers.php */
/* Location: ./system/application/controllers/installers.php */