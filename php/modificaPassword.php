<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Profilo - Modifica Password"; //title
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
    $conferma_password = $_POST["conferma_password"];

    $login_result = $dbh->checkLogin($_SESSION["E_mail"], $vecchia_password);
    if(empty($login_result)){
        $templateParams["errorelogin"] = "Errore! password Errata";
    }

    if(!checkPassword($nuova_password, $conferma_password)){
        $templateParams["erroreRegister"] = "Le password non coincidono";
    }
    else{
        $dbh->modificaPassword($nuova_password);
        header("location: profilo.php");
        exit;
    }


}

require("../template/base.php");

?>