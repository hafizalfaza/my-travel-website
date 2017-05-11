<?php
	require('connect.php');
	require('countriesQuery.php');
	
	$countryAllCaps = strtoupper($country);
	$query = "SELECT * FROM cities WHERE country='".$countryAllCaps."'";

	$result = mysqli_query($con,$query);
	$citiesTotalRows = mysqli_num_rows($result);
	$datas = array();
	$cityIdsArray = array();
	$citiesArray = array();
	
		while($row = mysqli_fetch_assoc($result)){
			$datas[] = $row;
	}

	foreach($datas as $data){
		array_push($cityIdsArray, $data['id']);
		array_push($citiesArray, $data['city']);
	}
	sort($cityIdsArray);
	sort($citiesArray);
	
?> 