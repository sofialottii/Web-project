ALTER TABLE prodotto
 MODIFY Immagine varchar(100);

ALTER TABLE tariffario
 MODIFY Peso float(5);

ALTER TABLE tariffario
 MODIFY PrezzoProdotto float(5);

ALTER TABLE cliente
 MODIFY Password varchar(20);

ALTER TABLE cliente
 MODIFY E_mail varchar(50);

ALTER TABLE CartaDiCredito
 MODIFY E_mail varchar(50);

ALTER TABLE carrello
 MODIFY E_mail varchar(50);

ALTER TABLE notifica
 MODIFY E_mail varchar(50);

ALTER TABLE ordine
 MODIFY E_mail varchar(50);

ALTER TABLE preferito
 MODIFY E_mail varchar(50);

ALTER TABLE recensione
 MODIFY E_mail varchar(50);

ALTER TABLE ordine
 MODIFY ImportoTotale float(7);

ALTER TABLE ordine
 MODIFY Costo_spedizione float(5);

ALTER TABLE ordine
 MODIFY Ora datetime;

ALTER TABLE recensione
 MODIFY NumeroStelle int(2);

ALTER TABLE recensione
 ADD PRIMARY KEY (TestoRecensione, E_mail);

ALTER TABLE recensione
 MODIFY TestoRecensione varchar(300);


INSERT INTO prodotto (IDProdotto,NomeProdotto,Immagine) VALUES
(001, 'Mela', 'M'),
(002, 'Pera', 'P'),
(003, 'Banana', 'B'),
(004, 'Kiwi', 'K'),
(005, 'Ananas', 'A'),
(006, 'Fragola', 'F'),
(007, 'Ciliegia', 'C'),
(008, 'Uva', 'U'),
(009, 'Pesca', 'P'),
(010, 'Mango', 'M'),
(011, 'Melone', 'M'),
(012, 'Anguria', 'A'),
(013, 'Limone', 'L'),
(014, 'Arancia', 'A'),
(015, 'Pompelmo', 'P'),
(016, 'Mandarino', 'M'),
(017, 'Clementina', 'C'),
(018, 'Ribes', 'R'),
(019, 'Lampone', 'L'),
(020, 'Mirtillo', 'M'),
(021, 'Fico', 'F'),
(022, 'Caco', 'C'),
(023, 'Prugna', 'P'),
(024, 'Susina', 'S');

INSERT INTO stagione (NomeStagione) VALUES
('Primavera'),
('Estate'),
('Autunno'),
('Inverno');

INSERT INTO presente (IDProdotto,NomeStagione) VALUES
(001, 'Primavera'),
(001, 'Estate'),
(001, 'Autunno'),
(001, 'Inverno'),
(002, 'Primavera'),
(002, 'Estate'),
(002, 'Autunno'),
(002, 'Inverno'),
(003, 'Primavera'),
(003, 'Estate'),
(003, 'Autunno'),
(003, 'Inverno'),
(004, 'Primavera'),
(004, 'Autunno'),
(004, 'Inverno'),
(005, 'Primavera'),
(005, 'Estate'),
(005, 'Autunno'),
(005, 'Inverno'),
(006, 'Primavera'),
(006, 'Estate'),
(007, 'Primavera'),
(007, 'Estate'),
(008, 'Autunno'),
(009, 'Estate'),
(010, 'Primavera'),
(010, 'Estate'),
(010, 'Autunno'),
(010, 'Inverno'),
(011, 'Estate'),
(012, 'Estate'),
(013, 'Primavera'),
(013, 'Estate'),
(013, 'Autunno'),
(013, 'Inverno'),
(014, 'Inverno'),
(015, 'Inverno'),
(016, 'Inverno'),
(017, 'Inverno'),
(018, 'Primavera'),
(018, 'Estate'),
(019, 'Primavera'),
(019, 'Estate'),
(020, 'Primavera'),
(020, 'Estate'),
(021, 'Estate'),
(021, 'Autunno'),
(022, 'Autunno'),
(023, 'Primavera'),
(023, 'Autunno'),
(024, 'Primavera'),
(024, 'Estate');

INSERT INTO tariffario (IDProdotto, Peso, PrezzoProdotto) VALUES
(001, 100.0, 1.50),
(002, 100.0, 2.00),
(003, 100.0, 1.20),
(004, 100.0, 2.50),
(005, 100.0, 3.00),
(006, 100.0, 2.20),
(007, 100.0, 2.80),
(008, 100.0, 2.10),
(009, 100.0, 1.90),
(010, 100.0, 2.60),
(011, 100.0, 3.10),
(012, 100.0, 3.50),
(013, 100.0, 1.70),
(014, 100.0, 2.40),
(015, 100.0, 2.90),
(016, 100.0, 2.30),
(017, 100.0, 2.70),
(018, 100.0, 1.80),
(019, 100.0, 2.20),
(020, 100.0, 2.50),
(021, 100.0, 2.00),
(022, 100.0, 2.60),
(023, 100.0, 1.90),
(024, 100.0, 2.40);

INSERT INTO spedizione (StatoSpedizione) VALUES
('InPreparazione'),
('InTransito'),
('Consegnato');

INSERT INTO cliente (E_mail, `Password`, Nome, Cognome, DataNascita, Sesso) VALUES
('sofialotti17@gmail.com','ciao1234','Sofia','Lotti','2003-10-10','Donna'),
('sebastiano.lucarelli@gmail.com','ciao5678','Sebastiano','Lucarelli','2003-05-23','Uomo');

INSERT INTO recensione (NumeroStelle, DataRecensione, TestoRecensione, E_mail) VALUES
(5.0, '2021-05-18', 'Ottimo prodotto', 'sofialotti17@gmail.com');

