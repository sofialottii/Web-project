<?php 
require_once("bootstrap.php");
session_start();
    $templateParams["titolo"] = "Grimilde's -Profilo - Pagamento"; //title
    $templateParams["nome"] = "contenuoPagamentoEffettuato.php";

require("../template/base.php");
?>