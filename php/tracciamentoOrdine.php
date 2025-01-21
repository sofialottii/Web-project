<?php

require_once("bootstrap.php");

session_start();


$templateParams["titolo"] = "Grimilde's - Tracciamento Ordine";
$templateParams["nome"] = "contenutoTracciamento.php";

require("../template/base.php");

?>