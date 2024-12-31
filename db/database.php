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



}

?>