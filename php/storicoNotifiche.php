<?php 
require_once("bootstrap.php");
session_start();


$templateParams["titolo"] = "Grimilde's - Notifiche"; //title
$templateParams["nome"] = "contenutoStoricoNotifiche.php";
$utente=$_SESSION["E_mail"];

if(isUserLoggedIn()){
    if($dbh->isUtenteAdmin($_SESSION["E_mail"])){
        $templateParams["notifiche"] = $dbh->getNotificheAdmin();
    }
    else{
        $templateParams["notifiche"] = $dbh->getNotifiche();
    }
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
    header("location: #");
    exit;
}

require("../template/base.php");
?>