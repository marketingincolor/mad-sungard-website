<?php

class Search extends Controller {

	function Search()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{//http://blog.sungarddealer.com/rss.xml
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        //$altfeed_url = 'http://www.madico.com/feed/';
        //$file_headers = @get_headers($feed_url);
        //$file_headers = simplexml_load_string($feed_url);
        //if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
        //if ($file_headers === FALSE) {
        //    $myfeed = $altfeed_url;
        //} else {
            $myfeed = $feed_url;
        //}

		//$this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
        //$getfeed = @$this->rssparser->getFeed(8);

		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'search_message',
			'submitted' => $this->load->view('search_form.php','',true)//,
			//'rssfeed' => $getfeed
			);
		$this->load->view('includes/template_3', $data);
	}

	function flat()
	{
		$data = array(
			'title' => 'Protect Your Home or Commercial Building - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'flat_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	
	function auto()
	{
		$data = array(
			'title'=> 'Protect Your Car, Truck, RV, Boat or Other Vehicle - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'auto_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	
	function about()
	{
		$data = array(
			'title' => 'About Us - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'about_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	function why()
	{
		$data = array(
			'title' => 'Why Use Window Film? - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'why_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	function where()
	{
		$data = array(
			'title' => 'Where to Buy - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'where_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	function faq()
	{
		$data = array(
			'title' => 'Frequently Asked Questions - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'faq_message',
			'submitted' => $this->load->view('search_form.php','',true)
			);
		$this->load->view('includes/template_3', $data);
	}
	function terms()
	{
		$data = array(
			'title' => 'Terms & Conditions',
			'main_content' => 'terms_message',
			'submitted' => $this->load->view('search_form.php','',true)
		);
		$this->load->view('includes/template_3', $data);
	}
    function simulator()
    {
        $data = array(
            'title'=> 'Protect Your Car, Truck, RV, Boat or Other Vehicle - SUN-GARD Solar Window Film by Madico',
            'main_content' => 'sim_message',
            'submitted' => $this->load->view('search_form.php','',true)
        );
        $this->load->view('includes/template_3', $data);
    }

	function lookup()
	{
		//$data['main_content'] = 'directory_message';
		/*$data = array(
			'title' => 'Directory - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_message',
			'thisstate' => $_POST['state'],
			'thiscountry' => $_POST['country']
			);*/
		//$this->load->view('includes/template_3', $data);
		
		$thiscountry = $_POST['country'];
		$thisstate = $_POST['state'];
		if ($thiscountry == 'United States') 
		{ 
			$newthiscountry = 'us'; 
		}
		elseif ($thiscountry == 'Canada') 
		{ 
			$newthiscountry = 'ca'; 
		}
		//redirect($newthiscountry, 'location');
		redirect($newthiscountry.'/'.strtolower($thisstate), 'location');
	}

	function findstate($input)
	{
		$DB = $this->load->database('default', TRUE);        
		//$query = $DB->query('SELECT state FROM clients WHERE affiliate_id = "12" AND country = "'.$input.'"');
		$query = $DB->query('SELECT DISTINCT state FROM clients WHERE affiliate_id = "12" AND type_id != "0" AND country = "'.$input.'" ORDER BY state');
		$result = $query->result_array();

		if ($query->num_rows() > 0)
		{
   			//$row = $query->row_array();
   			//$row = $query->array();
			/*foreach ($query->result_array() as $row)
				{
					print_r ($query) ;
				}*/
		$showlist;
		foreach ($result as $query)
			$showlist[$query['state']] = $query['state'];
			
		//print_r($showlist);
		//return $showlist;
		
			echo "<select name='state' class='formbox' id='state' onChange='findclient();'><option value=''>Choose State/Region</option>";
			//echo "<select name='state' class='formbox' id='state' onChange='this.form.submit();'><option value=''>Choose State/Region</option>";
			//echo "<select name='state' class='formbox' id='state' onChange='submitstate();'><option value=''>Choose State/Region</option>";
			foreach ($showlist as $key => $value)
			{
			echo "<option value='".$value."'>".$value."</option>";
			}
			echo "</select>";
		} else {
			echo "<select name='state' class='formbox'><option value=''>None Available</option></select>";
		}

		/*$returned = $query->num_rows();
		//$testid = $row->client_id;
		//echo ''.$row['id'].'';
		//print_r ($query);
		if ($returned != '0') {
			print_r($showlist);
		    //$this->data['show_states'] = $this->get_state->get_dropdown_array('id', 'state','clients');
			echo "<span class='small'> AVAILABLE</span>$returned";
			
			//$row = $showlist;
			echo "<select name='state'>";
			foreach ($showlist as $key => $value)
			{
			echo "<option value=".$value."> ".$value. " ";
			}
			echo "</select>";
			
		} else {
			echo "<span class='small'>NOT AVAILABLE<span>$returned";
		}*/
	}
	function findclient($input)
	{
		$DB = $this->load->database('default', TRUE);        
		//$query = $DB->query('SELECT state FROM clients WHERE affiliate_id = "12" AND country = "'.$input.'"');
		//$query = $DB->query('SELECT * FROM clients WHERE affiliate_id = "12" AND type_id != "0" AND state = "'.$input.'"');
		$query = $DB->query('SELECT clients.id, clients.office_name, clients.address, clients.address2, clients.city, clients.state, clients.country, clients.zip, clients.phone, disks.id, disks.name, campaigns.id, campaigns.type FROM clients INNER JOIN disks ON (disks.client_id = clients.id) INNER JOIN campaigns ON ( campaigns.disk_id = disks.id) WHERE affiliate_id = "12" AND type_id != "0" AND state = "'.$input.'"');
		
		$result = $query->result_array();
		
		if ($query->num_rows() > 0)
		{
   			$row = $query->row_array();
   			//$row = $query->array();
   			echo "<h2>".$row['country']." > ".$row['state']."</h2>";
			foreach ($query->result_array() as $row)
				{
					if ($row['type'] == 'matrix') {
						$instype = 'Auto and Flat Glass';
					} elseif ($row['type'] == 'matrix2') {
						$instype = 'Flat Glass';
					} elseif ($row['type'] == 'matrix3') {
					$instype = 'Automotive Glass';
					}
					if ($row['name']) {
						$clienturl = "<a href='http://www.sungarddealer.com/".$row['name']."' target='_new'>".$row['office_name']."</a>";
					} else {
						$clienturl = $row['office_name'];
					}
					if (strlen($row['phone']) == 10) 
					{
						$clientphone = substr($row['phone'],0,3)."-".substr($row['phone'],3,3)."-".substr($row['phone'],6,4);
					} else {
						$clientphone = $row['phone'];
					}
					echo "<span style='font-size:18px; font-weight:bold;'>".$clienturl."</span>&nbsp;-&nbsp;".$instype."<br>".$row['address']." ".$row['address2']."<br>".$row['city']."<br>".$row['zip']."<br><b>".$clientphone."</b><br><br>";
				}
		} else {
			//print_r ($query) ;
			echo "<h2>THIS IS NOT A RESULT!!!</h2>";
		}
		
		//$data['main_content'] = 'directory_message';
		//$this->load->view('includes/template_2', $data);
		
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */