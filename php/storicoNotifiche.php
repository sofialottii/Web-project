<?php 
require_once("bootstrap.php");
session_start();

$templateParams["titolo"] = "Grimilde's - Notifiche"; //title
$templateParams["nome"] = "contenutoStoricoNotifiche.php";

if(isUserLoggedIn()){
$templateParams["notifiche"] = $dbh->getNotifiche();
}
else{
    header("location: login.php");
    exit;
}

require("../template/base.php");
?>