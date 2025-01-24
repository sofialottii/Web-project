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


$templateParams["titolo"] = "Grimilde's - Carrello";
$templateParams["nome"] = "contenutoCarrello.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["E_mail"]);

if(isset($_POST["svuotaCarrello"])){
    $dbh->svuotaCarrello($_SESSION["E_mail"]);
    header("location: carrello.php");
    exit;
}

if(isset($_POST["rimuovi"])){
    $quantitaAttualeProdotto = $dbh->getQuantitaProdotto($_POST["IDProdotto"]);
    $nuovaQuantita = $quantitaAttualeProdotto[0] + $templateParams["carrello"][0]["QuantitaInCarrello"];
    $dbh->cambiaQuantitaProdotto($_POST["IDProdotto"], $nuovaQuantita);
    $dbh->rimuoviProdottoCarrello($_SESSION["E_mail"], $_POST["IDProdotto"]);
    header("location: carrello.php");
    exit;
}

if (isset($_POST["vaiInCassa"])){
    if (empty($templateParams["carrello"])){
        $templateParams["errore"] = "Il carrello è vuoto! Aggiungi dei prodotti prima di procedere all'acquisto.";
    }
    else {
        header("location: procediPagamento.php");
        exit;
    }
}



require("../template/base.php");

?>