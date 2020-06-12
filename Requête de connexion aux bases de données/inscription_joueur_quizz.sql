-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 juin 2020 à 03:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inscription_joueur_quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions_joueur`
--

DROP TABLE IF EXISTS `inscriptions_joueur`;
CREATE TABLE IF NOT EXISTS `inscriptions_joueur` (
  `id_joueur` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` varchar(15) NOT NULL,
  PRIMARY KEY (`id_joueur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscriptions_joueur`
--

INSERT INTO `inscriptions_joueur` (`id_joueur`, `prenom`, `nom`, `login`, `password`, `profil`) VALUES
(2, 'Ousmane', 'Djigo', 'Ouz', '2222', 'joueur'),
(3, 'Daye', 'Diop', 'Nicky', '1111', 'joueur'),
(4, 'Ousmane', 'Djigo', 'Ouz', '2222', 'joueur'),
(5, 'Pape', 'DIAW', 'papis', '6666', 'joueur'),
(10, 'Abdel', 'KADER', 'Kads', '1212', 'joueur'),
(9, 'Laye', 'NDIAYE', 'La', '1234', 'joueur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
