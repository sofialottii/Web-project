<?php 
require_once("bootstrap.php");

session_start();
echo $_SESSION["E_mail"] ?? "NESSUN ACCESSO";


$templateParams["titolo"] = "Grimilde's - Pagina Acquisto";
$templateParams["nome"] = "listaProdotti.php";

/*cercare i prodotti per nome*/
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $cercaProdotto = $_GET["CercaProdotto"] ?? "";
} else {
    $cercaProdotto = "";
}

$templateParams["prodotti"] = $dbh->getProdotti($cercaProdotto);

require("../template/base.php");

?>