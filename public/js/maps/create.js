function initMap() {
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
}
