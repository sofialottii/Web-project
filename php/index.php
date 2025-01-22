<?php 
//ogni pagina ha come prima riga
require_once("bootstrap.php");


session_start();

/*offcanvas*/
if (isUserLoggedIn()) {
    $utente = $dbh->getProfilo()[0]["Nome"]." ".$dbh->getProfilo()[0]["Cognome"];
    $sessoUtente = $dbh->getProfilo()[0]["Sesso"];
} else {
    $utente = "Accedi";
    $sessoUtente = "";
}
$templateParams["canvas"] = "contenutoOffCanvas.php";
if (isset($_POST["logout"])) {
    logout();
    header("location: index.php");
    exit;
}
if (isset($_POST["login"])) {
    header("location: login.php");
    exit;
}

if (isset($_POST["registrati"])) {
    header("location: register.php");
    exit;
}

if (isset($_POST["loginAdmin"])) {
    header("location: areaRiservata.php");
    exit;
}



if (isset($_POST["acquista"])) {
    header("location: acquisto.php");
    exit;
}

if (isset($_POST["creaRecensione"])) {
    header("location: nuovaRecensione.php");
    exit;
}





//riga 6 e 7 sempre presenti (cambia il contenuto con il nome della pagina in sostanza)
$templateParams["titolo"] = "Grimilde's - Home"; //title
$templateParams["nome"] = "contenutoIndex.php"; //tempalte (la pagina che contiene il cotenuto)
$templateParams["recensioni"] = $dbh->getRecensioni(); //query, va in db.php e irchiama il metodo che contiene ed eseguie la query (in pratica ne 
//prende il risultato). se ho n risultati (tipo tutte le recensioni) allora il risultato sarà una lista di cose


//ogni pagina ha come ultima riga
require("../template/base.php");


/**
 * qui non c'è mai il HTML, sta solo nel template
 * viene sempre preso il base, che contiene header e footer. 
 * 
 * ci spostiamo a base
 */

?>