<?php

require_once("bootstrap.php");

session_start();

if(isset($_POST["creaRecensione"])){
    if ($dbh->checkRecensioneFattaOggi($_SESSION["E_mail"], date("Y-m-d"))) {
        $templateParams["erroreRecensione"] = "Hai già recensito oggi! Torna domani.";
    } else {
        $testoRecensione = $_POST["testoRecensione"];
        $numeroStelle = $_POST["rating"] ?? 0;
        $dataOggi = date("Y-m-d");
        $dbh->creaRecensione($_SESSION["E_mail"], $numeroStelle, $dataOggi, $testoRecensione);
        header("location: index.php");
        exit;
    }
}



$templateParams["titolo"] = "Grimilde's - Nuova Recensione";
$templateParams["nome"] = "formCreaRecensione.php";

require("../template/base.php");

?>