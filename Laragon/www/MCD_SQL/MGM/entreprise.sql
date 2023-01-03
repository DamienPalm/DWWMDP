#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS mgm;

CREATE DATABASE IF NOT EXISTS mgm;

USE mgm;

#------------------------------------------------------------
# Table: EMPLOYE
#------------------------------------------------------------

CREATE TABLE EMPLOYE(
        idEmploye Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        sexe    Varchar (50) NOT NULL ,
        department      Varchar (50) NOT NULL ,
        salaire Float NOT NULL ,
        dateContrat Date NOT NULL
	,CONSTRAINT EMPLOYE_PK PRIMARY KEY (idEmploye)
)ENGINE=InnoDB;