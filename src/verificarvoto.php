<?php
	$voto = $_GET['voto'];

	if ($voto == "confirmar") {
		header("Location: painel_urna.php?voto=$voto&valor=1");

	} else { 
		header("Location: painel_urna.php?voto=$voto");
	}

?>
