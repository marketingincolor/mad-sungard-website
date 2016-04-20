<?php

	echo "<div id='searchform'>";
	$DB = $this->load->database('default', TRUE);        
	$query = $DB->query('SELECT DISTINCT country FROM clients WHERE affiliate_id = "12" AND type_id != "0" ORDER BY country DESC');
	$result = $query->result_array();
	//echo form_open('','');
	echo form_open('locator/lookupc','');
	if ($query->num_rows() > 0) {
		$showcountry;
		foreach ($result as $query)
		$showcountry[$query['country']] = $query['country'];
		echo "<select name='country' class='formbox' id='country' onChange='this.form.submit();'><option value=''>Choose Country</option>";
		foreach ($showcountry as $key => $value)
		{
			echo "<option value='".$value."'>".$value."</option>";
		}
		echo "</select>";
	} else {
		echo "<select name='country' class='formbox'><option value=''>None Available</option></select>";
	}

	/*$squery = $DB->query('SELECT DISTINCT state FROM clients WHERE affiliate_id = "12" AND type_id !="0" AND country = "United States" ORDER BY state DESC');
	$sresult = $squery->result_array();
	if ($squery->num_rows() > 0) {
		$showstate;
		foreach ($sresult as $squery)
		$showstate[$squery['state']] = $squery['state'];
		echo "<select name='state' class='formbox' id='state'><option value=''>Choose State/Region</option>";
		foreach ($showstate as $key => $value)
			{
				echo "<option value='".$value."'>".$value."</option>";
			}
			echo "</select>";
		} else {
			echo "<select name='state' class='formbox'><option value=''>None Available</option></select>";
		}*/
		
	echo "<br><br>";
	echo "<select name='state' class='formbox' id='state'><option value=''>Choose State/Region</option></select>";
	echo form_close();
	echo "</div>";
		
	?>