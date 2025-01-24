<?php
require_once("bootstrap.php");

session_start();

if(isUserLoggedIn()){
    $templateParams["profilo"] = $dbh->getProfilo();
    $utente = $dbh->getProfilo()[0]["Nome"]." ".$dbh->getProfilo()[0]["Cognome"];
    $sessoUtente = $dbh->getProfilo()[0]["Sesso"];
}
else{
    header("location: login.php");
    exit;
}

/*canvas*/
$templateParams["canvas"] = "contenutoOffCanvas.php";
comandiCanvas();

$templateParams["titolo"] = "Grimilde's - Recensioni"; 
$templateParams["nome"] = "listaRecensioni.php"; 
$templateParams["recensioni"] = $dbh->getAllRecensioni(); 

if(isset($_POST["rimuovi"])){
    $dbh->rimuoviRecesione($_POST["mailRecensione"], $_POST["dataRecensione"]);
    header("location: #");
    exit;
}


require("../template/base.php");
?>