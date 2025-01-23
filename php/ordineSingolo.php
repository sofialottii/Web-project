<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Ordine " . $_GET["IdSingoloOrdine"]; //title
$templateParams["nome"] = "contenutoOrdine.php";



require("../template/base.php");
?>