CREATE DATABASE briefphpandjs ;
CREATE TABLE inscription (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email varchar(200),
    password VARCHAR(100),
    phone VARCHAR (20),
    role VARCHAR(100)
 );
CREATE Table art(
 id int PRIMARY KEY AUTO_INCREMENT,
 artisant VARCHAR(50),
 age int,
 metier VARCHAR(200),
 local VARCHAR(255)
);

 CREATE Table categories (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
 );


 CREATE Table produit (
     id int PRIMARY KEY AUTO_INCREMENT,
    nom_produit VARCHAR(20),
    prix_fixe VARCHAR(200),    
    remise VARCHAR(20),
    categories_id int,
    Foreign Key (categories_id) REFERENCES categories(id) on DELETE CASCADE on UPDATE CASCADE
 );
  
CREATE TABLE Vente(
   id int PRIMARY KEY AUTO_INCREMENT,
   categories_id int,
   produit_id int,
   Foreign Key (categories_id) REFERENCES categories(id) on DELETE CASCADE on UPDATE CASCADE
   Foreign Key ( produit_id) REFERENCES  produit(id) on DELETE CASCADE on UPDATE CASCADE
);

 SELECT produit.*,categories.nom 
 FROM produit 
 INNER JOIN categories 
 WHERE categories.id = produit.categories_id;


