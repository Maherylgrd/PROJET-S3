create database the;

use the;

create table user(
    iduser int auto_increment primary key,
    nom varchar(256) not null,
    prenom varchar(256) not null,
    mdp varchar(256) not null,
    email varchar(256) not null unique,
    statut int check (statut between 0 and 1)
);

create table the(
    idthe int auto_increment primary key,
    variete varchar(256) not null unique,
    occupation double not null,
    rendement double not null
);

create table prixthe(
    idprixthe int auto_increment primary key,
    idthe int,
    foreign key (idthe) references the (idthe),
    prixthe double not null

);

create table parcelle(
    idparcelle int auto_increment primary key,
    surface double not null,
    idthe int,
    foreign key (idthe) references the (idthe)
);

insert into parcelle values(NULL,2000,1);

create table cueilleur (
    idcueilleur int auto_increment primary key,
    nom varchar (256),
    genre varchar(10),
    datenaissance date
);

create table categoriedepense(
    idcategoriedepense int auto_increment primary key,
    motif varchar(256)
);

create table salaire(
    idsalaire int auto_increment primary key,
    idceuilleur int,
    foreign key (idceuilleur) references cueilleur (idcueilleur),
    montant double not null
);

create table cueillette(
    idcueillette int auto_increment primary key,
    datecueillette date not null,
    idceuilleur int,
    foreign key (idceuilleur) references cueilleur (idcueilleur),
    idparcelle int,
    foreign key (idparcelle) references parcelle (idparcelle),
    poids double 
);

create table depense(
    iddep int auto_increment primary key,
    idcategoriedepense int,
    foreign key (idcategoriedepense) references categoriedepense (idcategoriedepense),
    montant double not null,
    datedepense date 
);

create table resultat(
    idresultat int auto_increment primary key,
    poidtotalcueillette double not null,
    poidrestantparcelle double not null,
    coutrevient double not null
);

create table remuneration(
    idceuilleur int ,
    foreign key (idceuilleur) references cueilleur (idceuilleur);
    poidminimum double not null,
    bonus double not null,
    malus double not null
);

create table paiement(
    datecueillette date not null,
    nom varchar(256) not null,
    poidcueilli double not null,
    bonus double not null,
    mallus double not null,
    paiement double not null

);

create table saison(
    idmois int check (idmois between 1 and 12)
);

insert into user values(null,' Rakoto',' Andry',sha1('mdptest'),'Rakoto@gmail.com',0);
insert into user values(null,'Randria','Hery',sha1('mdptest'),'Randria@gmail.com',1);

insert into cueilleur values(NULL,'doda','H','2000-12-14');