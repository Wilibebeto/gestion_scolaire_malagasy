-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 03 fév. 2022 à 04:52
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `reserve`
--

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timed` time(6) NOT NULL,
  `timea` time(6) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reserve`
--

INSERT INTO `reserve` (`id`, `user_id`, `level`, `type`, `date`, `timed`, `timea`, `campus`, `status`) VALUES
(2, 1, 'M2', 'terrain Foot', '2022-01-29', '20:50:00.000000', '21:51:00.000000', 'Rose Hill', 1),
(3, 2, 'M2', 'terrain Foot', '2022-01-29', '20:50:00.000000', '21:51:00.000000', 'Pamplemousses', 1),
(4, 2, 'L3', 'terrain Foot', '2022-01-16', '17:52:00.000000', '23:56:00.000000', 'Rose Hill', 1),
(6, 4, 'L3', 'terrain Foot', '2022-01-18', '00:23:00.000000', '02:26:00.000000', 'Rose Hill', 2),
(7, 1, 'L3', 'Terrain de Basket', '2022-01-08', '12:52:00.000000', '12:52:00.000000', 'Rose Hill', 1),
(8, 5, 'L3', 'terrain Foot', '2022-01-20', '15:27:00.000000', '16:28:00.000000', 'Rose Hill', 1),
(10, 2, 'L3', 'Gymnase', '2022-01-28', '15:17:00.000000', '16:18:00.000000', 'Rose Hill', 2),
(11, 2, 'L3', 'terrain Foot', '2022-01-09', '14:18:00.000000', '16:17:00.000000', 'Rose Hill', 2),
(12, 2, 'L3', 'piscine', '2022-01-08', '18:20:00.000000', '16:20:00.000000', 'Rose Hill', 2),
(13, 2, 'L3', 'Terrain de Basket', '2022-01-16', '14:28:00.000000', '16:26:00.000000', 'Pamplemousses', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`, `role`) VALUES
(1, 'Jaci', 'Walder', 'andrinjah@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'admin'),
(2, 'Marotia', 'Dodson', 'marotia29@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'etudiant'),
(3, 'ANTOKINIAINA', 'Ronaldo', 'naly@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'admin'),
(4, 'NOMENJANAHARY', 'Tafita', 'tafita@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'admin'),
(5, 'NOMENJANAHARY', 'Odilon', 'contact@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'etudiant'),
(6, 'Moraintsoa', 'Renel', 'moraintsoa@gmail.com', 'e04dc6b1e4f9b37565e9e49185d3b5263b9fd5ac', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
