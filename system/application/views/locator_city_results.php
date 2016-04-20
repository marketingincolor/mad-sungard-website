<?php
	if ($country == "us") {
		$rcountry = "United States";
	} elseif ($country =="ca"){
		$rcountry = "Canada";
	}
	$citylength = strlen($city);
	$cityletter = substr($city,0,1);
	// AND city like "'.$cityletter.'% "
	
	
	if ($citylength != '1') {//display vendors for named cities
	
	echo "<div id='cityresults'>";
	$DB = $this->load->database('default', TRUE);        
	$query = $DB->query('SELECT clients.id, clients.office_name, clients.address, clients.address2, clients.city, clients.state, clients.country, clients.zip, clients.phone, clients.showmap, disks.id, disks.name, campaigns.id, campaigns.type 
	FROM clients INNER JOIN disks ON (disks.client_id = clients.id) INNER JOIN campaigns ON ( campaigns.disk_id = disks.id) 
	WHERE affiliate_id = "12" AND type_id != "0" AND state = "'.$region.'"AND city = "'.$city.'" ORDER BY clients.office_name ASC');
		$result = $query->result_array();
		
		if ($query->num_rows() > 0)
		{
   			$row = $query->row_array();
   			//echo "<h2>".$row['country']." > ".$row['state']."</h2>";
			foreach ($query->result_array() as $row)
				{
					if ($row['city']) {
						$clientcity = "<a href='".site_url()."/".$country."/".$region."/".strtolower($row['city'])."'>".$row['city']."</a>";
					} else {
						$clientcity = $row['city'];
					}
					if ($row['name']) {
						$clienturl = "<a href='http://www.sungarddealer.com/".$row['name']."' target='_new'>Contact</a>";
					} else {
						$clienturl = $row['office_name'];
					}
					if (strlen($row['phone']) == 10) 
					{
						$clientphone = substr($row['phone'],0,3)."-".substr($row['phone'],3,3)."-".substr($row['phone'],6,4);
					} else {
						$clientphone = $row['phone'];
					}
					if ($row['showmap'] == '1'){
						$clientmap = "<a href = 'http://maps.google.com/maps?f=q&hl=en&q=" . str_replace(' ','+',$row['address']) . ',+' . str_replace(' ','+',$row['address2']) . ',+' . str_replace(' ','+',$row['city']) . ',+' . $row['state'] . '+' . $row['zip'] . "' target = '_new'>Map</a>";
					} else {
						$clientmap = "Map";
					}
					if ($row['address2']){
						$clientaddress = $row['office_name']."<br>".$row['address']." ".$row['address2']." ";
					} else {
						$clientaddress = $row['office_name']."<br>".$row['address']." ";
					}
					echo "<!--<br><span style='font-size:14px; font-weight:bold;'>".$clientcity."</span><br>--><br>".
					$clientaddress."<br>".$clientmap." | ".$clienturl."<br>";
				}
		} else {
			echo "<h2>THIS IS NOT A RESULT!!!</h2>";
		}
		echo "</div>";
		
	} else {
		
	echo "<div id='cityresults'>";
	$DB = $this->load->database('default', TRUE);        
	$query = $DB->query('SELECT clients.id, clients.office_name, clients.address, clients.address2, clients.city, clients.state, clients.country, clients.zip, clients.phone, clients.showmap, disks.id, disks.name, campaigns.id, campaigns.type 
	FROM clients INNER JOIN disks ON (disks.client_id = clients.id) INNER JOIN campaigns ON ( campaigns.disk_id = disks.id) 
	WHERE affiliate_id = "12" AND type_id != "0" AND state = "'.$region.'" AND city like "'.$cityletter.'%" ORDER BY city ASC');
		$result = $query->result_array();
		
		if ($query->num_rows() > 0)
		{
   			$row = $query->row_array();
   			//echo "<h2>".$row['city']."</h2>";
			foreach ($query->result_array() as $row)
				{
					if ($row['city']) {
						$clientcity = "<span style='font-size:14px; font-weight:bold;'><a href='".site_url()."/".$country."/".$region."/".strtolower($row['city'])."'>".$row['city']."</a></span>";
					} else {
						$clientcity = "<span style='font-size:14px; font-weight:bold;'>".$row['city']."</span>";
					}
					if ($row['name']) {
						$clienturl = "<a href='http://www.sungarddealer.com/".$row['name']."' target='_new'>Contact</a>";
					} else {
						$clienturl = $row['office_name'];
					}
					if (strlen($row['phone']) == 10) 
					{
						$clientphone = substr($row['phone'],0,3)."-".substr($row['phone'],3,3)."-".substr($row['phone'],6,4);
					} else {
						$clientphone = $row['phone'];
					}
					if ($row['showmap'] == '1'){
						$clientmap = "<a href = 'http://maps.google.com/maps?f=q&hl=en&q=" . str_replace(' ','+',$row['address']) . ',+' . str_replace(' ','+',$row['address2']) . ',+' . str_replace(' ','+',$row['city']) . ',+' . $row['state'] . '+' . $row['zip'] . "' target = '_new'>Map</a>";
					} else {
						$clientmap = "Map";
					}
					if ($row['address2']){
						$clientaddress = $clientcity."<br>".$row['office_name']."<br>".$row['address']." ".$row['address2']." ";
					} else {
						$clientaddress = $clientcity."<br>".$row['office_name']."<br>".$row['address']." ";
					}
					echo "<!--<br><span style='font-size:14px; font-weight:bold;'>".$clientcity."</span><br>--><br>".
					$clientaddress."<br>".$clientmap." | ".$clienturl."<br>";
				}
		} else {
			echo "<h4>No listings available at this time.</h4>";
		}
		echo "</div>";
		
	}

	
	
	?>