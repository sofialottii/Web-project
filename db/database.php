<?php

class DatabaseHelper{

    private $db;
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            die("Connesione fallita al db");
        }
    }

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

    public function registrazione($nome, $cognome, $email, $password, $dataNascita, $sesso){
        $stmt = $this->db->prepare("INSERT INTO CLIENTE (Nome, Cognome, E_mail, Password, DataNascita, Sesso)
                                            VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nome, $cognome, $email, $password, $dataNascita, $sesso);
        $stmt->execute();
    }

    public function checkLogin($email, $password){
        $stmt = $this->db->prepare("SELECT * FROM CLIENTE WHERE E_mail = ? AND Password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProdotti($cercaProdotto){
        $cercaProdotto = "%".$cercaProdotto."%";
        $stmt = $this->db->prepare("SELECT NomeProdotto, ImmagineProdotto, Peso, PrezzoProdotto 
                                        FROM PRODOTTO P, TARIFFARIO T
                                        WHERE P.IDProdotto = T.IDProdotto
                                        AND NomeProdotto LIKE ?");
        $stmt->bind_param("s", $cercaProdotto);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProfilo(){
        //$utente = $_SESSION["E_mail"];
        $utente="sebastiano.lucarelli@gmail.com";
        $stmt = $this->db->prepare("SELECT E_mail, Nome, Cognome, DataNascita
                                    FROM CLIENTE
                                    WHERE E_mail=?");
        $stmt->bind_param("s", $utente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }



}

?>