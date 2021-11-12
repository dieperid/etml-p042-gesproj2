-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.1              
-- * Generator date: Dec  4 2018              
-- * Generation date: Fri Oct 15 13:00:34 2021 
-- * LUN file: F:\ETML\CFC\Pratique\Projets\P-GesProj2\Base_Données\Modélisation\db_gesProj2.lun 
-- * Schema: db_gesProj2/MLD 
-- ********************************************* 


-- Database Section
-- ________________ 

create database db_gesProj2/MLD;
use db_gesProj2/MLD;


-- Tables Section
-- _____________ 

create table t_client (
     idClient int not null auto_increment,
     cliNom varchar(50) not null,
     cliPrenom varchar(50) not null,
     cliNumTel varchar(20) not null,
     cliLocalite varchar(50) not null,
     cliCp int not null,
     constraint ID_t_client_ID primary key (idClient));

create table t_commande (
     idCommande int not null auto_increment,
     comDateAchat date not null,
     comDateFinGarantie date not null,
     comPrix int not null,
     idClient int not null,
     constraint ID_t_commande_ID primary key (idCommande));

create table t_contenir (
     idCommande int not null,
     idTelephone int not null,
     conQuantite int not null,
     constraint ID_t_contenir_ID primary key (idTelephone, idCommande));

create table t_marque (
     idMarque int not null auto_increment,
     marNom varchar(20) not null,
     constraint ID_t_marque_ID primary key (idMarque));

create table t_telephone (
     idTelephone int not null auto_increment,
     telModele varchar(40) not null,
     telOS varchar(20) not null,
     telVersionOs varchar(4) not null,
     telPrixSortie int not null,
     telPrixActuel int not null,
     telChipsetRef varchar(40) not null,
     telChipsetGhz float(2) not null,
     telNbCoeur int not null,
     telRam int not null,
     telTailleEcran float(2) not null,
     telResolution varchar(10) not null,
     telAutonomie int not null,
     telMemoire int not null,
     idMarque int not null,
     constraint ID_t_telephone_ID primary key (idTelephone));


-- Constraints Section
-- ___________________ 

-- Not implemented
-- alter table t_commande add constraint ID_t_commande_CHK
--     check(exists(select * from t_contenir
--                  where t_contenir.idCommande = idCommande)); 

alter table t_commande add constraint FKeffectuer_FK
     foreign key (idClient)
     references t_client (idClient);

alter table t_contenir add constraint FKt_c_t_t
     foreign key (idTelephone)
     references t_telephone (idTelephone);

alter table t_contenir add constraint FKt_c_t_c_FK
     foreign key (idCommande)
     references t_commande (idCommande);

alter table t_telephone add constraint FKposseder_FK
     foreign key (idMarque)
     references t_marque (idMarque);


-- Index Section
-- _____________ 

create unique index ID_t_client_IND
     on t_client (idClient);

create unique index ID_t_commande_IND
     on t_commande (idCommande);

create index FKeffectuer_IND
     on t_commande (idClient);

create unique index ID_t_contenir_IND
     on t_contenir (idTelephone, idCommande);

create index FKt_c_t_c_IND
     on t_contenir (idCommande);

create unique index ID_t_marque_IND
     on t_marque (idMarque);

create unique index ID_t_telephone_IND
     on t_telephone (idTelephone);

create index FKposseder_IND
     on t_telephone (idMarque);

