<?php 
		require('include/connect.php');
		require('include/query.php');
		
		
		$content = $_GET['content'];
		
		
		if($content == 'random'){
			for($i=0; $i<8; $i++){
				echo '<img class="img-thumbnail" style="width: 188px;" src="'.$mixedImages[$i].'"/>';
			}
		}
		if($content == 'city'){
			for($i=0; $i<$totalCityImages; $i++){
				echo '<img class="img-thumbnail" style="width: 188px;" src="'.$cityImages[$i].'"/>';
			}
		}
		if($content == 'food'){
			for($i=0; $i<$totalFoodImages; $i++){
				echo '<img class="img-thumbnail" style="width: 188px;" src="'.$foodImages[$i].'"/>';
			}
		}
		if($content == 'people'){
			for($i=0; $i<$totalPeopleImages; $i++){
				echo '<img class="img-thumbnail" style="width: 188px;" src="'.$peopleImages[$i].'"/>';
			}
		}
		if($content == 'language'){
			
			echo '<h1 style="border: 3px solid black; padding: 10px; font-size: 20px;">'.$countryLanguage.'</h1>';
			
		}
						
?>