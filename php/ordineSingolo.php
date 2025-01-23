<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Ordine " . $_GET["IdSingoloOrdine"]; //title
$templateParams["nome"] = "contenutoOrdine.php";

$templateParams["contenuto"] = $dbh->getElementiOrdini($_GET["IdSingoloOrdine"]);


require("../template/base.php");
?>