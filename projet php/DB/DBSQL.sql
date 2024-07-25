drop database if exists DB_Produit ;
create database DB_Produit ;
use DB_Produit;

-- créer la table Produits:

CREATE TAble  Produits(
    ID_produit INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(30) NOT NULL,
    typeProduit varchar(50),
    PRIX double(10,2) NOT NULL ,
    Sourceimg varchar(255) ,
    Descrition text 
);

-- créer la table user:
CREATE TABLE user(
    ID_user INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    numere_cellulaire INT NOT NULL,
    Adresse VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

-- créer la table Panier:

CREATE TABLE Panier (
    cart_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ID_user INT NOT NULL,
    ID_produit INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    FOREIGN KEY (ID_user) REFERENCES user(ID_user),
    FOREIGN KEY (ID_produit) REFERENCES Produits(ID_produit)
);
-- creer la table newsletter: 
CREATE TABLE Newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    subscribed_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- creer la table payment :
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    panier_id INT NOT NULL,
    montant DECIMAL(10, 2) NOT NULL,
    date_paiement DATETIME DEFAULT CURRENT_TIMESTAMP,
    methode_paiement VARCHAR(50) NOT NULL,
    statut ENUM('En attente', 'Complété', 'Annulé') DEFAULT 'En attente',
    FOREIGN KEY (user_id) REFERENCES user(ID_user),
    FOREIGN KEY (panier_id) REFERENCES panier(cart_id)
);



INSERT INTO Produits(nom,PRIX,typeProduit,Sourceimg,Descrition) VALUES 
('BÖNSYRSA',3.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/BÖNSYRSA.avif','Nécessaire de nettoyage, turquoise'),
('PEPPRIG',2.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/PEPPRIG.avif','Tampon nettoyage en microfibre, vert'),
('PEPPRIG 2',17.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/PEPPRIG 2.avif','Seau et panier de nettoyage, vert'),
('MULIG',44.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/MULIG.avif','Séchoir, intérieur/extérieur, blanc'),
('LILLNAGGEN',2.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/LILLNAGGEN.avif','Raclette'),
('LILLNAGGEN 2',2.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/LILLNAGGEN 2.avif','Raclette'),
('GRILLTIDER',3.99,'Blanchisserie','../DB/Image_Produits/Blanchisserie & nettoyage/GRILLTIDER.avif','Brosse de nettoyage grille barbecue, acier inox/hêtre, 42 cm (16 ½ ")'),

('LINDBYN',59.99,'Décoration','../DB/Image_Produits/Décoration/LINDBYN.avif','Miroir, noir, 80 cm (31 1/2 ")'),
('FEJKA',39.99,'Décoration','../DB/Image_Produits/Décoration/FEJKA.avif','Plante artificielle en pot, intérieur/extérieur monstera, 19 cm (7 ½ ")'),
('FENOMEN',2.99,'Décoration','../DB/Image_Produits/Décoration/FENOMEN.avif','Bougie-bloc non parfumée, naturel, 14 cm (5 ½ ")'),
('LOMVIKEN',14.99,'Décoration','../DB/Image_Produits/Décoration/LOMVIKEN.avif','Cadre, noir, 32x32 cm (12 ½x12 ½ ")'),
('HOVET',199.99,'Décoration','../DB/Image_Produits/Décoration/HOVET.avif','Miroir, noir, 78x196 cm (30 3/4x77 1/8 ")'),


('TÄRNABY',24.99,'Éclairage','../DB/Image_Produits/Éclairage/TÄRNABY.avif','Lampe de table, intensité lumineuse réglable anthracite, 25 cm (10 ")'),
('ÅSKMULLER',19.99,'Éclairage','../DB/Image_Produits/Éclairage/ÅSKMULLER.avif','Lampe de table, gris-vert, 24 cm (9 ")'),
('KALLFRONT / HEMMA',24.99,'Éclairage','../DB/Image_Produits/Éclairage/KALLFRONT.avif','Suspension, noir, 52 cm (20 ")'),
('VIDJA',49.99,'Éclairage','../DB/Image_Produits/Éclairage/VIDJA.avif','Lampadaire, blanc, 138 cm (54 ")'),
('HEKTAR',79.99,'Éclairage','../DB/Image_Produits/Éclairage/HEKTAR.avif','Lampadaire, gris foncé'),

('MALM',279.00,'Lits','../DB/Image_Produits/Lits/MALM.avif','Structure de lit haut, bleu/Luröy, Deux places'),
('NEIDEN',99.00,'Lits','../DB/Image_Produits/Lits/NEIDEN.avif','Structure lit, pin, Deux places'),
('SLATTUM',169.00,'Lits','../DB/Image_Produits/Lits/SLATTUM.avif','Structure de lit matelassée, Vissle gris foncé, Grand 2 places'),
('TARVA',189.00,'Lits','../DB/Image_Produits/Lits/TARVA.avif','Structure de lit, teinté blanc, Deux places'),
('BRIMNES',449.00,'Lits','../DB/Image_Produits/Lits/BRIMNES.avif','Lit à tiroirs intégrés, blanc/Luröy, Grand 2 places'),
('FRIHETEN / KLAGSHAMN',1128.00,'Lits','../DB/Image_Produits/Tous les meubles/FRIHETEN.avif',"Canapé-lit d'angle rgt intégré, Skiftebo gris foncé"),
('SÖDERHAMN',880.00,'Lits','../DB/Image_Produits/Tous les meubles/SÖDERHAMN.avif',"Canapé, Viarp beige/brun"),
('OSKARSHAMN',449.00,'Lits','../DB/Image_Produits/Tous les meubles/OSKARSHAMN.avif','Fauteuil à oreilles, Tibbleby beige/gris'),
('KIVIK',699.00,'Lits','../DB/Image_Produits/Tous les meubles/KIVIK.avif','Canapé, Tibbleby beige/gris'),
('HAVSTA',400.00,'Lits','../DB/Image_Produits/Tous les meubles/HAVSTA.avif','Armoire, noir, 81x35x123 cm (31 7/8x13 3/4x48 3/8 ")'),


('SYMFONISK',179.00,'Maisonintelligente','../DB/Image_Produits/Maison intelligente/SYMFONISK.avif','Haut-parleur étagère avec pied, blanc/Gen 2'),
('DIRIGERA',79.99,'Maisonintelligente','../DB/Image_Produits/Maison intelligente/DIRIGERA.avif','Passerelle pour produits connectés, blanc intelligent'),
('TRÅDFRI',9.99,'Maisonintelligente','../DB/Image_Produits/Maison intelligente/TRÅDFRI.avif',"Ampoule à DEL E12 250 lumens, intelligent variateur d'intensité sans fil/blanc chaud flamme"),
('SOMRIG',8.99,'Maisonintelligente','../DB/Image_Produits/Maison intelligente/SOMRIG.avif',"Bouton raccourci, blanc intelligent"),

('DAJLIEN 1',149.00,'Nouveautés','../DB/Image_Produits/Nouveautés/DAJLIEN 1.avif','Banc avec rangement, bambou, 100x30x37 cm (39 3/8x11 3/4x14 5/8 ")'),
('DAJLIEN 2',49.00,'Nouveautés','../DB/Image_Produits/Nouveautés/DAJLIEN 2.avif','Valet de nuit, blanc, 139 cm (54 3/4 ")'),
('DAJLIEN 3',69.00,'Nouveautés','../DB/Image_Produits/Nouveautés/DAJLIEN 3.avif','Desserte, blanc, 42x39x65 cm (16 1/2x15 3/8x25 5/8 ")'),


('VADHOLMA',449.00,'Offresdete',"../DB/Image_Produits/Offres d'ete/VADHOLMA.avif",'Îlot de cuisine, noir/chêne, 79x63x90 cm (31 1/8x24 5/8x35 3/8 ")'),
('LAGKAPTEN / ALEX',223.00,'Offresdete',"../DB/Image_Produits/Offres d'ete/LAGKAPTEN.avif",'Bureau, blanc, 140x60 cm (55 1/8x23 5/8 ")'),
('VADHOLMA 2',639.00,'Offresdete',"../DB/Image_Produits/Offres d'ete/VADHOLMA 2.avif",'Îlot de cuisine, noir/chêne, 126x79x90 cm (49 5/8x31 1/8x35 3/8 ")'),
('ALEX',49.00,'Offresdete',"../DB/Image_Produits/Offres d'ete/ALEX.avif",'Rangement, blanc, 36x70 cm (14 1/8x27 1/2 ")'),


('FÖRVAR',3.99,'Produitspouranimauxdecompagnie','../DB/Image_Produits/Produits pour animaux de compagnie/FÖRVAR.avif','Bocal avec couvercle, verre/couleur aluminium, 1.8 l (61 oz)'),
('HORNAVAN',24.99,'Produitspouranimauxdecompagnie','../DB/Image_Produits/Produits pour animaux de compagnie/HORNAVAN.avif','Desserte, blanc, 26x48x77 cm (10 1/4x18 7/8x30 3/8 ")'),
('NISSAFORS',14.99,'Produitspouranimauxdecompagnie','../DB/Image_Produits/Produits pour animaux de compagnie/NISSAFORS.avif','Desserte, vert clair, 50.5x30x83 cm (19 7/8x11 3/4x32 5/8 ")'),
('UTSÅDD',2.49,'Produitspouranimauxdecompagnie','../DB/Image_Produits/Produits pour animaux de compagnie/UTSÅDD.avif','Crochet, chat'),


('FIXA',2.99,'Rénovationsmaison','../DB/Image_Produits/Rénovations maison/FIXA.avif','Gabarit de perçage, orange'),
('TRIXIG',7.99,'Rénovationsmaison','../DB/Image_Produits/Rénovations maison/TRIXIG.avif','Ensemble de mèches, 20 pièces'),
('INVALLNING',29.99,'Rénovationsmaison','../DB/Image_Produits/Rénovations maison/INVALLNING.avif','Desserte, pour boîtes blanc, 68x39 cm (26 3/4x15 3/8 ")'),
('RULLEBÖR',39.99,'Rénovationsmaison','../DB/Image_Produits/Rénovations maison/RULLEBÖR.avif','Diable, noir'),
('ROTHULT',25.99,'Rénovationsmaison','../DB/Image_Produits/Rénovations maison/ROTHULT.avif','Verrou intelligent, blanc');





