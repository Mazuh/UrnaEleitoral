<?php
	$valor = $_REQUEST['voto'];
	$id = $_REQUEST['id'];
	$voto = $_REQUEST['valor'];
	
	if ($valor == "confirmar") {
		header("Location: script/registrar_voto.php?id=$id&voto=$voto");

	} else { 
		header("Location: urna.php?voto=$valor");
	}

?>
