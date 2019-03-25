<script src="{{ asset('public/js/jquery-3.2.1.min.js') }}">
</script>
<script src="{{ asset('public/js/bootstrap.js') }}">
</script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}">
</script>
<script src="{{ asset('public/js/masonry.pkgd.min.js') }}">
</script>
<script src="{{ asset('public/js/magnific-popup.min.js') }}">
</script>
<script src="{{ asset('public/js/main.js') }}">
</script>
<script src="{{ asset('public/js/app.js') }}" defer>
</script>
<script src="{{ asset('public/js/functions.js') }}">
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqz6F8ER7tkcYIhbifDumCa01GgTIWKqE&libraries=places" type="text/javascript"></script>
<script>
	var map, service, marker;

	map = new google.maps.Map(document.getElementById('map-canvas'),{
		center: {
			lat: 27.72,
			lng: 85.36
		}, 
		zoom : 15
	});

	var icon = {
		url : 'http://maps.google.com/mapfiles/kml/paddle/grn-circle.png',
		scaledSize: new google.maps.Size(45, 45), // scaled size
		
	};

	marker = new google.maps.Marker({
		position: {
			lat: 27.72,
			lng: 85.36
		}, 
		icon: icon,
		map: map,
		draggable: true
	});

	var searchBox = new google.maps.places.SearchBox(document.getElementById('address'));

	google.maps.event.addListener(searchBox, 'places_changed', function() {
		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;

		for(i=0; place=places[i]; i++) {
			bounds.extend(place.geometry.location);
			marker.setPosition(place.geometry.location); // set marker position new
		}

		map.fitBounds(bounds);
		map.setZoom(17);
	});

	google.maps.event.addListener(marker, 'position_changed', function() {
		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();
		$('#lat').val(lat);
		$('#lng').val(lng);
	});
</script>

<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->