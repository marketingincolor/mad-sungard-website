<?php

class Processing extends Controller {

	function Processing()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{
		$data['main_content'] = 'processor_start';
		$this->load->view('includes/template', $data);
	}
	function success()
	{

		//$this->load->view('processor_success');
		redirect('upload/sg123', 'refresh');
	}
	function error()
	{

		$data['main_content'] = 'processor_error';
		$this->load->view('includes/template', $data);
	}

}

/* End of file Processor.php */
/* Location: ./system/application/controllers/processor.php */