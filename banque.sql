-- requete sql 

-- creation de la base de donnée
CREATE DATABASE gestion_banque;

-- creation des table 
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
)

CREATE TABLE `client` (
  `Id_client` int(11) NOT NULL,
  `Nom_client` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `N__de_telephone` varchar(20) NOT NULL,
  `adresse` text DEFAULT NULL
)


CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `RIB` varchar(30) NOT NULL,
  `Type_compte` enum('courant','?pargne') NOT NULL,
  `Solde_initial` double NOT NULL DEFAULT 0,
  `Id_client` int(11) NOT NULL
)



CREATE TABLE `contrat` (
  `id_contrat` int(11) NOT NULL,
  `type_de_contrat` enum('assurance vie','assurance habitation','cr?dit immobilier','cr?dit consommation','CEL') NOT NULL,
  `montant_souscrit` double NOT NULL,
  `duree` int(11) NOT NULL,
  `Id_client` int(11) NOT NULL
)