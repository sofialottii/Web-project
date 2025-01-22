<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Storico Oridini"; //title
$templateParams["nome"] = "contenutoOrdine.php";

if(isUserLoggedIn()){
$templateParams["ordini"] = $dbh->getOrdini();
}
else{
    header("location: login.php");
    exit;
}

if(empty($templateParams["ordini"])){
    $templateParams["errore"] = "Non sono stati effettuati ordini!";
}

if(isset($_POST["cancellanotifiche"])){
    $dbh->rimuoviTutteNotifiche();
   header("location: #");
    exit;
}

if(isset($_POST["rimuovi"])){
    $dbh->rimuoviNotifica($_POST["IdNotifica"]);
    header("location: storicoNotifiche.php");
    exit;
}

require("../template/base.php");
?>