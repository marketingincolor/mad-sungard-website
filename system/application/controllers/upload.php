<?php

class Upload extends Controller {
	
	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{	
		$data = array(
			'main_content' => 'upload_form',
			'error' => ' '
			);
		//$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('includes/template', $data);
	}

	function pre_upload($type)
	{	
		$data = array(
			'main_content' => 'upload_form',
			'error' => ' ',
			'type' => $type
			);	
		//$this->load->view('upload_form', array('error' => ' ','type' => $type ));
		$this->load->library('form_validation');

		//$this->load->view('includes/template', $data);
		redirect('upload/do_upload/'.$type.'','location');
	}
	
	function check_domain($input)
	{
		$DB = $this->load->database('default', TRUE);
		//$query = $DB->query('SELECT bna_url FROM clients WHERE affiliate_id = 12');            
		$query = $DB->query('SELECT * FROM disks WHERE name ="'.$input.'"');
		//$checkresult = $query->result_array();
		//$solid = '';
		//foreach ($query->result_array() as $row)
		//{
		//	if ($row['bna_url'] == $input) {$solid = '1';}
		//}
		//if ($solid) {
		$returned = $query->num_rows();
		//$testid = $row->client_id;
		//echo ''.$row['id'].'';
		//print_r ($query);
		if ($returned == '1') {
			echo "<span class='red small'>NOT AVAILABLE</span>";
		} else {
			if (strpos($input, ' ')){
				echo "<span class='red small'>NAME CANNOT CONTAIN SPACES<span><input type='hidden' name='weblink' value='' id='weblink'>";
			} elseif (strpos($input, '.')) {
				echo "<span class='red small'>NAME CANNOT CONTAIN PUNCTUATION<span>";
			} else {
				echo "<span class='green small'>AVAILABLE<span>";
			}
			//echo "<span class='green small'>AVAILABLE<span>";
		}
	}
	
	
	
	

	
	function do_upload($type)
	{

		$this->load->helper('form');
		$this->load->helper('email');
		$this->load->helper('inflector');
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','First Name','trim|required|xss_clean');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('address1','Address1','required');
		$this->form_validation->set_rules('address2','Address2','xss_clean');
		$this->form_validation->set_rules('city','City','trim|required|xss_clean');
		$this->form_validation->set_rules('state','State/Province','trim|required|min_length[4]');
		$this->form_validation->set_rules('zip','ZIP/Postal Code','required');
		$this->form_validation->set_rules('country','Country','trim|required');
		//$this->form_validation->set_rules('showmap','','numeric');
		$this->form_validation->set_rules('sun','','numeric');
		$this->form_validation->set_rules('mon','','numeric');
		$this->form_validation->set_rules('tue','','numeric');
		$this->form_validation->set_rules('wed','','numeric');
		$this->form_validation->set_rules('thu','','numeric');
		$this->form_validation->set_rules('fri','','numeric');
		$this->form_validation->set_rules('sat','','numeric');
		$this->form_validation->set_rules('businessname','Display Name','required');
		$this->form_validation->set_rules('weblink','Web Address','alpha_dash|required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('showaddress','','numeric');
		$this->form_validation->set_rules('cellphone','','numeric');
		$this->form_validation->set_rules('carrier','','min_length[4]');
		$this->form_validation->set_rules('templatetype','Template Type','callback_template_check');
		$this->form_validation->set_rules('eula','End User License Agreement','callback_eula_check');
		//$this->form_validation->set_message('required', 'Your custom message here');
		//$this->form_validation->set_message('templatetype', 'You must choose a Template Type to continue');
		//$this->form_validation->set_message('eula', 'You must agree to the terms of the End User License Agreement');
	if ($this->form_validation->run() == FALSE) {
		$data = array('main_content' => 'upload_form','error' => ' ','type' => $type);
		$this->load->view('includes/template', $data);
	} else {
	

		
		
		$DB = $this->load->database('default', TRUE);

    	$affiliate_id = "12";
    	//$client_type = $_POST['type'];
		$product_id = $_POST['product_id'];
		//$product_id = $_POST['codetype'];
    	//$logo = 'default';
    	//$photo = './media/default_photo.jpg';
    	$office_name = stripslashes($_POST['businessname']);
    	if (isset($_POST['sun'])) {$day_sun = $_POST['sun'];} else {$day_sun = '0';}
    	if (isset($_POST['mon'])) {$day_mon = $_POST['mon'];} else {$day_mon = '0';}
    	if (isset($_POST['tue'])) {$day_tue = $_POST['tue'];} else {$day_tue = '0';}
    	if (isset($_POST['wed'])) {$day_wed = $_POST['wed'];} else {$day_wed = '0';}
    	if (isset($_POST['thu'])) {$day_thu = $_POST['thu'];} else {$day_thu = '0';}
    	if (isset($_POST['fri'])) {$day_fri = $_POST['fri'];} else {$day_fri = '0';}
    	if (isset($_POST['sat'])) {$day_sat = $_POST['sat'];} else {$day_sat = '0';}
    	$address1 = $_POST['address1'];
    	$address2 = $_POST['address2'];
    	//$address3 = $_POST['address3'];
    	$city = $_POST['city'];
    	$state = $_POST['state'];
    	$country = $_POST['country'];
    	$zip = $_POST['zip'];
    	$phone = $_POST['phone'];
    	//if (isset($_POST['site_url_path'])) {$website = $_POST['site_url_path'];} else {$website = '';}
    	if (isset($_POST['cellphone'])) {$smscellphone = $_POST['cellphone'];} else {$smscellphone = '';}
	    if (isset($_POST['carrier'])) {$smscarrier = $_POST['carrier'];} else {$smscarrier = '';}
	    if ( ($smscellphone == '') || ($smscarrier == '') ) {$smsnumber = '';} else {$smsnumber = $smscellphone.$smscarrier;}
    	//$username = $_POST['username'];
    	$password = $_POST['password'];
    	$email = $_POST['email'];
    	$dfn = $_POST['firstname'];
    	$dln = $_POST['lastname'];
    	//$clienttitle = $_POST['clienttitle'];
    	$diskname = $_POST['weblink'];
    	$camptype = $_POST['templatetype'];
    	if (isset($_POST['showaddress'])) {$showmap = $_POST['showaddress'];} else {$showmap = '0';}
    	$c1name = 'Refer-A-Friend';
    	$c1expiration = '0000-00-00';
	    $c1disclaimer = ''; 
	    $c1headline = 'We Appreciate Referrals!'; 
	    $c1description = stripslashes('We Appreciate Referrals! Please click the "Refer-A-Friend" button to share this website with everyone you feel may be interested in learning about our special offer. It\'s that easy!');
    	//$c1disclaimertxt = 'Offer applies only to our current patients of record who use the Refer-A-Friend feature to make referral(s). Account credit applies when the person referred becomes our patient of record. Not valid in conjunction with any other offer.';
	    		    		    		    		
    	$c2name = 'Special Offer';
    	$c2expiration = '0000-00-00';
    	//$c2offer_type = $_POST['offer_type'];
		//if ($c2offer_type == 'sp_off_cust') {
    		//$c2headline = $_POST['sp_off_head'];
    		//$c2description = $_POST['sp_off_body'];
    		//$c2disclaimer =  $_POST['sp_off_disc'];
    	//}
    	//elseif ($c2offer_type == 'sp_off_def') {
    		$c2headline = 'For BEST PRICING, Request An Appointment Here!';
    		$c2description = stripslashes('Fast access to great pricing on superior quality window film is just a few clicks away. Just complete the form below to request an appointment for your FREE estimate!');
    		$c2disclaimer = '';
    	//}
    		
    	
    	$clientsdata = array('affiliate_id'=>$affiliate_id,
		'type_id'=>'10',
		'product_id'=>$product_id,
		//'logo_url'=>$logo,
        //'photo_url'=>$photo,
        'office_name'=>$office_name,
    	'first_name'=>$dfn,
		'last_name'=>$dln,
		'address'=>$address1,
		'address2'=>$address2,
		'city'=>$city,
		'state'=>$state,
		'country'=>$country,
		'zip'=>$zip,
        'sunday'=>''.$day_sun.'',
        'monday'=>''.$day_mon.'',
        'tuesday'=>''.$day_tue.'',
        'wednesday'=>''.$day_wed.'',
        'thursday'=>''.$day_thu.'',
        'friday'=>''.$day_fri.'',
        'saturday'=>''.$day_sat.'',
        'phone'=>$phone,
    	'email'=>$email,
		//'website'=>$website,
		'fees_url'=>''.$smsnumber.'',
    	'lbx_verbage'=>'Insert Verbage Here',
		//'lbx_verbage'=>$lbxverbage,
    	'current_part'=>'-1',
    	'showmap'=>''.$showmap.'',
    	'client_start'=>date('Y-m-d'),
    	// REMOVE ALL BELOW FOR SERVER INSTALL - NEEDED ONLY TO FORCE LOCALHOST VERSION TO CREATE RECORDS
    	'about_us_photo_url'=>'None',
    	'about_services_verbage'=>'None',
    	'verbage'=>'None',
    	'lbx_verbage'=>'None',
    	'testimonial'=>'None',
    	'presentation_audio'=>'None',
    	'presentation_video'=>'None',
    	'presentation_color_url'=>'None',
    	'presentation_color1'=>'None',
    	'presentation_color2'=>'None',
    	'presentation_color3'=>'None',
    	'package_text'=>'None',
    	'package_text_title'=>'None',
    	'theme_id'=>'None',
    	'section1_background_image'=>'None',
    	'section2_background_image'=>'None',
    	'section3_background_image'=>'None',
    	'section4_background_image'=>'None',
    	'section3_title'=>'Testimonials',
    	'package_design'=>'None',
    	'package_image'=>'None',
    	'package_image_custom'=>'None',
    	'over_5_services'=>'0',
    	'include_url_with_services'=>'0',
    	'doctor_selection'=>'0',
    	'bna_selection'=>'0',
    	'distro'=>'None',
    	'client_stop'=>'0000-00-00',
    	
		);
		//BEGIN DB INSERTS
		$DB->insert('clients',$clientsdata);

		$client_id = mysql_insert_id();
			if($client_id > 0){
				// Insert Disk
				//echo 'This Client ID is: '.$client_id.'<br>';
				$disksdata = array('name'=>''.$diskname.'',//This writes to name field so URL will work properly
				'client_id'=>$client_id,
				);
				$DB->insert('disks',$disksdata);
				$disk_id = mysql_insert_id();

				if($disk_id){
					// Insert Campaign
					//echo 'This Disk ID is: '.$disk_id.'<br>';
					$campaigndata = array('name'=>'LinkBox - '.$office_name.'',
					'template_id'=>'11',
					'active'=>'1',
					'disk_id'=>$disk_id,
					'type'=>$camptype,
					);
					$DB->insert('campaigns',$campaigndata);
					$campaign_id = mysql_insert_id();
					//echo 'This Campaign ID is: '.$campaign_id.'<br>';
				}	
				// Insert User
				$userdata = array('access_level'=>'CLIENT',
				'active'=>'1',
				'username'=>$email,
				'password'=>md5($password),
				'first_name'=>$dfn,
				'last_name'=>$dln,
				'email'=>$email,
				'client_id'=>$client_id,
				'affiliate_id'=>$affiliate_id,
				);
				$DB->insert('users',$userdata);
				$user_id = mysql_insert_id();
				//echo 'This Users ID is: '.$user_id.'<br>';
				
				// Insert Client Doctor Info
				//$client_doctordata = array('client_id'=>$client_id,
				//'first_name'=>$dfn,
				//'last_name'=>$dln,
				//'professional_title'=>$dt,
				//);
				//$DB->insert('client_doctors',$client_doctordata);
				
				// Insert Coupon1 Data
				$coupon1data = array('campaign_id'=>$campaign_id,
				'name'=>$c1name,
				//'image_url'=>$c1image,
				'headline'=>$c1headline,
				'expiration'=>$c1expiration,
				'disclaimer'=>$c1disclaimer,
				'expires'=>'0',
				'description'=>$c1description,
				);
				$DB->insert('coupons',$coupon1data);
				$coupon1_id = mysql_insert_id();

				// Insert Coupon2 Data
				$coupon2data = array('campaign_id'=>$campaign_id,
				'name'=>$c2name,
				//'image_url'=>$c2image,
				'headline'=>$c2headline,
				'expiration'=>$c2expiration,
				'disclaimer'=>$c2disclaimer,
				'expires'=>'0',
				'description'=>$c2description,
				);
				$DB->insert('coupons',$coupon2data);
				$coupon2_id = mysql_insert_id();

			//send email
			$therecipient = 'aleonetti@madico.com, sungardwebnet+'.underscore($city).'@gmail.com, cparrish@marketingincolor.com, jparrish@marketingincolor.com, etwilbeck@marketingincolor.com';
			$thesubject = 'NEW Solamatrix WebNet User';
			$outmessage = "A new user has just signed up for the Solamatrix WebNet Program! \n\n" . $dfn . " " . $dln . " has launched a WebNet site at http://www.sungarddealer.com/" . $diskname . " \n\nThank you,\nThe LinkBox Team";
			//send_email($therecipient, $thesubject, $outmessage);
			$this->email->from('SunGardWebNet@gmail.com', 'SUN-GARD WebNet');
			$this->email->to($therecipient);
			$this->email->subject($thesubject);
			$this->email->message($outmessage);
			$this->email->send();
			
			$nextrecipient = ''.$email.', etwilbeck@marketingincolor.com';
			$nextsubject = 'Your New SUN-GARD WebNet Site!';
			$nextmessage = "" . $dfn . ",\n\nWelcome and thank you for signing up for the SUN-GARD WebNet system!\n\nPLEASE READ AND SAVE THIS EMAIL AS IT CONTAINS 3 IMPORTANT PIECES OF INFORMATION:\n\n1. Your WebNet site is http://www.sungarddealer.com/" . $diskname . " and it's ready for you to use.\n\n2. For ideas and tips on using your SUN-GARD WebNet site, please visit www.sungarddealer.com/support.\n\n3. We've made it very easy for you to track your WebNet activities and to edit the content of your WebNet site online. Use the following information to log into your online dashboard at http://www.sungarddealer.com/dashboard\n\nusername: " . $email . "\npassword: " . $password . "\n\nThank you!\nThe SUN-GARD WebNet Team \n\nThis message was sent from a notification-only email address that does not accept incoming email. PLEASE DO NOT REPLY to this message. For questions or feedback, please submit a form at http://sungarddealer.com/feedback. \n\nQuestions/Problems re: your WebNet site? Email marketing@solamatrix.com\n\n\n\n\n\n\nWebNet powered by <a href='http://www.marketingincolor.squarespace.com/'>LinkBox</a>&trade; ";
			//send_email($nextrecipient, $nextsubject, $nextmessage);
			$this->email->from('SunGardWebNet@gmail.com', 'SUN-GARD WebNet');
			$this->email->to($nextrecipient);
			//$this->email->cc();
			$this->email->subject($nextsubject);
			$this->email->message($nextmessage);
			$this->email->send();
			
			}
			//bracket above ends database inserts
		
			
			
			
			
			
			
			
		//$clientpath = '777';
		$clientpath = $client_id;
		$target_path = "./uploads/".$clientpath."/";
		$makepath = $target_path;//was $target_path.$this->clientId."/", but trimmed
		if(!realpath($makepath)) {
			$old = umask(0);
			mkdir($makepath,0777);
			umask($old);
		}

		//echo $clientpath;
		//all coding above in function will send to client info to DB, 
		//and create the variable $client for use below:
		if ($clientpath) {
			$config['upload_path'] = './uploads/'.$clientpath.'/';
		} else {
			$config['upload_path'] = './uploads/';
		}
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4096';
		//$config['max_width']  = 0;
		//$config['max_height']  = 0;
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$error = array('error' => '','type' => $type);
			////$error = array('main_content' => 'upload_form','error' => ' ','type' => $type);
			//$this->load->view('upload_form', $error);
			////$this->load->view('includes/template', $error);
		}	
		else
		{
		//	$data = array('upload_data' => $this->upload->data(), 'clientpath' => $clientpath);
		//	$this->load->view('upload_crop', $data);
		
		//ADDITIONAL CODE REQUIRED HERE TO WRITE THE PATH THAT THE IMAGE WAS UPLOADED TO INTO THE MPC DATABASE
		//$queryback = $DB->query('SELECT * FROM clients WHERE client_id = '.$client_id.'');
		$fileup = $this->upload->data();
		$myfilepath = $fileup['file_name'];
		$modpath = $fileup['full_path'];
		//chmod($modpath, 0777);
		$databack = array(
			'photo_url'=> 'http://www.sungarddealer.com/uploads/'.$client_id.'/'.$myfilepath.'',
		); 
		$DB->where('id', $client_id);
		$DB->update('clients', $databack);  
			
		}	
		

		//and finally, we show the upload_complete_form
		$data = array('main_content' => 'upload_form_complete','error' => ' ','type' => $type);
		$this->load->view('includes/template', $data);
		}
		
		
	
		

	}//closes do_upload

	
	
	
	function template_check($template_value)
	{
		if($template_value == '') {
		$this->form_validation->set_message('template_check', 'You must choose a %s.');
		return FALSE;
		} else {
		return TRUE;
		}
	}
	function eula_check($eula_value)
	{
		if($eula_value == '') {
		$this->form_validation->set_message('eula_check', 'You must indicate that you agree to the %s.');
		return FALSE;
		} else {
		return TRUE;
		}
	}
	
	
	
	
	
	/*function crop(){
        $config['image_library'] = 'gd2';
        $config['source_image'] = $this->session->flashdata('file');
        $config['x_axis'] = $_POST['x'];
        $config['y_axis'] = $_POST['y'];
        $config['height'] = $_POST['h'];
        $config['width'] = $_POST['w'];
        $config['maintain_ratio'] = FALSE;
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
        if ( ! $this->image_lib->crop())
        {
            echo $this->image_lib->display_errors();
        }
        echo '<img src="'.substr($config['source_image'],1).'" />';
    }*/

}//closes controller
