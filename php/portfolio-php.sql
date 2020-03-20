-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 mars 2020 à 22:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `php_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

DROP TABLE IF EXISTS `description`;
CREATE TABLE IF NOT EXISTS `description` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `texte` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `description`
--

INSERT INTO `description` (`id`, `texte`) VALUES
(1, 'Naomi : Apres un bachelor en design de mode, je poursuis mes etudes dans un DUT Metiers du Multimedia et de l\'Internet afin de me specialiser dans le domaine de la Fashion Tech.\r\n<br><br>\r\nElise : Etudiante en MMI, je suis interessee par les metiers du web, les jeux video et l\'audiovisuel. Je suis passionnee par les arts du spectacles et j\'aime le voyage.\r\n<br><br>\r\nJulien : Actuellement en DUT Metiers du Multimedia et de l\'Internet, je desire me specialiser dans le domaine des technologies a destination des parcs a themes.  ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$Ox7ZW96z73/1JMHaaCOR6Oer8V5n4F/1iOeAMzWw0GiD5BsNPBlFy');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id`, `title`, `description`) VALUES
(2, 'Human being', 'Does digital bring us closer together of our place as human beings? While there are many heated debates around this theme, we chose to explore it in a poetic manner so we can let everyone\'s thoughts wander freely.'),
(3, 'Petits pixels', 'Petits pixels est un jeu pour les enfants à l’école maternelle. Il constitue notre projet d’ISN afin de mettre à profit les compétences acquises au cours de l’année.  Nous avons choisi un jeu que nous avons renommé Petits pixels dont le principe est simple : deux grilles sont affichées, celle de gauche présente un motif et celle de droite a les mêmes dimensions mais est vide.\r\nIl faut reproduire le motif visible à gauche dans la grille de droite en cliquant dans les cases adéquates. Le but du projet est donc de recoder un jeu qui se doit d’être utilisable sur des supports qui ne sont plus obsolètes.'),
(1, 'Refonte Site - Jogging +', 'Durant une semaine, j\'ai pu lors d\'un travail de groupe, refaire le web design d\'un site internet. Nous devions choisir un site où des modifications étaient pertinentes, et de redessiner la charte graphique et l\'organisation du site. Notre choix s\'est arrêté sur le site Jogging +. Nous avons donc essayer de re-organiser le site sans trop perturber sa version de base pour ne pas perturber les utilisateurs habituels, mais surtout le re-designer pour le rendre plus attrayant pour les nouveaux visiteurs.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
