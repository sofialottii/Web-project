<?php 

require_once("bootstrap.php");

session_start();

$templateParams["titolo"] = "Grimilde's - Carrello";
$templateParams["nome"] = "contenutoCarrello.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["E_mail"]);

require("../template/base.php");

?>