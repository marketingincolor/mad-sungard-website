<div class="col_one left" style="text-align:center;"><img src="<?php echo base_url();?>images/sungard_promo_left.jpg" border="0"></div>

<div class="col_two right">
<?php
	$helpset = array(
		'width' => '660',
		'height' => '540',
		'scrollbars' => 'yes',
		'status' => 'yes',
		'resizable' => 'yes',
		'screenx' => '0',
		'screeny' => '0'
	);
	//echo anchor_popup('signup/urlhelp','test',$helpset);
?>

<?php if ($type != 'sg123') { ?>

<h1 class="orange" style="margin-bottom:0px;">Let's Get Started!</h1>
<img src="<?php echo base_url();?>images/sungard_clock.jpg" border="0" class="right">
<p>Please complete and submit the form below. Upon submitting, you will receive a link to your new WebNet microsite via email!<br><br>
<span class="red bold">Step 1:</span><br>
Before you begin, <?php echo anchor_popup('signup/photo','read these instructions',$helpset); ?> about submitting a photo.<br><br>
<span class="red bold">Step 2:</span><br>

<?php } else { ?>

<h1 class="orange" style="margin-bottom:0px;">Submit Your Info!</h1>
<img src="<?php echo base_url();?>images/sungard_clock.jpg" border="0" class="right">
<p><span class="red bold">Step 3:</span><br>Please complete and submit the form below. Upon submitting, you will receive a link to your new WebNet microsite via email!<br><br>
Before you begin, <?php echo anchor_popup('signup/photo','read these instructions',$helpset); ?> about submitting a photo.<br><br>

<?php } ?>

Complete the form and click "submit" at the bottom.</p>

<p><span class="red small">*Required fields.</span> <span class="green small">None of the information you enter will save into the system, until you click the "submit" button at the bottom of 
the form.</span></p>

<?php echo $error;?>

<script type="text/javascript">
function checkname()
{
	var ajaxRequest;  // The variable that makes Ajax possible!
	//alert("MESSAGE!");
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}

	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			//document.myForm.time.value = ajaxRequest.responseText;
			var ajaxDisplay = document.getElementById('ajaxDiv');
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}
	var weblink = document.getElementById('weblink').value;
	var queryString = "/" + weblink;
	if (weblink != ''){
		ajaxRequest.open("GET", "<?php echo base_url();?>index.php/upload/check_domain" + queryString, true);//remove index.php for server version!
		ajaxRequest.send(null);
	}
}
</script>


<?php 
	echo"<span style='color:red;'>";
	echo validation_errors();
	echo"</span>";
?>

<?php 
	if ($type == 'smx0410') {
		$formtype = '7';//smfree
	} elseif ($type == 'sg123'){
		$formtype = '8';//smpay
	}
	//$client = '777';
		$country = array(
			'' => 'Choose Country','United States' => 'United States','Canada' => 'Canada','Afghanistan' => 'Afghanistan','Albania' => 'Albania','Algeria' => 'Algeria','American Samoa' => 'American Samoa','Andorra' => 'Andorra','Angola' => 'Angola','Anguilla' => 'Anguilla','Antarctica' => 'Antarctica','Antigua and Barbuda' => 'Antigua and Barbuda',
			'Argentina' => 'Argentina','Armenia' => 'Armenia','Aruba' => 'Aruba','Australia' => 'Australia','Austria' => 'Austria','Azerbaijan' => 'Azerbaijan','Bahamas' => 'Bahamas','Bahrain' => 'Bahrain','Bangladesh' => 'Bangladesh','Barbados' => 'Barbados',
			'Belarus' => 'Belarus','Belgium' => 'Belgium','Belize' => 'Belize','Benin' => 'Benin','Bermuda' => 'Bermuda','Bhutan' => 'Bhutan','Bolivia' => 'Bolivia','Bosnia and Herzegovina' => 'Bosnia and Herzegovina','Botswana' => 'Botswana','Bouvet Island' => 'Bouvet Island',
			'Brazil' => 'Brazil','British Indian Ocean Territory' => 'British Indian Ocean Territory','Brunei Darussalam' => 'Brunei Darussalam','Bulgaria' => 'Bulgaria','Burkina Faso' => 'Burkina Faso','Burundi' => 'Burundi','Cambodia' => 'Cambodia','Cameroon' => 'Cameroon','Cape Verde' => 'Cape Verde',
			'Cayman Islands' => 'Cayman Islands','Central African Republic' => 'Central African Republic','Chad' => 'Chad','Chile' => 'Chile','China' => 'China','Christmas Island' => 'Christmas Island','Cocos Islands' => 'Cocos Islands','Colombia' => 'Colombia','Comoros' => 'Comoros','Congo' => 'Congo',
			'Congo, Democratic Republic of the' => 'Congo, Democratic Republic of the','Cook Islands' => 'Cook Islands','Costa Rica' => 'Costa Rica','Cote d\'Ivoire' => 'Cote d\'Ivoire','Croatia' => 'Croatia','Cuba' => 'Cuba','Cyprus' => 'Cyprus','Czech Republic' => 'Czech Republic','Denmark' => 'Denmark','Djibouti' => 'Djibouti',
			'Dominica' => 'Dominica','Dominican Republic' => 'Dominican Republic','Ecuador' => 'Ecuador','Egypt' => 'Egypt','El Salvador' => 'El Salvador','Equatorial Guinea' => 'Equatorial Guinea','Eritrea' => 'Eritrea','Estonia' => 'Estonia','Ethiopia' => 'Ethiopia','Falkland Islands' => 'Falkland Islands',
			'Faroe Islands' => 'Faroe Islands','Fiji' => 'Fiji','Finland' => 'Finland','France' => 'France','French Guiana' => 'French Guiana','French Polynesia' => 'French Polynesia','Gabon' => 'Gabon','Gambia' => 'Gambia','Georgia' => 'Georgia','Germany' => 'Germany',
			'Ghana' => 'Ghana','Gibraltar' => 'Gibraltar','Greece' => 'Greece','Greenland' => 'Greenland','Grenada' => 'Grenada','Guadeloupe' => 'Guadeloupe','Guam' => 'Guam','Guatemala' => 'Guatemala','Guinea' => 'Guinea','Guinea-Bissau' => 'Guinea-Bissau',
			'Guyana' => 'Guyana','Haiti' => 'Haiti','Heard Island and McDonald Islands' => 'Heard Island and McDonald Islands','Honduras' => 'Honduras','Hong Kong' => 'Hong Kong','Hungary' => 'Hungary','Iceland' => 'Iceland','India' => 'India','Indonesia' => 'Indonesia','Iran' => 'Iran',
			'Iraq' => 'Iraq','Ireland' => 'Ireland','Israel' => 'Israel','Italy' => 'Italy','Jamaica' => 'Jamaica','Japan' => 'Japan','Jordan' => 'Jordan','Kazakhstan' => 'Kazakhstan','Kenya' => 'Kenya','Kiribati' => 'Kiribati',
			'Kuwait' => 'Kuwait','Kyrgyzstan' => 'Kyrgyzstan','Laos' => 'Laos','Latvia' => 'Latvia','Lebanon' => 'Lebanon','Lesotho' => 'Lesotho','Liberia' => 'Liberia','Libya' => 'Libya','Liechtenstein' => 'Liechtenstein','Lithuania' => 'Lithuania',
			'Luxembourg' => 'Luxembourg','Macao' => 'Macao','Macedonia' => 'Macedonia','Madagascar' => 'Madagascar','Malawi' => 'Malawi','Malaysia' => 'Malaysia','Maldives' => 'Maldives','Mali' => 'Mali','Malta' => 'Malta','Marshall Islands' => 'Marshall Islands',
			'Martinique' => 'Martinique','Mauritania' => 'Mauritania','Mauritius' => 'Mauritius','Mayotte' => 'Mayotte','Mexico' => 'Mexico','Micronesia' => 'Micronesia','Moldova' => 'Moldova','Monaco' => 'Monaco','Mongolia' => 'Mongolia','Montserrat' => 'Montserrat',
			'Morocco' => 'Morocco','Mozambique' => 'Mozambique','Myanmar' => 'Myanmar','Namibia' => 'Namibia','Nauru' => 'Nauru','Nepal' => 'Nepal','Netherlands' => 'Netherlands','Netherlands Antilles' => 'Netherlands Antilles','New Caledonia' => 'New Caledonia','New Zealand' => 'New Zealand',
			'Nicaragua' => 'Nicaragua','Niger' => 'Niger','Nigeria' => 'Nigeria','Norfolk Island' => 'Norfolk Island','North Korea' => 'North Korea','Norway' => 'Norway','Oman' => 'Oman','Pakistan' => 'Pakistan','Palau' => 'Palau','Palestinian Territory' => 'Palestinian Territory',
			'Panama' => 'Panama','Papua New Guinea' => 'Papua New Guinea','Paraguay' => 'Paraguay','Peru' => 'Peru','Philippines' => 'Philippines','Pitcairn' => 'Pitcairn','Poland' => 'Poland','Portugal' => 'Portugal','Puerto Rico' => 'Puerto Rico','Qatar' => 'Qatar',
			'Romania' => 'Romania','Russian Federation' => 'Russian Federation','Rwanda' => 'Rwanda','Saint Helena' => 'Saint Helena','Saint Kitts and Nevis' => 'Saint Kitts and Nevis','Saint Lucia' => 'Saint Lucia','Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon','Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines','Samoa' => 'Samoa','San Marino' => 'San Marino',
			'Sao Tome and Principe' => 'Sao Tome and Principe','Saudi Arabia' => 'Saudi Arabia','Senegal' => 'Senegal','Serbia and Montenegro' => 'Serbia and Montenegro','Seychelles' => 'Seychelles','Sierra Leone' => 'Sierra Leone','Singapore' => 'Singapore','Slovakia' => 'Slovakia','Slovenia' => 'Slovenia','Solomon Islands' => 'Solomon Islands',
			'Somalia' => 'Somalia','South Africa' => 'South Africa','South Georgia' => 'South Georgia','South Korea' => 'South Korea','Spain' => 'Spain','Sri Lanka' => 'Sri Lanka','Sudan' => 'Sudan','Suriname' => 'Suriname','Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen','Swaziland' => 'Swaziland',
			'Sweden' => 'Sweden','Switzerland' => 'Switzerland','Syrian Arab Republic' => 'Syrian Arab Republic','Taiwan' => 'Taiwan','Tajikistan' => 'Tajikistan','Tanzania' => 'Tanzania','Thailand' => 'Thailand','Timor-Leste' => 'Timor-Leste','Togo' => 'Togo','Tokelau' => 'Tokelau',
			'Tonga' => 'Tonga','Trinidad and Tobago' => 'Trinidad and Tobago','Tunisia' => 'Tunisia','Turkey' => 'Turkey','Turkmenistan' => 'Turkmenistan','Tuvalu' => 'Tuvalu','Uganda' => 'Uganda','Ukraine' => 'Ukraine','United Arab Emirates' => 'United Arab Emirates','United Kingdom' => 'United Kingdom',
			'United States Minor Outlying Islands' => 'United States Minor Outlying Islands','Uruguay' => 'Uruguay','Uzbekistan' => 'Uzbekistan','Vanuatu' => 'Vanuatu','Vatican City' => 'Vatican City','Venezuela' => 'Venezuela','Vietnam' => 'Vietnam','Virgin Islands, British' => 'Virgin Islands, British','Virgin Islands, U.S.' => 'Virgin Islands, U.S.',
			'Wallis and Futuna' => 'Wallis and Futuna','Western Sahara' => 'Western Sahara','Yemen' => 'Yemen','Zambia' => 'Zambia','Zimbabwe' => 'Zimbabwe',
		);
	$label_id = array('id' => 'contentform',);
	$js_gocheck = 'id="weblink" class="formbox" onChange="checkname()" ';
	$inputclass = 'class="formbox"';
	$custfield = 'class="formfieldset"';
	$hidden = array('product_id'=>$formtype,'codetype'=>$formtype,);
	echo form_open_multipart(''.base_url().'index.php/upload/do_upload/'.$type.'','',$hidden);//remove index.php for server version!
	//echo form_fieldset('Your Information');
	echo form_label('First Name:<span class="bold red">*</span>','firstname',$label_id);
	echo form_input('firstname',''. set_value('firstname') . '',$inputclass);
	echo "<br>";
	echo form_label('Last Name:<span class="bold red">*</span>','lastname',$label_id);
	echo form_input('lastname',''. set_value('lastname') . '',$inputclass);
	echo "<br>";
	echo form_label('Phone Number:<span class="bold red">*</span>','phone',$label_id);
	echo form_input('phone',''. set_value('phone') . '',$inputclass);
	echo "<br>";
	echo "<span class='green small'>This phone number will be published on your WebNet site. Enter numerals only (NO spaces or punctuation). Example:2125551212</span>";
	echo "<br>";
	echo form_label('Email:<span class="bold red">*</span>','email',$label_id);
	echo form_input('email',''. set_value('email') . '',$inputclass);
	echo "<br>";
	echo "<span class='green small'>The email address you provide is where your WebNet site form submissions will be sent, so choose an email address you monitor regularly.</span>";
	echo "<br>";
			
	echo form_label('Address 1:<span class="bold red">*</span>','address1',$label_id);
	echo form_input('address1',''. set_value('address1') . '',$inputclass);
	echo "<br>";
	echo form_label('Address 2:','address2',$label_id);
	echo form_input('address2',''. set_value('address2') . '',$inputclass);
	echo "<br>";
	echo form_label('City:<span class="bold red">*</span>','city',$label_id);
	echo form_input('city',''. set_value('city') . '',$inputclass);
	echo "<br>";
	echo form_label('State / Province:<span class="bold red">*</span>','state',$label_id);
	echo form_input('state',''. set_value('state') . '',$inputclass);
	echo "<br>";
	echo "<span class='green small'>DO NOT ABBREVIATE - type the name of the state or province completely (for example, type \"Massachusetts\" – not \"MA\")</span>";
	echo "<br>";
	echo form_label('ZIP / Postal Code:<span class="bold red">*</span>','zip',$label_id);
	echo form_input('zip',''. set_value('zip') . '',$inputclass);
	echo "<br>";
	echo form_label('Country:<span class="bold red">*</span>','country',$label_id);
	echo form_dropdown('country',$country,''. set_value('country') . '',$inputclass);
	echo "<br>";
	echo "<br>";
	//echo form_checkbox('showmap', '1', false); //writes to showmap in clients table, 1 for yes, 0 for no
	echo "<input type='checkbox' name='showaddress' value='1'".set_checkbox('showaddress','1',FALSE)."/>";
	echo " <span class='small'>If you have a physical place of business where you provide estimates, check this box to display your address on your WebNet site.</span>";
	echo "<br><br><br>";

	$carrier = array(
		'' => 'Choose Carrier','@tmomail.net' => 'T-Mobile','@vmobl.com' => 'Virgin Mobile','@cingularme.com' => 'Cingular',
		'@messaging.sprintpcs.com' => 'Sprint','@vtext.com' => 'Verizon','@messaging.nextel.com' => 'Nextel',
		'@email.uscc.net' => 'US Cellular','@tms.suncom.com' => 'SunCom','@ptel.net' => 'Powertel','@txt.att.net' => 'AT&T',
		'@message.alltel.com' => 'Alltel','@MyMetroPcs.com' => 'Metro PCS','@vmobl.com' => 'Virgin','@myboostmobile.com' => 'Boost',
	);
	echo form_fieldset('Receive SMS text messages (optional)',$custfield);
	echo " <span class='small'>If you would like to receive a text notification alerting you to check your email each time a form is submitted through your WebNet site, please enter your cell phone number and select your cell phone carrier<span class='red'>*</span>, below.</span>";
	echo form_label('Cell Phone:','cellphone',$label_id);
	echo form_input('cellphone',''. set_value('cellphone') . '',$inputclass);
	echo form_dropdown('carrier',$carrier,''. set_value('carrier') . '',$inputclass);
	echo "<span class='green small'>Enter numerals only (NO spaces or punctuation). Example: 2125551212</span> <span class='red small'>*Standard text message rates apply.</span>";
	echo "<br><br>";
	echo form_fieldset_close();

	echo form_fieldset('Personalize your site with a photo (optional)',$custfield);
	echo anchor_popup('signup/photo','<span class="small">Instructions</span>',$helpset);
	echo form_label('Upload Photo: ','userfile',$label_id);
	echo form_upload('userfile',''. set_value('upload') . '',$inputclass);
	echo "<br>";
	echo form_fieldset_close();
			
	echo "<br>";
	echo form_fieldset('Days of Operation:<span class="bold red">*</span>',$custfield);
	echo "<br>";
	//echo form_checkbox('sun','1');
	echo "<input type='checkbox' name='sun' value='1'".set_checkbox('sun','1')."/>";
	echo form_label(' Sunday','sun');
	echo "<br><br>";
	//echo form_checkbox('mon','1');
	echo "<input type='checkbox' name='mon' value='1'".set_checkbox('mon','1')."/>";
	echo form_label(' Monday','mon');
	echo "<br><br>";
	//echo form_checkbox('tue','1');
	echo "<input type='checkbox' name='tue' value='1'".set_checkbox('tue','1')."/>";
	echo form_label(' Tuesday','tue');
	echo "<br><br>";
	//echo form_checkbox('wed','1');
	echo "<input type='checkbox' name='wed' value='1'".set_checkbox('wed','1')."/>";
	echo form_label(' Wednesday','wed');
	echo "<br><br>";
	//echo form_checkbox('thu','1');
	echo "<input type='checkbox' name='thu' value='1'".set_checkbox('thu','1')."/>";
	echo form_label(' Thursday','thu');
	echo "<br><br>";
	//echo form_checkbox('fri','1');
	echo "<input type='checkbox' name='fri' value='1'".set_checkbox('fri','1')."/>";
	echo form_label(' Friday','fri');
	echo "<br><br>";
	//echo form_checkbox('sat','1');
	echo "<input type='checkbox' name='sat' value='1'".set_checkbox('sat','1')."/>";
	echo form_label(' Saturday','sat');
	echo "<br><br>";
	echo form_fieldset_close();
			
	echo "<br>";
	echo form_fieldset('Display Name:<span class="bold red">*</span>',$custfield);//writes the value to the office_name field in clients table
	echo form_input('businessname',''. set_value('businessname') . '',$inputclass);
	echo "<br>";
	echo "<span class='green small'>The display name is the name you would like published on your WebNet site. This can be either your name (first and last) OR the name of a company. Not both.</span>";
	echo form_fieldset_close();
			
	echo "<br>";
	echo form_fieldset('Choose a web address (URL):<span class="bold red">*</span>',$custfield);
	//writes the value to the bna_url field in clients table, needs to perform a check to the DB for availability
	echo "http://www.sungarddealer.com/";
	echo form_input('weblink',''. set_value('weblink') . '',$js_gocheck);
	echo "<br>";
	echo " <span class='red small'>Example:</span> <span class='small'>http://www.sungarddealer.com/<b>your-business-name</b></span>";
	echo "<div id='ajaxDiv'> <span class='green small'>For tips on choosing a web address, " . anchor_popup('signup/urlhelp','click here.',$helpset) . " Enter only characters and numerals <b>(separated-by-hyphens).</b> NO spaces or other punctuation.</span></div>";
	echo "<br>";
	echo form_fieldset_close();
			
	echo "<br>";
	echo form_fieldset('Choose a password:<span class="bold red">*</span>',$custfield);
	echo form_input('password',''. set_value('password') . '',$inputclass);
	echo "<br>";
	echo "<span class='green small'>Save this password in your records. You will use the email you provided earlier as your username and this password to login to the programs's reporting system.</span>";
	echo form_fieldset_close();
			
	echo "<br>";
	echo form_fieldset('Choose a template that best suits your business:<span class="bold red">*</span>',$custfield);
	echo "<br>";//writes the value to the type field in campaign table with template id 11
	//echo form_radio('templatetype', 'matrix3');
	echo "<input type='radio' name='templatetype' value='matrix3'".set_radio('templatetype','matrix3')."/>";
	echo "Automotive window film only";
	echo "<br><br>";
	//echo form_radio('templatetype', 'matrix2');
	echo "<input type='radio' name='templatetype' value='matrix2'".set_radio('templatetype','matrix2')."/>";
	echo "Flatglass window film only";
	echo "<br><br>";
	//echo form_radio('templatetype', 'matrix');
	echo "<input type='radio' name='templatetype' value='matrix'".set_radio('templatetype','matrix')."/>";
	echo "Both automotive and flatglass";
	echo "<br><br>";
	
	echo form_fieldset_close();
			
	echo "<br>";
	//echo form_checkbox('eula', 'yes', FALSE);
	echo "<input type='checkbox' name='eula' value='yes'".set_checkbox('eula','yes',FALSE)."/>";
	echo " <span class='small'>I agree to the terms of the " . anchor_popup('signup/eula','End User License Agreement (EULA)',$helpset) . "</span><span class='bold red'>*</span>";
	echo "<br>";
			
	//echo form_fieldset_close();
	echo "<br>";
	echo form_submit('submit', 'Submit');
	echo form_close();
	
?>

<br /><br />

</div>
<br clear="all">

