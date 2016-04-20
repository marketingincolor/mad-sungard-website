<?php

class Locator extends Controller {

	function Locator()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{//http://blog.sungarddealer.com/rss.xml
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

		$this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_message',
			'submitted' => $this->load->view('search_form_country.php','',true),
			'rssfeed' => $getfeed,
			'thiscountry' => '',
			'thisregion' => ''
			);
		$this->load->view('includes/template_3', $data);
	}

	function us()
	{
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

        $this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$country = 'us';
		$rdata = array('country'=>$country,);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_message',
			'submitted' => $this->load->view('search_form_region.php', $rdata, true),
			'rssfeed' => $getfeed,
			'thiscountry' => $country,
			'thisregion' => ''
			);
		$this->load->view('includes/template_3', $data);
	}
	
	function ca()
	{
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

        $this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$country = 'ca';
		$rdata = array('country'=>$country,);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_message',
			'submitted' => $this->load->view('search_form_region.php', $rdata, true),
			'rssfeed' => $getfeed,
			'thiscountry' => $country,
			'thisregion' => ''
			);
		$this->load->view('includes/template_3', $data);
	}
	
	function region_us($region)
	{
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

        $this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$country = 'us';
		$rdata = array('country'=>$country,'region'=>$region);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_results',
			'submitted' => $this->load->view('search_form_region.php', $rdata, true),
			'results' => $this->load->view('locator_region_results.php', $rdata, true),
			'rssfeed' => $getfeed,
			'thiscountry' => $country,
			'thisregion' => $region
			);
		$this->load->view('includes/template_3', $data);
	}

	function region_ca($region)
	{
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

        $this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$country = 'ca';
		$rdata = array('country'=>$country,'region'=>$region);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_results',
			'submitted' => $this->load->view('search_form_region.php', $rdata, true),
			'results' => $this->load->view('locator_region_results.php', $rdata, true),
			'rssfeed' => $getfeed,
			'thiscountry' => $country,
			'thisregion' => $region
			);
		$this->load->view('includes/template_3', $data);
	}
	
	function city_us($region,$city)
	{
        $feed_url = 'http://blog.sungarddealer.com/rss.xml';
        $altfeed_url = 'http://www.madico.com/feed/';
        $file_headers = @get_headers($feed_url);
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $myfeed = $altfeed_url;
        } else {
            $myfeed = $feed_url;
        }

        $this->load->library('RSSParser', array('url' => $myfeed, 'life' => 2));
		$getfeed = $this->rssparser->getFeed(8);
		$country = 'us';
		$rdata = array('country'=>$country,'region'=>$region,'city'=>$city);
		$data = array(
			'title' => 'Window Film, Window Tint, Car Tint - SUN-GARD Solar Window Film by Madico',
			'main_content' => 'directory_grp_results',
			'submitted' => $this->load->view('search_form_region.php', $rdata, true),
			'results' => $this->load->view('locator_city_results.php', $rdata, true),
			'rssfeed' => $getfeed,
			'thiscountry' => $country,
			'thisregion' => $region,
			'thiscity' => $city
			);
		$this->load->view('includes/template_3', $data);
	}
	
	
	function lookupc()
	{
		$thiscountry = $_POST['country'];
		if ($thiscountry == 'United States') 
		{ 
			$newthiscountry = 'us'; 
		}
		elseif ($thiscountry == 'Canada') 
		{ 
			$newthiscountry = 'ca'; 
		}
		redirect($newthiscountry, 'location');
	}
	
	function lookupr()
	{
		$thisregion = $_POST['state'];
		$thiscountry = $_POST['country'];
			if ($thiscountry == 'United States') 
		{ 
			$newthiscountry = 'us'; 
		}
		elseif ($thiscountry == 'Canada') 
		{ 
			$newthiscountry = 'ca'; 
		}
		redirect( $newthiscountry.'/'.strtolower($thisregion), 'location');
	}


}

/* End of file directory.php */
/* Location: ./system/application/controllers/directory.php */