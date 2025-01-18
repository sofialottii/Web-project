<?php 
require_once("bootstrap.php");

session_start();

$templateParams["titolo"] = "Grimilde's - Preferiti";
$templateParams["nome"] = "listaPreferiti.php";

$templateParams["prodotti"] = $dbh->getProdottiPreferiti();

require("../template/base.php");

?>