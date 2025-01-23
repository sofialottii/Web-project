<?php 
    require_once("bootstrap.php");
    session_start();
    
    $templateParams["notifica"] = $dbh->getNotifica($_GET["IdNotifica"]);
    $dbh->cambiaStatoNotifica($_GET["IdNotifica"]);

    //$templateParams["isUtenteAdmin"] = $dbh->isUtenteAdmin($_SESSION["E_mail"]);
    $templateParams["titolo"] = "Grimilde's - Notifica " . $_GET["IdNotifica"]; //aggiungi nome notifica da db
    $templateParams["nome"] = "contenutoNotifica.php";

    if(isset($_POST["rimuovi"])){
        $dbh->rimuoviNotifica($_POST["IdNotifica"]);
        header("location: storicoNotifiche.php");
        exit;
    }

    require("../template/base.php");
?>