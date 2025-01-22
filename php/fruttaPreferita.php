<?php 
require_once("bootstrap.php");

session_start();

if(!isUserLoggedIn()){
    header("location: login.php");
    exit;
}

$templateParams["titolo"] = "Grimilde's - Preferiti";
$templateParams["nome"] = "listaPreferiti.php";

$templateParams["prodotti"] = $dbh->getProdottiPreferiti();

require("../template/base.php");

?>