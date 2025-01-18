<?php 
//ogni pagina ha come prima riga
require_once("bootstrap.php");


session_start();
if (isUserLoggedIn()) {
    echo "Ciao, " . $_SESSION["nome"];
} else {
    echo "Utente non loggato!";
}


//riga 6 e 7 sempre presenti (cambia il contenuto con il nome della pagina in sostanza)
$templateParams["titolo"] = "Grimilde's - Home"; //title
$templateParams["nome"] = "contenutoIndex.php"; //tempalte (la pagina che contiene il cotenuto)
$templateParams["recensioni"] = $dbh->getRecensioni(); //query, va in db.php e irchiama il metodo che contiene ed eseguie la query (in pratica ne 
//prende il risultato). se ho n risultati (tipo tutte le recensioni) allora il risultato sarà una lista di cose
echo $_SESSION["E_mail"] ?? "NESSUN ACCESSO";
//ogni pagina ha come ultima riga
require("../template/base.php");


/**
 * qui non c'è mai il HTML, sta solo nel template
 * viene sempre preso il base, che contiene header e footer. 
 * 
 * ci spostiamo a base
 */

?>