<?php
require_once("bootstrap.php");

session_start();

if(isset($_POST["iscriviti"])){
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["E_mail"];
    $password = $_POST["password"];
    $conferma_password = $_POST["conferma_password"];
    $dataNascita = $_POST["dataNascita"];
    $sesso = $_POST["sesso"];
    ; $errore = false;
    if(!checkPassword($password, $conferma_password)){
        $errore = true;
        $templateParams["erroreRegister"] = "Le password non coincidono";
    }
    if ($sesso == "Nessuno"){
        $errore = true;
        $templateParams["erroreRegister"] = "Scegliere un sesso";
    }
    if (count($dbh->checkEmail($email)) > 0){
        $errore = true;
        $templateParams["erroreRegister"] = "Email esistente, effettua il login";
    }
    foreach ($lista_parametri as $parametro){
        if($parametro == ""){
            $errore = true;
            $templateParams["erroreRegister"] = "Compilare tutti i campi";
        }
    }
    if(!$errore){
        $dbh->registrazione($nome, $cognome, $email, $password, $dataNascita, $sesso);
        registerLoggedUser($email);
        header("location: index.php");
        exit;
    }
}

$templateParams["titolo"] = "Grimilde's - Registrati";
$templateParams["nome"] = "formRegistrazione.php";


require("../template/base.php");

?>