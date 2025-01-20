<?php

require_once("bootstrap.php");

session_start();





$templateParams["titolo"] = "Grimilde's - Nuova Recensione";
$templateParams["nome"] = "formCreaRecensione.php";

require("../template/base.php");

?>