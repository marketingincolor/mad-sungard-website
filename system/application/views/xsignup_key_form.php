<?php
	
	
	
/*function do_upload(){
	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '100';
	$config['max_width']  = '1024';
	$config['max_height']  = '768';
	$this->load->library('upload', $config);
	if ( ! $this->upload->do_upload())
	{
		$error = array('error' => $this->upload->display_errors());
		//$this->load->view('upload_form', $error);
	}	
	else
	{
		$data = array('upload_data' => $this->upload->data());
		//$this->load->view('upload_success', $data);
	}
}*/
function crop(){
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
    }
/*$this->image_lib->crop();
if ( ! $this->image_lib->crop())
{
    echo $this->image_lib->display_errors();
}*/
	
	
	
	
	
		$this->load->helper('form');
		$this->load->helper('url');
    
		
		
		
		
		
		$this->form_validation->set_rules('firstname','First Name','trim|required|xss_clean');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean');
		//$this->form_validation->set_rules('businessname','Name of Business','required');
		//$this->form_validation->set_rules('address1','Address1','required');
		//$this->form_validation->set_rules('city','City','trim|required|xss_clean');
		//$this->form_validation->set_rules('state','State/Province','trim|required');
		//$this->form_validation->set_rules('country','Country','required');
		//$this->form_validation->set_rules('zip','ZIP/Postal Code','required');
		//$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		//$this->form_validation->set_rules('username','Username','required');

		
	if ($this->form_validation->run() == FALSE) {
		echo"<span style='color:red;'>";
		echo validation_errors();
		echo"</span>";

		//if (empty($_POST['code'])) {
			$label_id = array('id' => 'sellerform',);
			$inputclass = 'class="formbox"';
			$hidden = array('product_id'=>'1','codetype'=>$type,);
			echo form_open_multipart(''.base_url().'index.php/signup/submit/'.$type.'','',$hidden);
			//echo form_open_multipart(''.base_url().'index.php/signup/formsubmit','',$hidden);
			echo form_fieldset('Your Information');
			echo form_label('First Name : ','firstname',$label_id);
			echo form_input('firstname',''. set_value('firstname') . '',$inputclass);
			echo "<br>";
			echo form_label('Last Name : ','lastname',$label_id);
			echo form_input('lastname',''. set_value('lastname') . '',$inputclass);
			echo "<br>";
			echo form_label('Email : ','email',$label_id);
			echo form_input('email',''. set_value('email') . '',$inputclass);
			echo "<br>";
			echo form_label('Upload Photo : ','userfile',$label_id);
			echo form_upload('userfile',''. set_value('upload') . '',$inputclass);
			
			echo "<br>";
			
			echo form_fieldset_close();
			echo form_submit('submit', 'Submit');
			echo form_close();
		//} else {
			//if (($_POST['code'] == '123') OR ($_POST['code'] == '456')){
				//redirect('http://localhost/MPC-2/test/index.php/signup/submit/'.$_POST['code'].'', 'refresh');
			//} 

			//else {
				//redirect('http://localhost/MPC-2/test/index.php/signup', 'refresh');
			//}
		//}
		
			
			
	} else {
		$DB = $this->load->database('default', TRUE);

    	$affiliate_id = "12";
    	//$client_type = $_POST['type'];
		//$product_id = $_POST['product_id'];
    	//$logo = 'default';
    	//$photo = './media/default_photo.jpg';
    	//$office_name = stripslashes($_POST['businessname']);
    	//if (isset($_POST['sun'])) {$day_sun = $_POST['sun'];} else {$day_sun = '0';}
    	//if (isset($_POST['mon'])) {$day_mon = $_POST['mon'];} else {$day_mon = '0';}
    	//if (isset($_POST['tue'])) {$day_tue = $_POST['tue'];} else {$day_tue = '0';}
    	//if (isset($_POST['wed'])) {$day_wed = $_POST['wed'];} else {$day_wed = '0';}
    	//if (isset($_POST['thu'])) {$day_thu = $_POST['thu'];} else {$day_thu = '0';}
    	//if (isset($_POST['fri'])) {$day_fri = $_POST['fri'];} else {$day_fri = '0';}
    	//if (isset($_POST['sat'])) {$day_sat = $_POST['sat'];} else {$day_sat = '0';}
    	//$address1 = $_POST['address1'];
    	//$address2 = $_POST['address2'];
    	//$address3 = $_POST['address3'];
    	//$city = $_POST['city'];
    	//$state = $_POST['state'];
    	//$country = $_POST['country'];
    	//$zip = $_POST['zip'];
    	//$phone = $_POST['phone'];
    	//if (isset($_POST['site_url_path'])) {$website = $_POST['site_url_path'];} else {$website = '';}
    	//$username = $_POST['username'];
    	//$password = $_POST['password'];
    	$email = $_POST['email'];
    	$dfn = $_POST['firstname'];
    	$dln = $_POST['lastname'];
    	//$dt = $_POST['suffix'];
    	//$clienttitle = $_POST['clienttitle'];
    		
    	//$c1name = 'Refer-A-Friend';
    	//$c1image = './media/default_doctor.jpg';
    	//$c1expiration = '0000-00-00';
    	//$c1disclaimertxt = 'Offer applies only to our current patients of record who use the Refer-A-Friend feature to make referral(s). Account credit applies when the person referred becomes our patient of record. Not valid in conjunction with any other offer.';
    	//if ($_POST['raf_type'] == 'raf_1') {$c1disclaimer = $c1disclaimertxt; $c1headline = '$25 Referral Reward!'; $c1description = stripslashes('We invite you to enjoy a $25 ACCOUNT CREDIT FOR EACH NEW PATIENT referred to our practice! Just click the "Refer-A-Friend" button below to share this website with everyone you feel may be interested in learning about our Special Offer.');}
    	//if ($_POST['raf_type'] == 'raf_2') {$c1disclaimer = $c1disclaimertxt; $c1headline = '$50 Referral Reward!'; $c1description = stripslashes('We invite you to enjoy a $50 ACCOUNT CREDIT FOR EACH NEW PATIENT referred to our practice! Just click the "Refer-A-Friend" button below to share this website with everyone you feel may be interested in learning about our Special Offer.');}
    	//if ($_POST['raf_type'] == 'raf_3') {$c1disclaimer = $c1disclaimertxt; $c1headline = '$75 Referral Reward!'; $c1description = stripslashes('We invite you to enjoy a $75 ACCOUNT CREDIT FOR EACH NEW PATIENT referred to our practice! Just click the "Refer-A-Friend" button below to share this website with everyone you feel may be interested in learning about our Special Offer.');}
    	//if ($_POST['raf_type'] == 'raf_4') {$c1disclaimer = $c1disclaimertxt; $c1headline = '$100 Referral Reward!'; $c1description = stripslashes('We invite you to enjoy a $100 ACCOUNT CREDIT FOR EACH NEW PATIENT referred to our practice! Just click the "Refer-A-Friend" button below to share this website with everyone you feel may be interested in learning about our Special Offer.');}
    	//if ($_POST['raf_type'] == 'raf_5') {$c1disclaimer = ''; $c1headline = 'We Appreciate Referrals!'; $c1description = stripslashes('We strive to provide exceptional care, and the greatest compliment we ever receive is when our patients refer their friends to our practice. Please click the "Refer-A-Friend" button below to share this website with everyone you feel may be interested in learning about our special offer. It\'s that easy!');}
    		    		    		    		    		
    	//$c2name = 'Special Offer';
    	//$c2image = './media/default_doctor.jpg';
    	//$c2expiration = '0000-00-00';
    	//$c2offer_type = $_POST['offer_type'];
		//if ($c2offer_type == 'sp_off_cust') {
    		//$c2headline = $_POST['sp_off_head'];
    		//$c2description = $_POST['sp_off_body'];
    		//$c2disclaimer =  $_POST['sp_off_disc'];
    	//}
    	//elseif ($c2offer_type == 'sp_off_def') {
    		//$c2headline = 'A Customized Special Offer Just For You!';
    		//$c2description = stripslashes('We\'re confident that once you\'ve visited us for the first time, you\'ll stay with us! Is there a procedure you\'ve been considering? Click "Redeem This Offer!" and use the Personal Comments area to let us know what you\'re interested in. We will then CUSTOMIZE A SPECIAL OFFER just for you!');
    		//$c2disclaimer = 'Customized offer for new patients only. Not valid in conjunction with any other offer.';
    	//}
    
    	//$si1 = $_POST['serv1'];
    	//$si2 = $_POST['serv2'];
    	//$si3 = $_POST['serv3'];
    	//$si4 = $_POST['serv4'];
    	//$si5 = $_POST['serv5'];
    	//$si6 = $_POST['serv6'];
    	//$si7 = $_POST['serv7'];
    	//$si8 = $_POST['serv8'];
    	//$si9 = $_POST['serv9'];
    	//$si0 = $_POST['serv0'];
    		
		//$lbxverbage = stripslashes('We truly appreciate each and every patient and we strive to provide exceptional care.<br><br>Whether you\'re an existing patient or considering our practice for the first time, please take a look at our Special Offer and share it with your friends.<br><br>Thank you!');
    	$clientsdata = array('affiliate_id'=>$affiliate_id,
		'type_id'=>'1',
		//'product_id'=>$product_id,
		//'logo_url'=>$logo,
        //'photo_url'=>$photo,
        //'office_name'=>$office_name,
    	'first_name'=>$dfn,
		'last_name'=>$dln,
		//'address'=>$address1,
		//'address2'=>$address2,
		//'city'=>$city,
		//'state'=>$state,
		//'country'=>$country,
		//'zip'=>$zip,
        //'sunday'=>''.$day_sun.'',
        //'monday'=>''.$day_mon.'',
        //'tuesday'=>''.$day_tue.'',
        //'wednesday'=>''.$day_wed.'',
        //'thursday'=>''.$day_thu.'',
        //'friday'=>''.$day_fri.'',
        //'saturday'=>''.$day_sat.'',
        //'phone'=>$phone,
		//'website'=>$website,
    	//'lbx_verbage'=>'The office of {DOCTOR_FIRST_NAME} {DOCTOR_LAST_NAME}, {DOCTOR_TITLE} truly appreciates each and every patient, and we strive to provide exceptional care.<br><br>Whether you\'re an existing patient of ours, or considering our practice for the first time, please take a look at <a href="javascript: show_hide(\'client_container,services_container,ref_container\', \'offer_container\');" class="tabg">Special Offers</a>!<br><br>Thank you!',
		//'lbx_verbage'=>$lbxverbage,
    	'current_part'=>'-1',
		);

		
		


		echo '***'.$clientsdata.'***';	
		//BEGIN DB INSERTS
		/*$DB->insert('clients',$clientsdata);

		$client_id = mysql_insert_id();
			if($client_id > 0){
				// Insert Disk
				//echo 'This Client ID is: '.$client_id.'<br>';
				$disksdata = array('name'=>'LinkBox - '.$office_name.'',
				'client_id'=>$client_id,
				);
				$DB2->insert('disks',$disksdata);
				$disk_id = mysql_insert_id();

				if($disk_id){
					// Insert Campaign
					//echo 'This Disk ID is: '.$disk_id.'<br>';
					$campaigndata = array('name'=>'LinkBox - '.$office_name.'',
					'template_id'=>'5',
					'active'=>'1',
					'disk_id'=>$disk_id,
					);
					$DB2->insert('campaigns',$campaigndata);
					$campaign_id = mysql_insert_id();
					//echo 'This Campaign ID is: '.$campaign_id.'<br>';
				}	
				// Insert User
				$userdata = array('access_level'=>'CLIENT',
				'active'=>'1',
				'username'=>$username,
				'password'=>md5($password),
				'first_name'=>$dfn,
				'last_name'=>$dln,
				'email'=>$email,
				'client_id'=>$client_id,
				'affiliate_id'=>$affiliate_id,
				);
				$DB2->insert('users',$userdata);
				$user_id = mysql_insert_id();
				//echo 'This Users ID is: '.$user_id.'<br>';
				
				// Insert Client Doctor Info
				$client_doctordata = array('client_id'=>$client_id,
				'first_name'=>$dfn,
				'last_name'=>$dln,
				'professional_title'=>$dt,
				);
				$DB2->insert('client_doctors',$client_doctordata);
				
				// Insert Coupon1 Data
				$coupon1data = array('campaign_id'=>$campaign_id,
				'name'=>$c1name,
				'image_url'=>$c1image,
				'headline'=>$c1headline,
				'expiration'=>$c1expiration,
				'disclaimer'=>$c1disclaimer,
				'description'=>$c1description,
				);
				$DB2->insert('coupons',$coupon1data);
				$coupon1_id = mysql_insert_id();

				// Insert Coupon2 Data
				$coupon2data = array('campaign_id'=>$campaign_id,
				'name'=>$c2name,
				'image_url'=>$c2image,
				'headline'=>$c2headline,
				'expiration'=>$c2expiration,
				'disclaimer'=>$c2disclaimer,
				'description'=>$c2description,
				);
				$DB2->insert('coupons',$coupon2data);
				$coupon2_id = mysql_insert_id();
				
				// Insert the Services Data
				if ($si1) {
					$si1data = array('client_id'=>$client_id,'name'=>$si1,'type_id'=>'1');
					$DB2->insert('services',$si1data);
					$si1data_id = mysql_insert_id();
					$si1data2 = array('client_id'=>$client_id,'service_id'=>$si1data_id,'order_id'=>'0');
					$DB2->insert('client_services',$si1data2);
	    		}
				if ($si2) {
					$si2data = array('client_id'=>$client_id,'name'=>$si2,'type_id'=>'1');
					$DB2->insert('services',$si2data);
					$si2data_id = mysql_insert_id();
					$si2data2 = array('client_id'=>$client_id,'service_id'=>$si2data_id,'order_id'=>'1');
					$DB2->insert('client_services',$si2data2);
	    		}
				if ($si3) {
					$si3data = array('client_id'=>$client_id,'name'=>$si3,'type_id'=>'1');
					$DB2->insert('services',$si3data);
					$si3data_id = mysql_insert_id();
					$si3data2 = array('client_id'=>$client_id,'service_id'=>$si3data_id,'order_id'=>'2');
					$DB2->insert('client_services',$si3data2);
	    		}
				if ($si4) {
					$si4data = array('client_id'=>$client_id,'name'=>$si4,'type_id'=>'1');
					$DB2->insert('services',$si4data);
					$si4data_id = mysql_insert_id();
					$si4data2 = array('client_id'=>$client_id,'service_id'=>$si4data_id,'order_id'=>'3');
					$DB2->insert('client_services',$si4data2);
	    		}
				if ($si5) {
					$si5data = array('client_id'=>$client_id,'name'=>$si5,'type_id'=>'1');
					$DB2->insert('services',$si5data);
					$si5data_id = mysql_insert_id();
					$si5data2 = array('client_id'=>$client_id,'service_id'=>$si5data_id,'order_id'=>'4');
					$DB2->insert('client_services',$si5data2);
	    		}
				if ($si6) {
					$si6data = array('client_id'=>$client_id,'name'=>$si6,'type_id'=>'1');
					$DB2->insert('services',$si6data);
					$si6data_id = mysql_insert_id();
					$si6data2 = array('client_id'=>$client_id,'service_id'=>$si6data_id,'order_id'=>'5');
					$DB2->insert('client_services',$si6data2);
	    		}
				if ($si7) {
					$si7data = array('client_id'=>$client_id,'name'=>$si7,'type_id'=>'1');
					$DB2->insert('services',$si7data);
					$si7data_id = mysql_insert_id();
					$si7data2 = array('client_id'=>$client_id,'service_id'=>$si7data_id,'order_id'=>'6');
					$DB2->insert('client_services',$si7data2);
	    		}
				if ($si8) {
					$si8data = array('client_id'=>$client_id,'name'=>$si8,'type_id'=>'1');
					$DB2->insert('services',$si8data);
					$si8data_id = mysql_insert_id();
					$si8data2 = array('client_id'=>$client_id,'service_id'=>$si8data_id,'order_id'=>'7');
					$DB2->insert('client_services',$si8data2);
	    		}
				if ($si9) {
					$si9data = array('client_id'=>$client_id,'name'=>$si9,'type_id'=>'1');
					$DB2->insert('services',$si9data);
					$si9data_id = mysql_insert_id();
					$si9data2 = array('client_id'=>$client_id,'service_id'=>$si9data_id,'order_id'=>'8');
					$DB2->insert('client_services',$si9data2);
	    		}
				if ($si0) {
					$si0data = array('client_id'=>$client_id,'name'=>$si0,'type_id'=>'1');
					$DB2->insert('services',$si0data);
					$si0data_id = mysql_insert_id();
					$si0data2 = array('client_id'=>$client_id,'service_id'=>$si0data_id,'order_id'=>'9');
					$DB2->insert('client_services',$si0data2);
	    		}

			//send email
			$therecipient = $affiliate_email . ', mpcmail@myprojectcenter.net';
			$thesubject = 'LinkBox: New Account Alert';
			$outmessage = " This email is to confirm that a LinkBox account has been established by " . $currentusername . " on behalf of " . $office_name . " on " . date('F j, Y') . ". \n\n To view your client's LinkBox URL, go to: http://www.myprojectcenter.net/coupon.php?disk_id=" . $disk_id . " \n\n If you haven't already, please get started with your client to implement the LinkBox program as soon as possible. \n\n You can review implementation steps by visiting the LinkBox VAR Support Blog at: http://c2g.typepad.com/linkbox_var/next-steps.html (password required). If you have any questions, please call Herb Young at Marketing In Color, Inc. at 1-877-258-3771 ext. 101 or email hyoung@marketingincolor.com. \n\n Thank you,\n The LinkBox Team";
			send_email($therecipient, $thesubject, $outmessage);
			}*/
		
			//bracket above ends database inserts
		
		
		
		
	}
	
	
	
	
?>