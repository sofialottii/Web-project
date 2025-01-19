<?php
require_once("bootstrap.php");

session_start();

$templateParams["titolo"] = "Grimilde's - ";// +$_GET["Prodotto"];
$templateParams["nome"] = "listaProdotti.php";

require("../template/base.php");

?>