<?php
require_once("bootstrap.php");

if(isset($_POST["iscriviti"])){
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["E_mail"];
    $password = $_POST["password"];
    $conferma_password = $_POST["conferma_password"];
    $dataNascita = $_POST["dataNascita"];
    $sesso = $_POST["sesso"];
    $lista_parametri = array($nome, $cognome, $email, $password, $conferma_password, $dataNascita, $sesso);
    $errore = false;
    foreach ($lista_parametri as $parametro){
        if($parametro == ""){
            $errore = true;
            $templateParams["errorelogin"] = "Compilare tutti i campi";
        }
    }
    if($password != $conferma_password){
        $errore = true;
        $templateParams["errorelogin"] = "Le password non coincidono";
    }
    if ($sesso == "Nessuno"){
        $errore = true;
        $templateParams["errorelogin"] = "Scegliere un sesso";
    }
    if(!$errore){
        $dbh->registrazione($nome, $cognome, $email, $password, $dataNascita, $sesso);
        header("location: index.php");
        exit;
    }
}

$templateParams["titolo"] = "Grimilde's - Registrati";
$templateParams["nome"] = "formRegistrazione.php";


require("../template/base.php");

?>