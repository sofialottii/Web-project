<?php

require_once("bootstrap.php");

session_start();


$templateParams["titolo"] = "Grimilde's - Tracciamento Ordine";
$templateParams["nome"] = "contenutoTracciamento.php";
//$templateParams["ordine"] = $dbh->getOrdine($_GET);

require("../template/base.php");

?>