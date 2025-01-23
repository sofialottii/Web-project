<?php
require_once("bootstrap.php");

session_start();

$idProdotto = $_GET["IDProdotto"];
$templateParams["articolo"] = $dbh->getProdotto($idProdotto);
$templateParams["isUtenteAdmin"] = $dbh->isUtenteAdmin($_SESSION["E_mail"]);
$templateParams["titolo"] = "Grimilde's - ".$templateParams["articolo"][0]["NomeProdotto"];
$templateParams["nome"] = "contenutoProdotto.php";

if (isset($_POST["aggiungiCarrello"])) {
    $checkProdotto = $dbh->checkProdottoInCarrello($idProdotto);
    if (count($checkProdotto) > 0) {
        $dbh->modificaQuantitaCarrello($idProdotto, $_POST["quantita"]+$checkProdotto[0]["QuantitaInCarrello"]);
    } else {
        $dbh->aggiungiCarrello($idProdotto, $_POST["quantita"]);
    }
    header("location: acquisto.php");
    exit;
}

if(isset($_POST["cambiaRifornimento"])){
    $confermaAggiunta = $_POST["quantitaRifornimento"] == "" ? 0 : $_POST["quantitaRifornimento"];
    $nuovaQuantita = $templateParams["articolo"][0]["QuantitaDisponibile"] + ($confermaAggiunta);
    $dbh->cambiaQuantitaProdotto($idProdotto, $nuovaQuantita);
    header ("location: prodotto.php?IDProdotto=$idProdotto");
    exit;
} else if(isset($_POST["cambiaPrezzo"])){
    $dbh->cambiaPrezzoProdotto($idProdotto, $_POST["nuovoPrezzo"] ?? 0);
    header ("location: prodotto.php?IDProdotto=$idProdotto");
    exit;
} else if(isset($_POST["cambiaVisibilita"])){
    $nuovaVisibilita = $templateParams["articolo"][0]["Visibile"] == 'Y' ? 'N' : 'Y';
    $dbh->cambiaVisibilitaProdotto($idProdotto, $nuovaVisibilita);
    header ("location: prodotto.php?IDProdotto=$idProdotto");
    exit;
}

require("../template/base.php");

?>