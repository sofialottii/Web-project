<?php 

require_once("bootstrap.php");

session_start();

$templateParams["titolo"] = "Grimilde's - Carrello";
$templateParams["nome"] = "contenutoCarrello.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["E_mail"]);

if(isset($_POST["svuotaCarrello"])){
    $dbh->svuotaCarrello($_SESSION["E_mail"]);
}

if(isset($_POST["rimuovi"])){
    $dbh->rimuoviProdottoCarrello($_SESSION["E_mail"], $_POST["IDProdotto"]);
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