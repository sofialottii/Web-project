<?php 

require_once("bootstrap.php");

$templateParams["titolo"] = "Grimilde's - Pagina Acquisto";
$templateParams["nome"] = "listaProdotti.php";


if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $cercaProdotto = $_GET["CercaProdotto"] ?? "";
} else {
    $cercaProdotto = "";
}

echo $_SESSION["E_mail"] ?? "NESSUN ACCESSO";

$templateParams["prodotti"] = $dbh->getProdotti($cercaProdotto);

require("../template/base.php");

?>