<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Profilo"; //title
$templateParams["nome"] = "contenutoProfilo.php";

if(isUserLoggedIn()){
$templateParams["profilo"] = $dbh->getProfilo();
}
else{
    header("location: login.php");
    exit;
}

require("../template/base.php");
?>