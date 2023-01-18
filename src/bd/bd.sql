-- Création de la table
CREATE TABLE utilisateur (
    id_utilisateur int NOT NULL AUTO_INCREMENT,
    nom varchar(255), 
    prenom varchar(255), 
    email varchar(255), 
    motdepasse varchar(255),
    PRIMARY KEY (id_utilisateur)
    );

-- Remplissage de la table
INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Richard", "Valentin", "Admin", "adminmdp");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Mary Huet de Barochez", "Andrew", "andrew.mhdb@gmail.com", "AMHDB");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Takahashi", "Vincent", "vincent.ta@gmail.com", "VincentTa");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Paulin", "Maxime", "max.paulin@gmail.com", "MaximePau");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Dasseux", "Damien", "dasseux.dam@gmail.com", "DasseuxDam");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Malacane", "Etienne", "malacarne.eti@gmail.com", "MalacarneEti");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Riss", "Ryan", "ryan.riss@gmail.com", "RyanRiss");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Gonay", "Arthur", "arthur.gonay@gmail.com", "RoiArthur");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Bouchard", "Gaetan", "gaetan.bouhard@gmail.com", "GB");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("Boughanmi", "Rami", "rami.bou@gmail.com", "RamiBou");

INSERT INTO utilisateur (nom, prenom, email, motdepasse)
VALUES ("O'nyme", "Anne", "mme.onyme@gmail.com", "anonymous");


