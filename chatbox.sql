-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 nov. 2017 à 07:59
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chatbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `text`, `time`, `id_user`) VALUES
(1, 'bonjour je suis Valerie', '2017-11-13 10:39:25', 1),
(2, 'bonjour je suis Doe, John Doe', '2017-11-13 10:44:16', 25),
(4, 'test', '2017-11-14 14:27:40', 1),
(17, 'hello world\r\n', '2017-11-14 15:04:46', 25),
(18, 'hello\r\n', '2017-11-14 15:05:26', 25),
(19, 'Hello je m\'appelle Valerian, j\'ai 24 ans et Ã§a fait deux jours que j\'ai arrÃªtÃ© de boire\r\n', '2017-11-14 15:10:30', 27),
(25, 'hellowwwwww', '2017-11-14 18:38:54', 1),
(26, 'yooooow', '2017-11-14 19:46:04', 28),
(34, 'PLOP', '2017-11-15 00:32:00', 28);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `sexe`) VALUES
(1, 'Valerie', '123', 'F'),
(25, 'jon', '123', 'M'),
(26, 'jondouze', 'Looooooool6', 'M'),
(27, 'Valerian', 'Loooooooooool1', 'M'),
(28, 'jontreize', '123456', 'M');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
