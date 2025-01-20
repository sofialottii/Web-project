<?php
require_once("bootstrap.php");

session_start();

$templateParams["articolo"] = $dbh->getProdotto($_GET["IDProdotto"]);
$templateParams["titolo"] = "Grimilde's - ".$templateParams["articolo"][0]["NomeProdotto"];
$templateParams["nome"] = "contenutoProdotto.php";

if (isset($_POST["aggiungiCarrello"])) {
    $checkProdotto = $dbh->checkProdottoInCarrello($templateParams["articolo"][0]["IDProdotto"]);
    if (count($checkProdotto) > 0) {
        $dbh->modificaQuantitaCarrello($templateParams["articolo"][0]["IDProdotto"], $_POST["quantita"]+$checkProdotto[0]["QuantitaInCarrello"]);
    } else {
        $dbh->aggiungiCarrello($templateParams["articolo"][0]["IDProdotto"], $_POST["quantita"]);
    }
    header("location: acquisto.php");
    exit;
}


require("../template/base.php");

?>