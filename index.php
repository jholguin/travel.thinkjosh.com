<!DOCTYPE html>
<html>
<head>
	<title>Travel - ThinkJosh</title>
	<style>
		body{
			padding:0;
			margin:0;
			background:url('images/travel_bg.jpg') no-repeat top center;
			background-size:100% auto;
		}
		ul,ul li{
			padding:0;
			margin:0;
		}
		ul li{
			list-style: none;
		}
		.photo-list a{
			display: block;
		}

		.photo-list li{
			display: inline-block;
		}
	</style>
</head>
<body>
	<h1>Travel - ThinkJosh</h1>
	<div id="map-canvas" style="width:100%;height:400px;"></div>
	<section class="photo-list"></section>

 	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 	<script type="text/javascript" src="bower_components/handlebars/handlebars.min.js"></script>
 	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuYccYiNreqgecbPqKPglH_50crLNOUOs"></script>
 	<script type="text/javascript">
 		(function($){
 			function initialize() {
		        var mapOptions = {
		          center: new google.maps.LatLng(30.3077609,-97.7534014),
		          zoom: 8
		        };
		        var map = new google.maps.Map(
		        	document.querySelector('#map-canvas'), 
		        	mapOptions
	        	);
	      	}
	      	
	      	initialize();
	      	
	      	$.ajax({
	      		url: 'https://www.flickr.com/services/rest/?method=flickr.photosets.getPhotos&format=json&api_key=c8fad9bc55323d7fdd2adcff97cd6d6b&photoset_id=72157645497230493&extras=url_sq, url_t, url_s, url_m, url_o&&nojsoncallback=1',
	      		type: 'GET',
	      		dataType: 'json',
	      		success: function(data){
	      			console.log(data.photoset);
	      			var source = $('#photo-list-tmpl').html();
	      			var template = Handlebars.compile(source);
	      			//console.log(template(data.photoset));
	      			$('.photo-list').html(template(data.photoset));
	      		},
	      		error: function(error){
	      			console.log(error);
	      		}
	      	});
	      	
 		})(jQuery)
 	</script>

 	<script id="photo-list-tmpl" type="text/x-handlebars-template">
 		<ul>
 			{{#each photo}}
	  			<li><a href="{{url_o}}" target="_blank"><img src="{{url_m}}" height="{{height_m}}" width="{{width_m}}" /></a></li>
	  		{{/each}}
	  	</ul>
	</script>
 	
</body>
</html>