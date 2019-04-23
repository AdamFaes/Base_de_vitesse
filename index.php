<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
?>
 <style>

 	body { margin:0; padding:0; }
	#map { position:absolute; top:0; bottom:0; width:100%; }

  
</style>

 <body>

 	<div id='map'></div>
		<script>
		    mapboxgl.accessToken = 'pk.eyJ1IjoibmF5cmIiLCJhIjoiY2pyaGdhZXBtMWVycDN5cnp0Z2FwZTZidSJ9.WqOr51al1Wr_hxd2OGdfUA';
		    var map = new mapboxgl.Map({
		        container: 'map',
		        style: 'mapbox://styles/mapbox/satellite-v9'
		    });
		    var url = 'https://wanderdrone.appspot.com/';
			map.on('load', function () {
			    window.setInterval(function() {
			        map.getSource('drone').setData(url);
			    }, 2000);
			 
			    map.addSource('drone', { type: 'geojson', data: url });
			    map.addLayer({
			        "id": "drone",
			        "type": "symbol",
			        "source": "drone",
			        "layout": {
			            "icon-image": "rocket-15"
			        }
			});
			});
		</script>









 
 </body>
 
 </html>