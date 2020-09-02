-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 02 sep. 2020 à 07:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `randoapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `difficulty` char(30) NOT NULL,
  `distance` int(11) NOT NULL,
  `duration` time NOT NULL,
  `height_difference` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hiking`
--

INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES
(1, 'La montée au Piton des Neiges depuis le Bloc à Cilaos', 'difficile', 16, '08:00:00', 1730),
(2, 'Le Piton de la Fournaise depuis le Pas de Bellecombe ', 'moyen', 12, '05:00:00', 500),
(3, 'Une boucle vers Grand Bassin par Bois Court et le Sentier Mollaret', 'difficile', 14, '06:00:00', 1050),
(4, 'La cascade de Trois Roches par le Taïbit et Marla', 'difficile', 19, '08:30:00', 1800),
(5, 'Aurère par le Sentier Scout depuis le Bélier', 'difficile', 18, '06:30:00', 1200),
(6, 'Rando Charleroi', 'très facile', 1, '00:10:00', 25),
(7, 'rando charleroi 2', 'facile', 2, '00:24:00', 35),
(8, 'test3', 'très facile', 1, '00:01:00', 1),
(9, 'testmodifié', 'très facile', 1, '00:01:00', 1),
(10, 'remodif', 'très facile', 1, '00:01:00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
