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
insert into user values(null,' Rakoto',' Andry',sha1('mdptest'),'Rakoto@gmail.com',0);
insert into user values(null,'Randria','Hery',sha1('mdptest'),'Randria@gmail.com',1);


create table the(
    idthe int auto_increment primary key,
    variete varchar(256) not null unique,
    occupation double not null,
    rendement double not null
);
insert into the values(null,'vert','7','14');
insert into the values(null,'noir','8','10');



create table prixthe(
    idprixthe int auto_increment primary key,
    variete varchar(256) not null ,
    prixthe double not null

);
insert into prixthe values(null,'noir',20);
insert into prixthe values(null,'vert',15);


create table parcelle(
    idparcelle int auto_increment primary key,
    surface double not null,
    idthe int,
    foreign key (idthe) references the (idthe)
);
insert into parcelle values(NULL,2000,1);
insert into parcelle values(NULL,1000,2);


create table cueilleur (
    idcueilleur int auto_increment primary key,
    nom varchar (256),
    genre varchar(10),
    datenaissance date
);
insert into cueilleur values(null,'Mahery','M','2023-10-13');
insert into cueilleur values(null,'Maya','F','2023-11-13');


create table categoriedepense(
    idcategoriedepense int auto_increment primary key,
    motif varchar(256)
);
insert into categoriedepense values(null,'essence');
insert into categoriedepense values(null,'gasoil');

create table salaire(
    idsalaire int auto_increment primary key,
    idceuilleur int,
    foreign key (idceuilleur) references cueilleur (idcueilleur),
    montant double not null
);
insert into salaire values(null,1,100);
insert into salaire values(null,2,98);



create table cueillette(
    idcueillette int auto_increment primary key,
    datecueillette date not null,
    idceuilleur int,
    foreign key (idceuilleur) references cueilleur (idcueilleur),
    idparcelle int,
    foreign key (idparcelle) references parcelle (idparcelle),
    poids double 
);
insert into cueillette values(null,'2023-04-12','1','1',20);
insert into cueillette values(null,'2023-04-12','2','2',320);



create table depense(
    iddep int auto_increment primary key,
    idcategoriedepense int,
    foreign key (idcategoriedepense) references categoriedepense (idcategoriedepense),
    montant double not null,
    datedepense date 
);
insert into depense values(null,1,20,'2023-04-12');
insert into depense values(null,2,50,'2023-04-12');


create table resultat(
    idresultat int auto_increment primary key,
    poidtotalcueillette double not null,
    poidrestantparcelle double not null,
    coutrevient double not null
);

create table remuneration(
    idcueilleur int ,
    poidminimum double not null,
    bonus double not null,
    malus double not null,
    foreign key (idcueilleur) references cueilleur (idcueilleur)

);
insert into remuneration values(1,10,12,3);
insert into remuneration values(2,15,17,23);



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

insert into saison values(1);
insert into saison values(2);
insert into saison values(3);
insert into saison values(4);
insert into saison values(5);
insert into saison values(6);
insert into saison values(7);
insert into saison values(8);
insert into saison values(9);
insert into saison values(10);
insert into saison values(11);
insert into saison values(12);



