<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Notifiche"; //title
$templateParams["nome"] = "contenutoStoricoNotifiche.php";

if(isUserLoggedIn()){
$templateParams["notifiche"] = $dbh->getNotifiche();
}
else{
    header("location: login.php");
    exit;
}

if(empty($templateParams["notifiche"])){
    $templateParams["errore"] = "Non ci sono notifiche!";
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