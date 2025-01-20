<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Profilo"; //title
$templateParams["nome"] = "contenutioModificaCampi.php";

require("../template/base.php");
?>