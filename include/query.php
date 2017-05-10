<?php
		require('connect.php');
		
		if(isset($_GET['country-select'])){
			$country = $_GET['country-select'];
		}else{
			die();
		}		
		
		$countryQuery = "SELECT * FROM countries WHERE country = '".$country."'";
		$countryResult = mysqli_query($con, $countryQuery);
		$countryRow = mysqli_fetch_assoc($countryResult);
		
		$countryId = $countryRow['id'];
		$countryFlag = $countryRow['flag'];
		$countryLat = $countryRow['latitude'];
		$countryLong = $countryRow['longitude'];
		$countryZoom = $countryRow['zoom'];
		$countryCity = $countryRow['city'];
		$countryFood = $countryRow['food'];
		$countryPeople = $countryRow['people'];
		$countryLanguage = $countryRow['language'];
		$countryVideo = $countryRow['video'];
	
		//Search the countryGallery folder for all images 
		$cityImages = glob("$countryCity/*.{jpg,png,bmp,.jpeg}", GLOB_BRACE);
		$foodImages = glob("$countryFood/*.{jpg,png,bmp,.jpeg}", GLOB_BRACE);
		$peopleImages = glob("$countryPeople/*.{jpg,png,bmp,.jpeg}", GLOB_BRACE);

		$mixedImages = array_merge($cityImages, $foodImages, $peopleImages);
		shuffle($mixedImages);
		
		$totalCityImages = count($cityImages);
		$totalFoodImages = count($foodImages);
		$totalPeopleImages = count($peopleImages);
		$totalMixedImages = count($mixedImages);
	?>