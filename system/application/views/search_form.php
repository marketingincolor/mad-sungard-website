<script type="text/javascript">
function findstate()
{
	var ajaxRequest;  // The variable that makes Ajax possible!
	//alert("COUNTRY SUBMITTED!");
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
	var findstate = document.getElementById('country').value;
	var queryString = "/" + findstate;
	if(findstate == ""){window.location = "<?php echo current_url();?>";}
	ajaxRequest.open("GET", "<?php echo base_url();?>index.php/search/findstate" + queryString, true);//remove index.php for server version!
	ajaxRequest.send(null);
}

function findclient()
{
	var ajaxRequest2;  // The variable that makes Ajax possible!
	//alert("STATE SUBMITTED!");
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest2 = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest2 = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest2 = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest2.onreadystatechange = function(){
		if(ajaxRequest2.readyState == 4){
			//document.myForm.time.value = ajaxRequest.responseText;
			var ajaxDisplay2 = document.getElementById('ajaxDiv2');
			ajaxDisplay2.innerHTML = ajaxRequest2.responseText;
		}
	}
	var findclient = document.getElementById('state').value;
	var queryString2 = "/" + findclient;
	if(findclient == ""){window.location = "<?php echo current_url();?>";}
	ajaxRequest2.open("GET", "<?php echo base_url();?>index.php/search/findclient" + queryString2, true);//remove index.php for server version!
	ajaxRequest2.send(null);
}















</script>

	<?php
		$this->load->helper('form');
		$this->load->helper('url');
		echo "<div id='searchform'>";
		$DB = $this->load->database('default', TRUE);        
		$query = $DB->query('SELECT DISTINCT country FROM clients WHERE affiliate_id = "12" AND type_id != "0" ORDER BY country DESC');
		$result = $query->result_array();
		//echo form_open('','');
		echo form_open('search/lookup','');
		if ($query->num_rows() > 0) {
		$showcountry;
		foreach ($result as $query)
			$showcountry[$query['country']] = $query['country'];
			echo "<select name='country' class='formbox' id='country' onChange='findstate()'><option value=''>Choose Country</option>";
			foreach ($showcountry as $key => $value)
			{
			echo "<option value='".$value."'>".$value."</option>";
			}
			echo "</select>";
		} else {
			echo "<select name='state' class='formbox'><option value=''>None Available</option></select>";
		}

		$inputcountry = 'id="country" class="formbox" onChange="findstate()" ';
		$inputstate = 'id="state" class="formbox" onChange="findclient()" ';
		echo "<br><br>";
		echo "<div id='ajaxDiv'><select name='state' class='formbox' id='state' onChange='findclient()'><option value=''>Choose State/Region</option></select></div>";
		//echo "<div id='ajaxDiv'><select name='state' class='formbox' id='state' onChange='submitstate()'><option value=''>Choose State/Region</option></select></div>";
		echo "<br>";
		echo form_close();
		echo "</div>";
	
		
		
		
		
		
		
		
		
		
		
		/*$this->load->helper('form');
		$this->load->helper('url');
		echo "<div id='searchform'>";
		$DB = $this->load->database('default', TRUE);        
		$query = $DB->query('SELECT DISTINCT country FROM clients WHERE affiliate_id = "12" AND type_id != "0" ORDER BY country DESC');
		$result = $query->result_array();
		echo form_open('search/lookup_c','');
		if ($query->num_rows() > 0) {
		$showcountry;
		foreach ($result as $query)
			$showcountry[$query['country']] = $query['country'];
			//echo "<select name='country' class='formbox' id='country' onChange='findstate()'><option value=''>Choose Country</option>";
			echo "<select name='country' class='formbox' id='country' onChange='this.form.submit();'><option value=''>Choose Country</option>";
			foreach ($showcountry as $key => $value)
			{
			echo "<option value='".$value."'>".$value."</option>";
			}
			echo "</select>";
		} else {
			echo "<select name='state' class='formbox'><option value=''>None Available</option></select>";
		}

		//$inputcountry = 'id="country" class="formbox" onChange="findstate()" ';
		//$inputstate = 'id="state" class="formbox" onChange="findclient()" ';
		echo "<br><br>";
		echo "<div id='ajaxDiv'><select name='state' class='formbox' id='state'><option value=''>Choose State/Region</option></select></div>";
		echo "<br>";
		echo form_close();
		echo "</div>";*/

	?>