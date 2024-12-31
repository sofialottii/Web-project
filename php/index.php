<?php 
require_once("bootstrap.php");

$templateParams["titolo"] = "Grimilde's - Home";
$templateParams["nome"] = "contenutoIndex.php";
$templateParams["recensioni"] = $dbh->getRecensioni();

require("../template/base.php");
?>