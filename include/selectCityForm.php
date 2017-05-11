<?php
	require('citiesQuery.php');
	
	echo '<div  style="position: absolute; left: 16px; width: 250px;">		   
			<select style="width: 200px; "id="citySelect" class="form-control" name="city-select">
				<option value="" disabled selected>Choose any city</option>';
				
					
					for($i=0; $i<$citiesTotalRows; $i++){
						echo '<option>'.$citiesArray[$i].'</option>'; 
					}
		echo '		
			</select>
		  </div>';
?>