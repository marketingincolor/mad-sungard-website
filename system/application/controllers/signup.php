<?php

class Signup extends Controller {

	function Signup()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->helper('url');	
		$this->load->helper('form');
		//$data['submitted'] = $this->load->view('signup_type_form.php','',true);	
		//$this->load->view('signup_chooser', $data);
		
		$data = array(
			'main_content' => 'signup_chooser',
			'submitted' => $this->load->view('signup_type_form.php','',true)
			);
		//$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('includes/template', $data);
	}
	
	function urlhelp()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('signup_urlhelp');
	}
	function eula()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('signup_eula');
	}
	function photo()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('signup_photo');
	}
	function submit($id)
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$DB = $this->load->database('default', TRUE);
		
		if ($id == 'smx0410'){
			//$data['submitted'] = 'Your code was '.$id. ' - This is the FREE signup "results" page.';
			//$subdata['type'] = ''.$id.'';
			//$data['form'] = $this->load->view('signup_key_form.php',$subdata,true);
			redirect('upload/'.$id.'', 'refresh');
		
		} elseif ($id == 'sg123') {
			//$data['submitted'] = 'Your code was '.$id. ' - This is the PAY signup "results" page.';
			//$subdata['type'] = ''.$id.'';
			//$data['form'] = $this->load->view('signup_key_form.php',$subdata,true);
			//redirect('upload/'.$id.'', 'refresh');
			redirect('processing', 'refresh');
			
		} /*else {
			$data['submitted'] = 'Your code was INVALID! Please try again!';
		}*/

		//$this->load->view('signup_message', $data);
	}
	
	/*function formsubmit()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$DB = $this->load->database('default', TRUE);
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$this->load->library('upload', $config);
		

		//$this->load->view('signup_complete');
	}*/
}

/* End of file Signup.php */
/* Location: ./system/application/controllers/signup.php */