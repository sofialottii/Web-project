<?php

class DatabaseHelper{

    private $db;
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            die("Connesione fallita al db");
        }
    }

    /* INDEX */
    public function getRecensioni() {
    $stmt = $this->db->prepare("
        SELECT r.NumeroStelle, r.DataRecensione, 
            r.TestoRecensione, c.Nome, c.Cognome
        FROM recensione r
        JOIN cliente c
        ON r.E_mail = c.E_mail");

    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* REGISTER */
    public function registrazione($nome, $cognome, $email, $password, $dataNascita, $sesso){
        $stmt = $this->db->prepare("INSERT INTO CLIENTE (Nome, Cognome, E_mail, Password, DataNascita, Sesso)
                                            VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nome, $cognome, $email, $password, $dataNascita, $sesso);
        $stmt->execute();
    }

    public function checkEmail($email){
        $stmt = $this->db->prepare("SELECT E_mail
                                        FROM CLIENTE
                                        WHERE E_mail = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* LOGIN */
    public function checkLogin($email, $password){
        $stmt = $this->db->prepare("SELECT * FROM CLIENTE WHERE E_mail = ? AND Password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* ACQUISTO */
    public function getProdotti($cercaProdotto){
        $cercaProdotto = "%".$cercaProdotto."%";
        $stmt = $this->db->prepare("SELECT P.IDProdotto, NomeProdotto, ImmagineProdotto, Peso, PrezzoProdotto 
                                        FROM PRODOTTO P, TARIFFARIO T
                                        WHERE P.IDProdotto = T.IDProdotto
                                        AND NomeProdotto LIKE ?");
        $stmt->bind_param("s", $cercaProdotto);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkProdottoPreferito($IDprodotto){
        $stmt = $this->db->prepare("SELECT IDProdotto
                                        FROM preferito pref
                                        WHERE Pref.IDProdotto = ?
                                        AND pref.E_mail = ?");
        $stmt->bind_param("ss", $IDprodotto, $_SESSION["E_mail"]);          
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* FRUTTA PREFERITA */

    public function getProdottiPreferiti(){
        $stmt = $this->db->prepare("SELECT P.IDProdotto, NomeProdotto, ImmagineProdotto, Peso, PrezzoProdotto 
                                        FROM PRODOTTO P, TARIFFARIO T, PREFERITO pref
                                        WHERE P.IDProdotto = T.IDProdotto
                                        AND P.IDProdotto = pref.IDProdotto
                                        AND pref.E_mail = ?");
        $stmt->bind_param("s", $_SESSION["E_mail"]);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function aggiungiProdottoPreferito($IDprodotto){
        $stmt = $this->db->prepare("INSERT INTO PREFERITO (IDProdotto, E_mail)
                                        VALUES (?, ?)");
        $stmt->bind_param("ss", $IDprodotto, $_SESSION["E_mail"]);
        $stmt->execute();
    }
    public function rimuoviProdottoPreferito($IDprodotto){
        $stmt = $this->db->prepare("DELETE FROM PREFERITO
                                        WHERE IDProdotto = ?
                                        AND E_mail = ?");
        $stmt->bind_param("ss", $IDprodotto, $_SESSION["E_mail"]);
        $stmt->execute();
    }

    /* PRODOTTO */
    public function getProdotto($IDProdotto){
        $stmt = $this->db->prepare("SELECT P.IDProdotto, NomeProdotto, DescrizioneProdotto, ImmagineProdotto, Peso, PrezzoProdotto 
                                        FROM PRODOTTO P, TARIFFARIO T
                                        WHERE P.IDProdotto = T.IDProdotto
                                        AND P.IDProdotto = ?");
        $stmt->bind_param("s", $IDProdotto);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function aggiungiCarrello($IDProdotto, $quantita){
        $stmt = $this->db->prepare("INSERT INTO CARRELLO (E_mail, IDProdotto, QuantitaInCarrello)
                                        VALUES (?, ?, ?)");
        $stmt->bind_param("sss",$_SESSION["E_mail"], $IDProdotto, $quantita);
        $stmt->execute();
    }

    public function checkProdottoInCarrello($IDProdotto){
        $stmt = $this->db->prepare("SELECT IDProdotto, QuantitaInCarrello
                                        FROM carrello
                                        WHERE IDProdotto = ?
                                        AND E_mail = ?");
        $stmt->bind_param("ss", $IDProdotto, $_SESSION["E_mail"]);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function modificaQuantitaCarrello($IDProdotto, $quantita){
        $stmt = $this->db->prepare("UPDATE CARRELLO
                                        SET QuantitaInCarrello = ?
                                        WHERE IDProdotto = ?
                                        AND E_mail = ?");
        $stmt->bind_param("sss", $quantita, $IDProdotto, $_SESSION["E_mail"]);
        $stmt->execute();
    }

    /* NUOVA RECENSIONE */

    public function creaRecensione($email, $numeroStelle, $dataRecensione, $testoRecensione){
        $stmt = $this->db->prepare("INSERT INTO RECENSIONE (E_mail, NumeroStelle, DataRecensione, TestoRecensione)
                                        VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $numeroStelle, $dataRecensione, $testoRecensione);
        $stmt->execute();
    }

    public function checkRecensioneFattaOggi($email, $data){
        $stmt = $this->db->prepare("SELECT E_mail
                                        FROM RECENSIONE
                                        WHERE E_mail = ?
                                        AND DataRecensione = ?");
        $stmt->bind_param("ss", $email, $data);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /* CARRELLO */

    public function getCarrello($email){
        $stmt = $this->db->prepare("SELECT C.IDProdotto, NomeProdotto, ImmagineProdotto, DescrizioneProdotto, Peso, PrezzoProdotto, QuantitaInCarrello
                                        FROM CARRELLO C, PRODOTTO P, TARIFFARIO T
                                        WHERE C.IDProdotto = P.IDProdotto
                                        AND P.IDProdotto = T.IDProdotto
                                        AND C.E_mail = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function svuotaCarrello($email){
        $stmt = $this->db->prepare("DELETE FROM CARRELLO
                                        WHERE E_mail = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
    }

    public function rimuoviProdottoCarrello($email, $IDProdotto){
        $stmt = $this->db->prepare("DELETE FROM CARRELLO
                                        WHERE E_mail = ?
                                        AND IDProdotto = ?");
        $stmt->bind_param("ss", $email, $IDProdotto);
        $stmt->execute();
    }

    /* PROFILO */
    public function getProfilo(){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("SELECT E_mail, Nome, Cognome, DataNascita
                                    FROM CLIENTE
                                    WHERE E_mail=?");
        $stmt->bind_param("s", $utente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    /* CAMBIA PASSWORD */
    public function modificaPassword($nuova_pass){
        $utente = $_SESSION["E_mail"];
        $pass=$nuova_pass;
        $stmt = $this->db->prepare("UPDATE CLIENTE 
                                    SET password=?
                                    WHERE E_mail=?");
        $stmt->bind_param("ss",$nuova_pass,$utente);
        $stmt->execute();
    }

    /* CAMBIO CAMPI */
    public function modificaNome($nuovo_nome){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("UPDATE CLIENTE 
                                    SET Nome=?
                                    WHERE E_mail=?");
        $stmt->bind_param("ss",$nuovo_nome,$utente);
        $stmt->execute();
    }

    public function modificaCognome($nuovo_cognome){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("UPDATE CLIENTE 
                                    SET Cognome=?
                                    WHERE E_mail=?");
        $stmt->bind_param("ss",$nuovo_cognome,$utente);
        $stmt->execute();
    }

    public function modificaDataNascita($nuova_data){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("UPDATE CLIENTE 
                                    SET DataNascita=?
                                    WHERE E_mail=?");
        $stmt->bind_param("ss",$nuova_data,$utente);
        $stmt->execute();
    }

    public function modificaSesso($nuovo_sesso){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("UPDATE CLIENTE 
                                    SET Sesso=?
                                    WHERE E_mail=?");
        $stmt->bind_param("ss",$nuovo_sesso,$utente);
        $stmt->execute();
    }

    /* PAGAMENTO */

    public function salvaDati($nome, $cognome, $numero, $cvv, $scadenza){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("INSERT INTO CARTA_REGISTRATA (NomeIntestatario, CognomeIntestatario, NumeroCarta, Cvv, DataScadenza,Email)
                                        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiiss", $NomeIntestatario, $CognomeIntestatario, $NumeroCarta, $Cvv, $DataScadenza, $utente);
        $stmt->execute();                           
    }

    public function getDati(){
        $utente = $_SESSION["E_mail"];
        $stmt = $this->db->prepare("SELECT NumeroCarta, DataScadenza, NomeIntestatario, CognomeIntestario
                                    FROM CARTA_REGISTRATA
                                    WHERE E_mail=?");
        $stmt->bind_param("s", $utente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


}

?>