<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Profilo"; //title
$templateParams["nome"] = "contenutoCambiaPassword.php";

if(isUserLoggedIn()){
$templateParams["profilo"] = $dbh->getProfilo();
}
else{
    header("location: login.php");
    exit;
}
if(isset($_POST["aggiornaPassword"])){
    $vecchia_password=$_POST["vecchia_password"];
    $nuova_password = $_POST["nuova_password"];
    $coferma_password = $_POST["conferma_password"];

    $login_result = $dbh->checkLogin($_SESSION["E_mail"], $vecchia_password);
    if(empty($login_result)){
        $templateParams["errorelogin"] = "Errore! password Errata";
    }

}

require("../template/base.php");

?>