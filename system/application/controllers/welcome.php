<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->helper('url');
		//$data['main_content'] = 'welcome_message';
		//$this->load->view('includes/template', $data);
		redirect('http://www.solamatrix.com','refresh');
	}
	function dashboard()
	{
		$this->load->helper('url');
		redirect('http://www.myprojectcenter.net','refresh');
	}
	function support()
	{
		$this->load->helper('url');
		$data['main_content'] = 'support_message';
		$this->load->view('includes/template_2', $data);
	}
	function promotions()
	{
		$this->load->helper('url');
		$data['main_content'] = 'promotions_message';
		$this->load->view('includes/template_2', $data);
	}
	function management()
	{
		$this->load->helper('url');
		$data['main_content'] = 'management_message';
		$this->load->view('includes/template_2', $data);
	}
	function feedback()
	{
		$this->load->helper('url');
		$data['main_content'] = 'feedback_message';
		$this->load->view('includes/template_2', $data);
	}
    function redirection()
    {
        $this->load->helper('url');
        redirect('http://sun-gard.com','refresh');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */