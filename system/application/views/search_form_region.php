<?php
	if ($country == "us") {
		$rcountry = "United States";
	} elseif ($country =="ca"){
		$rcountry = "Canada";
	}
	echo "<div id='searchform'>";
	$DB = $this->load->database('default', TRUE);        
	//$query = $DB->query('SELECT DISTINCT country FROM clients WHERE affiliate_id = "12" AND type_id != "0" ORDER BY country DESC');
	//$result = $query->result_array();
	//echo form_open('','');
	echo form_open('locator/lookupr','');
	echo "<select name='country' class='formbox' id='country'><option value='".$rcountry."'>".$rcountry."</option></select>";
	echo "<br><br>";
	/*if ($query->num_rows() > 0) {
		$showcountry;
		foreach ($result as $query)
		$showcountry[$query['country']] = $query['country'];
		echo "<select name='country' class='formbox' id='country'><option value=''>Choose Country</option>";
		foreach ($showcountry as $key => $value)
		{
			echo "<option value='".$value."'>".$value."</option>";
		}
		echo "</select>";
	} else {
		echo "<select name='country' class='formbox'><option value=''>None Available</option></select>";
	}*/

	$squery = $DB->query('SELECT DISTINCT state FROM clients WHERE affiliate_id = "12" AND type_id !="0" AND country = "'.$rcountry.'" ORDER BY state DESC');
	$sresult = $squery->result_array();
	if ($squery->num_rows() > 0) {
		$showstate;
		foreach ($sresult as $squery)
		$showstate[$squery['state']] = $squery['state'];
		echo "<select name='state' class='formbox' id='state' onChange='this.form.submit();'><option value=''>Choose State/Region</option>";
		foreach ($showstate as $key => $value)
			{
				echo "<option value='".$value."'>".$value."</option>";
			}
			echo "</select>";
		} else {
			echo "<select name='state' class='formbox'><option value=''>None Available</option></select>";
		}
		
	echo "<br>";
	echo form_close();
	echo "</div>";
		
	?>