function initMap(){
	var sap = {lat: 15.5067449, lng: -88.0375263};
	var map = new google.maps.Map(
	document.getElementById('map'), {zoom: 17, center: sap, map:map});
var infoWindow = new google.maps.InfoWindow;
	
	if (navigator.geolocation){
		navigator.geolocation.getCurrentPosition(function (p){
			var position = {
				lat: p.coords.latitude,
				lng: p.coords.longitude
			};

	infoWindow.setPosition(position);
	infoWindow.setContent('your location!');
	infoWindow.open(map);
	map.setCenter(position);
	}, function(){
		handleLocationError('Geolocation service failed', map.getCenter());	
	});
	}else{
		handleLocationError('No geolocation avilable',map.getCenter());
	}
}

function handleLocationErro(contet, position){
	infoWindow.setPosition(position);
	infoWindow.setContent(content);
	infoWindow.open(map);
}