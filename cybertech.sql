-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 nov. 2023 à 11:16
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cybertech`
--

-- --------------------------------------------------------

--
-- Structure de la table `données`
--

DROP TABLE IF EXISTS `données`;
CREATE TABLE IF NOT EXISTS `données` (
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `données`
--

INSERT INTO `données` (`nom`, `prenom`, `email`, `message`) VALUES
('', 'Doe', 'j.doe@exemple.fr', ''),
('efef', 'bfbg', 'killianc142@gmail.com', 'sxsxcscs'),
('elyas', 'goueil', 'k.chenal@ecole-ipssi.net', 'tu es pas beau'),
('elyes', 'gouaiel ', 'ak@zmzd', 'efenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfefefenfef'),
('fbf', 'efe', 'killianc142@gmail.com', 'eded'),
('John', 'Doe', 'j.doe@exemple.fr', ''),
('kiki', 'ch', 'kiià', ''),
('killian', 'chenal', 'killianc142@gmail.com', ''),
('rfrfr', 'frfr', 'killianc142@gmail.com', 'rrf');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `ID_Produits` int NOT NULL AUTO_INCREMENT,
  `Nom_Produits` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_Produits`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID_Produits`, `Nom_Produits`, `Description`, `Prix`) VALUES
(1, 'Souris Gaming ', 'Souris Gaming Logitech', '120'),
(2, 'Pc MSI', 'MSI MAG Infinite S3 13NUC5-1013EU PC gamer Intel Core i5-13400F 16 Go SSD 1 To NVIDIA GeForce RTX 4060 8 Go Windows 11 Famille\r\n', '1399.95'),
(3, 'Clavier Gaming', 'Clavier Gaming Logitech ', '120');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`) VALUES
(1, 'jule', 'abcdef'),
(2, 'henry', 'padide');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
