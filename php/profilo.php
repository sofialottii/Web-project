<?php 
require_once("bootstrap.php");

$templateParams["titolo"] = "Grimilde's - Profilo"; //title
$templateParams["nome"] = "contenutoProfilo.php";
$templateParams["profilo"] = $dbh->getProfilo();

require("../template/base.php");
?>