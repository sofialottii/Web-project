<?php 
require_once("bootstrap.php");

session_start();


if(!isUserLoggedIn()){
    header("location: login.php");
    exit;
}


$templateParams["titolo"] = "Grimilde's - Pagina Acquisto";
$templateParams["nome"] = "listaProdotti.php";

/*cercare i prodotti per nome*/
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $cercaProdotto = $_GET["CercaProdotto"] ?? "";
} else {
    $cercaProdotto = "";
}

/*aggiungere o rimuovere prodotto preferito*/
if (isset($_GET['IDProdotto'])) {
    $IDProdotto = $_GET['IDProdotto'];
    $preferito = $dbh->checkProdottoPreferito($IDProdotto);
    if (empty($preferito)){
        $dbh->aggiungiProdottoPreferito($IDProdotto);
    } else {
        $dbh->rimuoviProdottoPreferito($IDProdotto);
    }
    echo checkPreferito($IDProdotto);
    exit;
}

if ($dbh->isUtenteAdmin($_SESSION["E_mail"])){
    $templateParams["prodotti"] = $dbh->getProdotti($cercaProdotto);
} else {
    $templateParams["prodotti"] = $dbh->getProdottiUtenti($cercaProdotto);
}

$templateParams["carrello"] = $dbh->getCarrello($_SESSION["E_mail"]);

require("../template/base.php");

?>