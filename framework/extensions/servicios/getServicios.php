<?php
function getPrincipalesServicios(){
	global $extensionsDirectory;
	global $totalPrincipalesServicios;
	$servicios = json_decode(file_get_contents($extensionsDirectory . '/servicios/servicios.json'));
	
	for ($cont = 0 ; $cont < $totalPrincipalesServicios ; $cont++){
		$servicio = $servicios[$cont];
		include($extensionsDirectory . '/servicios/servicio.php');
	}
}

function getDemasServicios(){
	global $extensionsDirectory;
	global $totalPrincipalesServicios;
	$servicios = json_decode(file_get_contents($extensionsDirectory . '/servicios/servicios.json'));
	
	$cont = $totalPrincipalesServicios;
	for (; $cont < count($servicios) ; $cont++){
		$servicio = $servicios[$cont];
		include($extensionsDirectory . '/servicios/servicio.php');
	}
}
?>