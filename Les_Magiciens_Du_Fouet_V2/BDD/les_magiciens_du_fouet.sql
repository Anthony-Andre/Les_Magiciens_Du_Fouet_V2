-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 fév. 2022 à 08:26
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `les_magiciens_du_fouet`
--

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE `chef` (
  `chefID` int(11) NOT NULL,
  `nomDuChef` varchar(30) NOT NULL,
  `prenomDuChef` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`chefID`, `nomDuChef`, `prenomDuChef`) VALUES
(1, 'CHEBEST', 'Ed'),
(2, 'COTESDEPORC', 'Yves'),
(3, 'REBLOCHON', 'Joël'),
(4, 'THÉ', 'Maï'),
(5, 'COFFRE', 'Jean-Pierre'),
(6, 'LA ROSE', 'Hélène');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `recetteID` int(11) NOT NULL,
  `nomRecette` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `duree` int(11) NOT NULL,
  `cout` int(11) NOT NULL,
  `difficulte` int(11) NOT NULL,
  `etapes` text NOT NULL,
  `nombreLike` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`recetteID`, `nomRecette`, `description`, `duree`, `cout`, `difficulte`, `etapes`, `nombreLike`) VALUES
(1, 'Pâtes aux pesto', 'Ceci est la description de la premiere recette', 105, 2, 4, 'et là ce sont les étapes de la première recette', 0),
(2, 'pizza ', 'c\'est la description de la deuxième recette', 0, 1, 2, 'C\'est les étapes de la deuxième recette', 0),
(3, 'Croque-monsieur', 'C\'est la description de la troisième recete', 120, 4, 3, 'Ce sont les étapes de la troisième recette', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`chefID`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`recetteID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chef`
--
ALTER TABLE `chef`
  MODIFY `chefID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `recetteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
