<?php

session_start();

unset($_SESSION["membro_comite"]);

header("location: ../index.php");

?>