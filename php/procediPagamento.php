<?php 

require_once("bootstrap.php");
session_start();

if(isset($_POST["confermaPagamento"])){
    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $numeroCarta=$_POST["numeroCarta"];
    $scadenza=$_POST["scadenza"];
    $cvv=$_POST["cvv"];
    $memorizza=$_POST["memorizza"];

    if($memorizza==1){
        $dbh->salvaDati($nome,$cognome,$numeroCarta,$scadenza,$cvv);
    }

    $templateParams["carte"] = $dbh->getDati();
}

$templateParams["titolo"] = "Grimilde's - Pagamento"; //title
$templateParams["nome"] = "contenutoPagamento.php";

require("../template/base.php");
?>