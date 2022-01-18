-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 18 jan. 2022 à 14:28
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Nom_admin` varchar(30) NOT NULL,
  `Mot_de_passe` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Id`, `Nom_admin`, `Mot_de_passe`) VALUES
(1, 'Sandra', 'Villot'),
(2, 'Ibtissem', 'Khiri');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`Id`, `Nom`) VALUES
(2, 'Chambre'),
(3, 'Mobile home'),
(4, 'Maison');

-- --------------------------------------------------------

--
-- Structure de la table `hebergements`
--

CREATE TABLE `hebergements` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_categorie` int(10) DEFAULT NULL,
  `Intitule` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `Photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Nombre_de_couchages` int(10) UNSIGNED NOT NULL,
  `Nombre_de_salles_de_bain` int(10) UNSIGNED NOT NULL,
  `Emplacement_geographique` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Prix` int(10) UNSIGNED NOT NULL,
  `Disponibilite` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hebergements`
--

INSERT INTO `hebergements` (`Id`, `Id_categorie`, `Intitule`, `Description`, `Photo`, `Nombre_de_couchages`, `Nombre_de_salles_de_bain`, `Emplacement_geographique`, `Prix`, `Disponibilite`) VALUES
(2, NULL, 'correction ', 'hrgfhf', 'pexels-chait-goli-1918291.jpg', 1, 1, 'hhgh', 2, NULL),
(13, NULL, 'Photo', 'gdgsdg', 'large-home-389271__340.webp', 2, 1, 'gsdg', 3, 1),
(16, NULL, 'Marguerite', 'Jolie maison', 'maison.jpg', 5, 1, 'Savoie', 50, 1),
(19, NULL, 'Marguerite', 'dfhdfhdfh', 'pexels-chris-goodwin-32870 (1).jpg', 1, 1, 'Savoie', 50, 1),
(20, NULL, 'Marguerite', 'gsdgsdg', 'pexels-chris-goodwin-32870.jpg', 1, 1, 'Savoie', 50, 1),
(21, NULL, 'Marguerite', 'gsdgsdg', 'pexels-chris-goodwin-32870.jpg', 1, 1, 'Savoie', 50, 1),
(22, NULL, 'Marguerite', 'hdfhfdhdfh', 'pexels-chris-goodwin-32870 (1).jpg', 1, 1, 'Savoie', 50, 1),
(23, NULL, 'Marguerite', 'hdfhfdhdfh', 'pexels-chris-goodwin-32870 (1).jpg', 1, 1, 'Savoie', 50, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_clients`
--

CREATE TABLE `reservation_clients` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_hebergement` int(10) DEFAULT NULL,
  `arrivee` date NOT NULL,
  `depart` date NOT NULL,
  `adulte` int(10) UNSIGNED NOT NULL,
  `enfant` int(10) UNSIGNED NOT NULL,
  `titre` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `hebergements`
--
ALTER TABLE `hebergements`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `reservation_clients`
--
ALTER TABLE `reservation_clients`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `hebergements`
--
ALTER TABLE `hebergements`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `reservation_clients`
--
ALTER TABLE `reservation_clients`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
