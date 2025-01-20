<?php

require_once("bootstrap.php");

session_start();

if(isset($_POST["creaRecensione"])){
    $testoRecensione = $_POST["testoRecensione"];
    $numeroStelle = $_POST["rating"];
    $dataOggi = date("Y-m-d");
    $dbh->creaRecensione($_SESSION["E_mail"], $numeroStelle, $dataOggi, $testoRecensione);
    header("location: index.php");
    exit;
}



$templateParams["titolo"] = "Grimilde's - Nuova Recensione";
$templateParams["nome"] = "formCreaRecensione.php";

require("../template/base.php");

?>