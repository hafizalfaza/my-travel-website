<?php
	echo '<div  style="position: absolute; left: 16px; width: 250px;" class="input-group">		   
			<select id="citySelect" class="form-control" name="city-select">
				<option value="" disabled selected>Choose any city</option>';
				
					require('citiesQuery.php');
					for($i=0; $i<$citiesTotalRows; $i++){
						echo '<option>'.$citiesArray[$i].'</option>'; 
					}
		echo '		
			</select>
			<div class="input-group-btn">
			  <button id="goCityBtn" class="btn btn-default" disabled>
				<i>Go!</i>
			  </button>
			</div>
		  </div>';
?>