jQuery(document).ready(function($){
	var mapa = new google.maps.Map(document.getElementById('mapaUbicanos'), {
		center: new google.maps.LatLng(17.070898, -96.721359),
		scrollwheel: true,
		fullscreenControl: true,
		zoom: 10,
		zoomControl: true
	});
	
	var marca = new google.maps.Marker({
		position: new google.maps.LatLng(17.070898, -96.721359),
		map: mapa,
		title: "B. V. Margarita Maza",
		label: "Hola"
	});
	
	var infoWindow = new google.maps.InfoWindow;

	marca.addListener('click', function(){
		infoWindow.setContent("Tu te encuentras aquí");
		infoWindow.open(mapa, marca);

	});
});