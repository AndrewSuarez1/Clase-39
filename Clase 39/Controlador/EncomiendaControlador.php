<?php

	require_once("Modelo/EncomiendaModelo.php");
	
	$encomienda = new encomienda_model();
	$datos = $encomienda->getEncomienda
    ();
	 
	//Llamada a la vista
	require_once("Vista/EncomiendaVista.php");
	
?>