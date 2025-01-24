<?php 
require_once("bootstrap.php");
session_start();

if(isUserLoggedIn()){
    $templateParams["profilo"] = $dbh->getProfilo();
    $utente = $dbh->getProfilo()[0]["Nome"]." ".$dbh->getProfilo()[0]["Cognome"];
    $sessoUtente = $dbh->getProfilo()[0]["Sesso"];
    /*notifiche: */
    $num = $dbh->getIDNotificaPiuAlta($_SESSION["E_mail"]);
    $idOrdine = $_GET["IDOrdine"];
    $m = $_SESSION["E_mail"];
    $dbh->creaNotifica($_SESSION["E_mail"], $num+1, "Conferma Ordine", "$utente, grazie per il tuo ordine!🎉
    Stiamo preparando tutto per te. Il tuo ordine verrà consegnato in 48h. <a href='tracciamentoOrdine.php?IDOrdine=$idOrdine'>Segui il tracciamento</a>
    oppure <a href='ordineSingolo.php?IdSingoloOrdine=$idOrdine&mail=$m'>guarda il riepilogo</a>.", "N");
    $Persone = $dbh->getAllMails();
    foreach($Persone as $Persona){
        if ($Persona["Amministratore"] == 'Y'){
            $num = $dbh->getIDNotificaPiuAlta($Persona["E_mail"]);
            $dbh->creaNotifica($Persona["E_mail"], $num+1, "Nuovo Ordine", "$utente ha appena effettuato il suo
            ordine n° $idOrdine. Sbrigati a rifornire i prodotti.", "Y");
        }
    }
}
else{
    header("location: login.php");
    exit;
}

/*canvas*/
$templateParams["canvas"] = "contenutoOffCanvas.php";
comandiCanvas();

$templateParams["titolo"] = "Grimilde's - Conferma Pagamento"; //title
$templateParams["nome"] = "contenuoPagamentoEffettuato.php";

require("../template/base.php");
?>