<?php 

require_once("bootstrap.php");

$templateParams["titolo"] = "Grimilde's - Pagina Acquisto";
$templateParams["nome"] = "listaProdotti.php";


$cercaProdotto = isset($_GET["CercaProdotto"]) ? trim($_GET["CercaProdotto"]) : "";



/*if (isset($_GET["CercaProdotto"])) {
    $cercaProdotto = $_GET["CercaProdotto"];
} else {
    $cercaProdotto = "";
}*/

//$cercaProdotto = $_GET["CercaProdotto"] ?? "";
echo $cercaProdotto;

$templateParams["prodotti"] = $dbh->getProdotti($cercaProdotto);

require("../template/base.php");

?>