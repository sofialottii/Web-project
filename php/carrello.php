<?php 

require_once("bootstrap.php");

session_start();


if(isset($_POST["svuotaCarrello"])){
    $dbh->svuotaCarrello($_SESSION["E_mail"]);
}

if(isset($_POST["rimuovi"])){
    $dbh->rimuoviProdottoCarrello($_SESSION["E_mail"], $_POST["IDProdotto"]);
}

if (isset($_POST["vaiInCassa"])){
    header("location: procediPagamento.php");
    exit;
}

$templateParams["titolo"] = "Grimilde's - Carrello";
$templateParams["nome"] = "contenutoCarrello.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["E_mail"]);

require("../template/base.php");

?>