<?php

function registerLoggedUser($user){
    $_SESSION["E_mail"] = $user["E_mail"];
    $_SESSION["nome"] = $user["nome"];
    $_SESSION["cognome"] = $user["cognome"];
    $_SESSION["dataNascita"] = $user["dataNascita"];
    $_SESSION["sesso"] = $user["sesso"];

}

?>
