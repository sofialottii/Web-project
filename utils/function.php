<?php

/* l'utente si è appena loggato, la sessione viene aggiornata. Per
diminuire l'esposizione di dati sensibili, salviamo solo la mail */
function registerLoggedUser($emailUser){
    $_SESSION["E_mail"] = $emailUser;

}

/* controllo se un utente è attualmente loggato */
function isUserLoggedIn(){
    return !empty($_SESSION['E_mail']);
}

function checkPassword($p1, $p2){
    return $p1 == $p2;
}

function logout(){
    session_destroy();
}

/*cambia l'immagine del cuore a seconda che il prodotto sia preferito o meno*/
function checkPreferito($IDprodotto){
    global $dbh;
    $preferito = $dbh->checkProdottoPreferito($IDprodotto);
    if (empty($preferito)){
        return "../utils/img/icons/cuore_vuoto.png";
    } else {
        return "../utils/img/icons/cuore_pieno.png";
    }

}

function getImmagineProfilo($sessoUtente){
    if ($sessoUtente == "Donna"){
        return "../utils/img/icons/utente-donna.png";
    } else if ($sessoUtente == "Uomo"){
        return "../utils/img/icons/utente-uomo.png";
    } else {
        return "../utils/img/icons/utente-altro.png";
    }
}

function prezzoTotale($carrello){
    $totale = 0;
    foreach($carrello as $prodotto){
        $totale += $prodotto["PrezzoProdotto"] * $prodotto["QuantitaInCarrello"];
    }
    return $totale;
}

?>
