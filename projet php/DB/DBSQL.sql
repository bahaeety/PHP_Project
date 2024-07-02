drop database if exists DB_Produit ;
create database DB_Produit ;
use DB_Produit;

CREATE TAble  Produits(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);
