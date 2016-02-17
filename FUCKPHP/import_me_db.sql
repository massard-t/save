SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE USER 'bob'@'localhost' IDENTIFIED BY 'lucas';
GRANT ALL PRIVILEGES ON segfault_massar_t.* TO 'bob'@'localhost' WITH GRANT OPTION;
SET PASSWORD FOR 'bob'@'localhost' = PASSWORD('224499');
CREATE DATABASE IF NOT EXISTS segfault_massar_t CHARACTER
SET utf8;

USE segfault_massar_t;

SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE IF NOT EXISTS `Categories` (
  `ID` int(11) NOT NULL,
  `Libelle` text,
  `Description` text,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Categories` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'Produits recents', 'Cette categories contient les elements recents', '2015-11-17', '2015-11-17'),
(2, 'Produits favoris', 'Cette categories contient les elements favoris', '2015-11-18', '2015-11-18'),
(3, 'Basics', 'Les produits de base', '2015-11-05', '0215-11-10'),
(4, 'Packs', 'Les differents packs de produits', '2015-11-07', '0215-11-10'),
(5, '42', 'Cette categories contient les produits qui n''existent toujours pas', '2442-04-20', '2442-04-20');

CREATE TABLE IF NOT EXISTS `Categorie_Produit` (
  `ID_categorie` int(11) NOT NULL,
  `ID_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Categorie_Produit` (`ID_categorie`, `ID_produit`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(2, 8),
(2, 9),
(1, 10),
(1, 11);

CREATE TABLE IF NOT EXISTS `Commentaires` (
  `ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL,
  `user` varchar(255) NOT NULL,
  `ID_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Commentaires` (`ID`, `comment`, `time`, `user`, `ID_produit`) VALUES
(6, 'test\r\n&lt;script&gt;\r\nalert(&quot;yo&quot;);\r\n&lt;/script&gt;', '2015-12-02 06:17:10', 'Brocham', 15),
(7, 'COucou', '2015-12-02 06:17:46', 'Brocham', 15),
(8, 'test', '2015-12-02 06:18:48', 'Brocham', 11),
(9, 'test2', '2015-12-02 05:19:12', 'Brocham', 11),
(10, 'treste', '2015-12-02 06:20:32', 'Brocham', 15),
(11, 'test2', '2015-12-02 05:25:19', 'Brocham', 11),
(12, 'coucou', '2015-12-02 06:29:46', 'Brocham', 15),
(0, 'test2', '2015-12-02 09:42:14', '', 11);

CREATE TABLE IF NOT EXISTS `Conversations` (
`ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Sujet` text NOT NULL,
  `Mail` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `Conversations` (`ID`, `ID_user`, `Sujet`, `Mail`) VALUES
(3, 5, 'Lucas', ''),
(4, 2, 'Test', 'lucaspointurier@gmail.com');

CREATE TABLE IF NOT EXISTS `Produits` (
  `ID` int(11) NOT NULL,
  `Libelle` text,
  `Description` text,
  `Prix_achat` float DEFAULT NULL,
  `Prix_vente` float DEFAULT NULL,
  `Nombres_produit` int(11) DEFAULT NULL,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Produits` (`ID`, `Libelle`, `Description`, `Prix_achat`, `Prix_vente`, `Nombres_produit`, `Date_creation`, `Date_modification`) VALUES
(1, 'mail', 'Thunder Sparrow', 0.5, 2, 250, '2015-11-11', '2015-11-12'),
(2, 'database', 'My SegSQL', 0.8, 1.2, 120, '2015-11-12', '2015-11-12'),
(3, 'pics', 'Well Shot', 1, 1.8, 56, '2015-11-07', '2015-11-12'),
(4, 'music', 'Music Player', 1.2, 1.5, 110, '2015-11-03', '2015-11-12'),
(5, 'text', 'SegEditor', 0.8, 1.5, 42, '2015-11-04', '2015-11-12'),
(6, 'code', 'CodeFault', 0.5, 1.6, 100, '2015-11-04', '2015-11-12'),
(7, 'storage', 'MadUSB', 0.9, 1.5, 90, '2015-11-08', '2015-11-12'),
(8, 'zip', 'SegZipper', 1.4, 1.6, 14, '2015-11-11', '2015-11-12'),
(9, 'driver', 'Driver Corrector', 0.8, 1.4, 165, '2015-11-07', '2015-11-12'),
(10, 'monitor', 'Network monitor', 0.7, 1.8, 42, '2015-11-11', '2015-11-12'),
(11, 'internet', 'SegInternet', 1, 1.9, 198, '2015-11-08', '2015-11-12'),
(12, 'reader', 'PDF Segreader', 0.5, 0.9, 123, '2015-11-04', '2015-11-12'),
(13, 'camera', 'Segcam', 0.9, 1.1, 19, '2015-11-09', '2015-11-12'),
(14, 'firewall', 'SegProtector', 1.4, 1.9, 239, '2015-11-09', '2015-11-12'),
(15, 'premium', 'Become Premium', 1.8, 2, 10000, '0000-00-00', '2015-11-12'),
(0, 'dew', 'few', 10, 10, NULL, '2015-12-03', '2015-12-03'),
(0, 'dew', 'few', 10, 10, NULL, '2015-12-03', '2015-12-03'),
(0, 'dew', 'few', 10, 10, NULL, '2015-12-03', '2015-12-03'),
(0, '', '', 0, 0, NULL, '2015-12-03', '2015-12-03');

CREATE TABLE IF NOT EXISTS `Produit_Utilisateur` (
  `ID` int(11) NOT NULL,
  `ID_utilisateur` int(11) NOT NULL,
  `ID_produit` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Produit_Utilisateur` (`ID`, `ID_utilisateur`, `ID_produit`, `Quantity`) VALUES
(2, 8, 10, 1),
(3, 7, 9, 1),
(0, 5, 15, 10);

CREATE TABLE IF NOT EXISTS `Roles` (
  `ID` int(11) NOT NULL,
  `Libelle` text,
  `Description` text,
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Roles` (`ID`, `Libelle`, `Description`, `Date_creation`, `Date_modification`) VALUES
(1, 'admin', 'Administrateur du segfault', '2015-11-01', '2015-11-01'),
(2, 'client', 'Client de SegfaultCorp', '2015-11-01', '2015-11-01'),
(3, 'premium', 'Client premium de SegfaultCorp', '2015-11-01', '2015-11-01'),
(4, 'employé', 'Employé SegfaultCorp', '2015-11-01', '2015-11-01');

CREATE TABLE IF NOT EXISTS `Tickets` (
`ID` int(11) NOT NULL,
  `State` int(11) NOT NULL DEFAULT '1',
  `ID_user` int(11) NOT NULL,
  `ID_conversation` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `Tickets` (`ID`, `State`, `ID_user`, `ID_conversation`, `Message`) VALUES
(7, 0, 5, 3, 'Test Coucou'),
(8, 0, 5, 3, 'Test'),
(9, 0, 2, 4, 'Test'),
(10, 0, 2, 4, 'dad'),
(11, 0, 2, 4, 'deqwddwqdawad'),
(12, 0, 2, 4, 'fdwelfpef'),
(13, 0, 5, 3, 'teefwsf'),
(14, 0, 5, 3, 'reqw'),
(15, 0, 5, 3, '52'),
(16, 0, 5, 3, '52'),
(17, 0, 2, 3, '52'),
(18, 1, 2, 3, '52');

CREATE TABLE IF NOT EXISTS `Utilisateurs` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Passwd` varchar(255) DEFAULT NULL,
  `Date_de_naissance` varchar(255) DEFAULT NULL,
  `Ville` varchar(255) DEFAULT NULL,
  `Adresse` text,
  `Code_postale` int(11) DEFAULT NULL,
  `Pays` varchar(255) DEFAULT NULL,
  `Sexe` varchar(255) DEFAULT NULL,
  `Roles` int(11) DEFAULT '0',
  `Date_creation` date DEFAULT NULL,
  `Date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Utilisateurs` (`ID`, `Nom`, `Prenom`, `Email`, `Passwd`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `Sexe`, `Roles`, `Date_creation`, `Date_modification`) VALUES
(1, 'Massard', 'Theo', 'massar_t@etna-alternance.net', '123123', '1997-01-23', 'Sartrouville', '81 Avenue Tobrouk', 78500, 'France', 'homme', 1, '2015-11-03', '2015-11-15'),
(2, 'Pointurier', 'Lucas', 'bob@etna-alternance.net', '123123', '1996-11-18', 'Boissy St-yon', '6ter chemin du Procès', 91085, 'France', 'homme', 1, '2015-11-03', '2015-11-16'),
(3, 'Merguez', 'Jean-Patouche', 'jpmerguez@moi.com', '123123', '1987-07-22', 'Caen', '7 Rue des Martyrs', 14118, 'France', 'homme', 0, '2015-11-07', '2015-11-10'),
(4, 'Lordoer', 'Bob', 'Lord_Bob@god.com', '123123', '1990-10-02', 'Paris', '10 rue Leon Cognet', 75017, 'France', 'homme', 0, '2015-11-10', '2015-11-10'),
(5, 'Brocham', 'Karl', 'kbpersos@hotmail.com', '123123', '1975-11-30', 'New York', '28 18th Avenue', 10011, 'United States of America', 'homme', 0, '2015-11-12', '2015-11-13'),
(6, 'Mort', 'Volde', 'the_unnamed_one@hp.net', '123123', '1960-09-10', 'Strasbourg', '2 Place du marché', 67482, 'France', 'femme', 0, '2015-11-17', '2015-11-17'),
(9, 'Pered-Lecodel', 'Pierre', 'test@test.com', '123123', '1977-03-29', 'Paris', '23 Avenue de Saint-Ouen', 75017, 'France', 'homme', 0, '2015-11-09', '2015-11-09'),
(10, 'Crabache', 'Elodie', 'Eloooo12@die.fr', '123123', '1997-11-19', 'Paris', '14 rue de Saussure', 75017, 'France', 'femme', 0, '2015-11-11', '2015-11-15');


ALTER TABLE `Conversations`
 ADD PRIMARY KEY (`ID`);

ALTER TABLE `Tickets`
 ADD PRIMARY KEY (`ID`);


ALTER TABLE `Conversations`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
ALTER TABLE `Tickets`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
