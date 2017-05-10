mapboxgl.accessToken = 'pk.eyJ1IjoiaGFmaXphbGZhemEiLCJhIjoiY2owcHd0ZGYyMDB4NDMzanc1MDk3dHR2cSJ9.uFhKuX5N0R5Xx01asjiNyg';
			var map = new mapboxgl.Map({
				container: 'map', // container id
				style: 'mapbox://styles/mapbox/light-v9', //stylesheet location
				center: [<?php echo $countryLong;?>, <?php echo $countryLat;?>], // starting position
				zoom: <?php echo $countryZoom;?> // starting zoom
			});
			
			function foodQuery(){
				var content = 'food';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');		
							$('#content-container').css('bottom', '0px');							
						}
					});
			}
			function cityQuery(){
				var content = 'city';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');		
							$('#content-container').css('bottom', '0px');								
						}
					});
			}
			function peopleQuery(){
				var content = 'people';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");	
							$('#content-container').css('overflow-x', 'scroll');				
							$('#content-container').css('bottom', '0px');	
							
						}
					});
			}
			function languageQuery(){
				var content = 'language';
				 var data = 'country-select=' +'<?php echo $country ?>'+ '&content=' + content;		
						$.ajax({
							method: 'get', 
							url: 'content.php', 
							data: data, 
							success: function(response)
							{
							$("#content-container").hide();	
							$('#content-container').html(response);
							$("#content-container").fadeIn("slow");							
							$('#content-container').css('overflow-x', 'hidden');		
							$('#content-container').css('bottom', '60px');		
						}
					});
			}
			
			function popup(){
				$('#popup').css('display', 'inline-block');
			}
			
			$('#countrySelect').on('change', function(){
				$('#goBtn').removeAttr('disabled');
			});