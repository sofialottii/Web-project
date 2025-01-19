<?php

/* l'utente si è appena loggato, la sessione viene aggiornata */
function registerLoggedUser($user){
    $_SESSION["E_mail"] = $user["E_mail"];
    $_SESSION["nome"] = $user["nome"];
    $_SESSION["cognome"] = $user["cognome"];
    $_SESSION["dataNascita"] = $user["dataNascita"];
    $_SESSION["sesso"] = $user["sesso"];

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

?>
