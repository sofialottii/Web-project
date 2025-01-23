<?php 
    require_once("bootstrap.php");
    session_start();
    
    $templateParams["titolo"] = "Grimilde's - Notifica " . $_GET["IdNotifica"]; //aggiungi nome notifica da db
    $templateParams["nome"] = "contenutoNotifica.php";



    require("../template/base.php");
?>