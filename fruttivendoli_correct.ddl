-- *********************************************
-- * Standard SQL generation                   
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2              
-- * Generator date: Sep 14 2021              
-- * Generation date: Sun Dec 22 15:52:10 2024 
-- * LUN file: C:\xampp\htdocs\Web-project\fruttivendoli.lun 
-- * Schema: fruttivendolilun/SQL1 
-- ********************************************* 


-- Database Section
-- ________________ 

create database fruttivendolilun;


-- DBSpace Section
-- _______________


-- Tables Section
-- _____________ 

create table carrello (
     E_mail varchar(20) not null,
     IDProdotto numeric(3) not null,
     constraint ID_carrello_ID primary key (IDProdotto, E_mail));

create table CartaDiCredito (
     E_mail varchar(20) not null,
     CartaDiCredito numeric(10) not null,
     constraint ID_CartaDiCredito_ID primary key (E_mail, CartaDiCredito));

create table CLIENTE (
     E_mail varchar(20) not null,
     Password varchar(15) not null,
     Nome varchar(15) not null,
     Cognome varchar(15) not null,
     DataNascita date not null,
     Sesso varchar(15) not null,
     constraint ID_CLIENTE_ID primary key (E_mail));

create table NOTIFICA (
     E_mail varchar(20) not null,
     IdNotifica numeric(5) not null,
     TipoNotifica varchar(20) not null,
     TestoNotifica varchar(150) not null,
     constraint ID_NOTIFICA_ID primary key (E_mail, IdNotifica));

create table ORDINE (
     Data date not null,
     Ora char(1) not null,
     ImportoTotale numeric(5) not null,
     Costo_spedizione varchar(4),
     E_mail varchar(20) not null,
     StatoSpedizione varchar(15) not null,
     constraint ID_ORDINE_ID primary key (Data, Ora));

create table preferito (
     E_mail varchar(20) not null,
     IDProdotto numeric(3) not null,
     constraint ID_preferito_ID primary key (IDProdotto, E_mail));

create table presente (
     IDProdotto numeric(3) not null,
     NomeStagione varchar(10) not null,
     constraint ID_presente_ID primary key (IDProdotto, NomeStagione));

create table PRODOTTO (
     IDProdotto numeric(3) not null,
     NomeProdotto varchar(15) not null,
     Immagine char(1) not null,
     constraint ID_PRODOTTO_ID primary key (IDProdotto));

create table RECENSIONE (
     NumeroStelle float(3) not null,
     DataRecensione date not null,
     TestoRecensione varchar(200) not null,
     E_mail varchar(20) not null);

create table SPEDIZIONE (
     StatoSpedizione varchar(15) not null,
     constraint ID_SPEDIZIONE_ID primary key (StatoSpedizione));

create table STAGIONE (
     NomeStagione varchar(10) not null,
     constraint ID_STAGIONE_ID primary key (NomeStagione));

create table TARIFFARIO (
     IDProdotto numeric(3) not null,
     Peso numeric(5) not null,
     PrezzoProdotto numeric(5) not null,
     constraint ID_TARIFFARIO_ID primary key (IDProdotto, Peso));


-- Constraints Section
-- ___________________ 

alter table carrello add constraint REF_carre_PRODO
     foreign key (IDProdotto)
     references PRODOTTO;

alter table carrello add constraint REF_carre_CLIEN_FK
     foreign key (E_mail)
     references CLIENTE;

alter table CartaDiCredito add constraint REF_Carta_CLIEN
     foreign key (E_mail)
     references CLIENTE;

alter table NOTIFICA add constraint REF_NOTIF_CLIEN
     foreign key (E_mail)
     references CLIENTE;

alter table ORDINE add constraint REF_ORDIN_CLIEN_FK
     foreign key (E_mail)
     references CLIENTE;

alter table ORDINE add constraint REF_ORDIN_SPEDI_FK
     foreign key (StatoSpedizione)
     references SPEDIZIONE;

alter table preferito add constraint REF_prefe_PRODO
     foreign key (IDProdotto)
     references PRODOTTO;

alter table preferito add constraint REF_prefe_CLIEN_FK
     foreign key (E_mail)
     references CLIENTE;

alter table presente add constraint REF_prese_STAGI_FK
     foreign key (NomeStagione)
     references STAGIONE;

alter table presente add constraint EQU_prese_PRODO
     foreign key (IDProdotto)
     references PRODOTTO;

alter table PRODOTTO add constraint ID_PRODOTTO_CHK
     check(exists(select * from TARIFFARIO
                  where TARIFFARIO.IDProdotto = IDProdotto)); 

alter table PRODOTTO add constraint ID_PRODOTTO_CHK
     check(exists(select * from presente
                  where presente.IDProdotto = IDProdotto)); 

alter table RECENSIONE add constraint REF_RECEN_CLIEN_FK
     foreign key (E_mail)
     references CLIENTE;

alter table TARIFFARIO add constraint EQU_TARIF_PRODO
     foreign key (IDProdotto)
     references PRODOTTO;


-- Index Section
-- _____________ 

create unique index ID_carrello_IND
     on carrello (IDProdotto, E_mail);

create index REF_carre_CLIEN_IND
     on carrello (E_mail);

create unique index ID_CartaDiCredito_IND
     on CartaDiCredito (E_mail, CartaDiCredito);

create unique index ID_CLIENTE_IND
     on CLIENTE (E_mail);

create unique index ID_NOTIFICA_IND
     on NOTIFICA (E_mail, IdNotifica);

create unique index ID_ORDINE_IND
     on ORDINE (Data, Ora);

create index REF_ORDIN_CLIEN_IND
     on ORDINE (E_mail);

create index REF_ORDIN_SPEDI_IND
     on ORDINE (StatoSpedizione);

create unique index ID_preferito_IND
     on preferito (IDProdotto, E_mail);

create index REF_prefe_CLIEN_IND
     on preferito (E_mail);

create unique index ID_presente_IND
     on presente (IDProdotto, NomeStagione);

create index REF_prese_STAGI_IND
     on presente (NomeStagione);

create unique index ID_PRODOTTO_IND
     on PRODOTTO (IDProdotto);

create index REF_RECEN_CLIEN_IND
     on RECENSIONE (E_mail);

create unique index ID_SPEDIZIONE_IND
     on SPEDIZIONE (StatoSpedizione);

create unique index ID_STAGIONE_IND
     on STAGIONE (NomeStagione);

create unique index ID_TARIFFARIO_IND
     on TARIFFARIO (IDProdotto, Peso);

