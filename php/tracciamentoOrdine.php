<?php

require_once("bootstrap.php");

session_start();


$templateParams["titolo"] = "Grimilde's - Tracciamento Ordine";
$templateParams["nome"] = "contenutoTracciamento.php";
$templateParams["ordine"] = $dbh->getOrdine($_SESSION["E_mail"], $_GET["IDOrdine"]);

require("../template/base.php");

?>