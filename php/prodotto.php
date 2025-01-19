<?php
require_once("bootstrap.php");

session_start();

$templateParams["articolo"] = $dbh->getProdotto($_GET["IDProdotto"]);
$templateParams["titolo"] = "Grimilde's - ".$templateParams["articolo"][0]["NomeProdotto"];
$templateParams["nome"] = "contenutoProdotto.php";

require("../template/base.php");

?>