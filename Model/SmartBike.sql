/* Création de la base de données 'smartbike' et de ses tables sous PostgreSQL */
create database SmartBike; 

/* Table concernant les informations des vélos vendus par l'enseigne SmartBike */
create table bikes(
    id_velo serial,
    nom varchar(50) not null,
    photo varchar not null,
    prix decimal(6, 2) not null,
    datePublication date not null,
    contenu varchar(200),
    primary key(id_velo),
    unique(nom)
);

/* Table pour stocker les informations des utilisateurs */
create table users(
    id_user serial,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    email varchar(100) not null,
    contenu varchar(200) not null,
	primary key(id_user)
);