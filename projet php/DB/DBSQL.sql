drop database if exists DB_Produit ;
create database DB_Produit ;
use DB_Produit;

CREATE TAble  Blanchisserie(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Blanchisserie(nom,PRIX,Sourceimg,Descrition) VALUES 
('BÖNSYRSA',3.99,'DB/Image_Produits/Blanchisserie&nettoyage/BÖNSYRSA.avif','Nécessaire de nettoyage, turquoise'),
('PEPPRIG',2.99,'DB/Image_Produits/Blanchisserie&nettoyage/PEPPRIG.avif','Tampon nettoyage en microfibre, vert'),
('PEPPRIG 2',17.99,'DB/Image_Produits/Blanchisserie&nettoyage/PEPPRIG 2.avif','Seau et panier de nettoyage, vert'),
('MULIG',44.99,'DB/Image_Produits/Blanchisserie&nettoyage\MULIG.avif','Séchoir, intérieur/extérieur, blanc'),
('LILLNAGGEN',2.99,'DB/Image_Produits/Blanchisserie&nettoyage\PEPPRIG.avif','Raclette'),
('LILLNAGGEN',2.99,'DB/Image_Produits/Blanchisserie&nettoyage\LILLNAGGEN 2.avif','Raclette'),
('GRILLTIDER',3.99,'DB/Image_Produits/Blanchisserie&nettoyage\GRILLTIDER.avif','Brosse de nettoyage grille barbecue, acier inox/hêtre, 42 cm (16 ½ ")');


CREATE TAble  Décoration(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Décoration(nom,PRIX,Sourceimg,Descrition) VALUES 
('LINDBYN',59.99,'DB/Image_Produits/Blanchisserie&nettoyage\LINDBYN.avif','Miroir, noir, 80 cm (31 1/2 ")'),
('FEJKA',39.99,'DB/Image_Produits/Blanchisserie&nettoyage\FEJKA.avif','Plante artificielle en pot, intérieur/extérieur monstera, 19 cm (7 ½ ")'),
('FENOMEN',2.99,'DB/Image_Produits/Blanchisserie&nettoyage\FENOMEN.avif','Bougie-bloc non parfumée, naturel, 14 cm (5 ½ ")'),
('LOMVIKEN',14.99,'DB/Image_Produits/Blanchisserie&nettoyage\LOMVIKEN.avif','Cadre, noir, 32x32 cm (12 ½x12 ½ ")'),
('HOVET',199.99,'DB/Image_Produits/Blanchisserie&nettoyage\HOVET.avif','Miroir, noir, 78x196 cm (30 3/4x77 1/8 ")');

CREATE TAble  Éclairage(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Éclairage(nom,PRIX,Sourceimg,Descrition) VALUES 
('ÅSKMULLER',19.99,'DB/Image_Produits/Blanchisserie&nettoyage\ÅSKMULLER.avif','Lampe de table, gris-vert, 24 cm (9 ")'),
('TÄRNABY',24.99,'DB/Image_Produits/Blanchisserie&nettoyage\TÄRNABY.avif','Lampe de table, intensité lumineuse réglable anthracite, 25 cm (10 ")'),
('KALLFRONT / HEMMA',24.99,'DB/Image_Produits/Blanchisserie&nettoyage\KALLFRONT.avif','Suspension, noir, 52 cm (20 ")'),
('VIDJA',49.99,'DB/Image_Produits/Blanchisserie&nettoyage\VIDJA.avif','Lampadaire, blanc, 138 cm (54 ")'),
('HEKTAR',79.99,'DB/Image_Produits/Blanchisserie&nettoyage\HEKTAR.avif','Lampadaire, gris foncé');

CREATE TAble  Lits(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);
INSERT INTO Lits(nom,PRIX,Sourceimg,Descrition) VALUES 
('MALM',279.00,'DB/Image_Produits/Blanchisserie&nettoyage\MALM.avif','Structure de lit haut, bleu/Luröy, Deux places'),
('NEIDEN',99.00,'DB/Image_Produits/Blanchisserie&nettoyage\NEIDEN.avif','Structure lit, pin, Deux places'),
('SLATTUM',169.00,'DB/Image_Produits/Blanchisserie&nettoyage\SLATTUM.avif','Structure de lit matelassée, Vissle gris foncé, Grand 2 places'),
('TARVA',189.00,'DB/Image_Produits/Blanchisserie&nettoyage\TARVA.avif','Structure de lit, teinté blanc, Deux places'),
('BRIMNES',449.00,'DB/Image_Produits/Blanchisserie&nettoyage\BRIMNES.avif','Lit à tiroirs intégrés, blanc/Luröy, Grand 2 places');


CREATE TAble  Maisonintelligente(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Maisonintelligente(nom,PRIX,Sourceimg,Descrition) VALUES
('SYMFONISK',179.00,'DB/Image_Produits/Blanchisserie&nettoyage\SYMFONISK.avif','Haut-parleur étagère avec pied, blanc/Gen 2'),
('DIRIGERA',79.99,'DB/Image_Produits/Blanchisserie&nettoyage\DIRIGERA.avif','Passerelle pour produits connectés, blanc intelligent'),
('TRÅDFRI',9.99,'DB/Image_Produits/Blanchisserie&nettoyage\TRÅDFRI.avif',"Ampoule à DEL E12 250 lumens, intelligent variateur d'intensité sans fil/blanc chaud flamme"),
('SOMRIG',8.99,'DB/Image_Produits/Blanchisserie&nettoyage\SOMRIG.avif',"Bouton raccourci, blanc intelligent");

CREATE TAble  Nouveautés(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);
INSERT INTO Nouveautés(nom,PRIX,Sourceimg,Descrition) VALUES
('DAJLIEN 1',149.00,'DB/Image_Produits/Blanchisserie&nettoyage\DAJLIEN 1.avif','Banc avec rangement, bambou, 100x30x37 cm (39 3/8x11 3/4x14 5/8 ")'),
('DAJLIEN 2',49.00,'DB/Image_Produits/Blanchisserie&nettoyage\DAJLIEN 2.avif','Valet de nuit, blanc, 139 cm (54 3/4 ")'),
('DAJLIEN 3',69.00,'DB/Image_Produits/Blanchisserie&nettoyage\DAJLIEN 3.avif','Desserte, blanc, 42x39x65 cm (16 1/2x15 3/8x25 5/8 ")');

CREATE TAble  Offresdete(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);
INSERT INTO Offresdete(nom,PRIX,Sourceimg,Descrition) VALUES
('VADHOLMA',449.00,'DB/Image_Produits/Blanchisserie&nettoyage\VADHOLMA.avif','Îlot de cuisine, noir/chêne, 79x63x90 cm (31 1/8x24 5/8x35 3/8 ")'),
('LAGKAPTEN / ALEX',223.00,'DB/Image_Produits/Blanchisserie&nettoyage\LAGKAPTEN.avif','Bureau, blanc, 140x60 cm (55 1/8x23 5/8 ")'),
('VADHOLMA 2',639.00,'DB/Image_Produits/Blanchisserie&nettoyage\VADHOLMA 2.avif','Îlot de cuisine, noir/chêne, 126x79x90 cm (49 5/8x31 1/8x35 3/8 ")'),
('ALEX',49.00,'DB/Image_Produits/Blanchisserie&nettoyage\ALEX.avif','Rangement, blanc, 36x70 cm (14 1/8x27 1/2 ")');



CREATE TAble  Produitspouranimauxdecompagnie(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Produitspouranimauxdecompagnie(nom,PRIX,Sourceimg,Descrition) VALUES
('FÖRVAR',3.99,'DB/Image_Produits/Blanchisserie&nettoyage\FÖRVAR.avif','Bocal avec couvercle, verre/couleur aluminium, 1.8 l (61 oz)'),
('HORNAVAN',24.99,'DB/Image_Produits/Blanchisserie&nettoyage\HORNAVAN.avif','Desserte, blanc, 26x48x77 cm (10 1/4x18 7/8x30 3/8 ")'),
('NISSAFORS',14.99,'DB/Image_Produits/Blanchisserie&nettoyage\NISSAFORS.avif','Desserte, vert clair, 50.5x30x83 cm (19 7/8x11 3/4x32 5/8 ")'),
('UTSÅDD',2.49,'DB/Image_Produits/Blanchisserie&nettoyage\UTSÅDD.avif','Crochet, chat');

CREATE TAble  Rénovationsmaison(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

INSERT INTO Rénovationsmaison(nom,PRIX,Sourceimg,Descrition) VALUES
('FIXA',2.99,'DB/Image_Produits/Blanchisserie&nettoyage\FIXA.avif','Gabarit de perçage, orange'),
('TRIXIG',7.99,'DB/Image_Produits/Blanchisserie&nettoyage\TRIXIG.avif','Ensemble de mèches, 20 pièces'),
('INVALLNING',29.99,'DB/Image_Produits/Blanchisserie&nettoyage\INVALLNING.avif','Desserte, pour boîtes blanc, 68x39 cm (26 3/4x15 3/8 ")'),
('RULLEBÖR',39.99,'DB/Image_Produits/Blanchisserie&nettoyage\RULLEBÖR.avif','Diable, noir'),
('ROTHULT',25.99,'DB/Image_Produits/Blanchisserie&nettoyage\ROTHULT.avif','Verrou intelligent, blanc');


CREATE TAble  Touslesmeubles(
    ID_produit int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);
INSERT INTO Touslesmeubles(nom,PRIX,Sourceimg,Descrition) VALUES
('FRIHETEN / KLAGSHAMN',1128.00,'DB/Image_Produits/Blanchisserie&nettoyage\FRIHETEN.avif',"Canapé-lit d'angle rgt intégré, Skiftebo gris foncé"),
('SÖDERHAMN',880.00,'DB/Image_Produits/Blanchisserie&nettoyage\SÖDERHAMN.avif',"Canapé, Viarp beige/brun"),
('OSKARSHAMN',449.00,'DB/Image_Produits/Blanchisserie&nettoyage\OSKARSHAMN.avif','Fauteuil à oreilles, Tibbleby beige/gris'),
('KIVIK',699.00,'DB/Image_Produits/Blanchisserie&nettoyage\KIVIK.avif','Canapé, Tibbleby beige/gris'),
('HAVSTA',400.00,'DB/Image_Produits/Blanchisserie&nettoyage\HAVSTA.avif','Armoire, noir, 81x35x123 cm (31 7/8x13 3/4x48 3/8 ")');



