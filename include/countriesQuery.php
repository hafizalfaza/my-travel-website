<?php
	require('connect.php');

	$query = "SELECT * FROM countries ORDER BY id";

	$result = mysqli_query($con,$query);
	$countriesTotalRows = mysqli_num_rows($result);
	$datas = array();
	$countryIdsArray = array();
	$countriesArray = array();
	
		while($row = mysqli_fetch_assoc($result)){
			$datas[] = $row;
	}

	foreach($datas as $data){
		array_push($countryIdsArray, $data['id']);
		array_push($countriesArray, $data['country']);
	}
	sort($countryIdsArray);
	sort($countriesArray);
	
?> 