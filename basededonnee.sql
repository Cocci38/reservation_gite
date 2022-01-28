-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 28 jan. 2022 à 11:43
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
(4, 'Maison'),
(5, 'Villa');

-- --------------------------------------------------------

--
-- Structure de la table `hebergements`
--

CREATE TABLE `hebergements` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_categorie` int(10) DEFAULT NULL,
  `Intitule` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `Nombre_de_couchages` int(10) UNSIGNED NOT NULL,
  `Nombre_de_salles_de_bain` int(10) UNSIGNED NOT NULL,
  `Emplacement_geographique` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Prix` int(10) UNSIGNED NOT NULL,
  `Disponibilite` tinyint(1) DEFAULT '1',
  `Nom1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Nom2` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Nom3` varchar(60) NOT NULL,
  `Nom4` varchar(60) NOT NULL,
  `Nom5` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hebergements`
--

INSERT INTO `hebergements` (`Id`, `Id_categorie`, `Intitule`, `Description`, `Nombre_de_couchages`, `Nombre_de_salles_de_bain`, `Emplacement_geographique`, `Prix`, `Disponibilite`, `Nom1`, `Nom2`, `Nom3`, `Nom4`, `Nom5`) VALUES
(35, 2, 'Bellevue modifier', 'Essaie', 1, 1, 'Savoie', 50, 2, '', '', '', '', ''),
(66, 4, 'Le Silex', 'Endroit convivial et spacieux', 4, 1, 'Isere', 60, 2, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(67, 2, 'Marguerite', 'TrÃ¨s confortable', 1, 1, 'Chambery', 80, 2, 'large-home-389271_1280.jpg', 'Le poulailler.jpg', 'Lesterel.jpg', 'quatres_vents.jpg', 'to-travel-1677347_1920.jpg'),
(68, 4, 'Treserve', 'Endroit trÃ¨s chalereux', 3, 1, 'Chambery', 80, 1, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(69, 2, 'Chantemerle', 'gegezgezgeege', 3, 1, 'Isere', 80, 1, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(70, 4, 'Les Frondaisions', 'vsdvsdsdbvsdb', 3, 1, 'Savoie', 70, 1, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(71, 3, 'Le soleil', 'hfdhfddfhdf', 1, 1, 'Albertville', 50, 1, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_hebergement` int(10) DEFAULT NULL,
  `Nom1` varchar(30) NOT NULL,
  `Nom2` varchar(30) NOT NULL,
  `Nom3` varchar(30) NOT NULL,
  `Nom4` varchar(30) NOT NULL,
  `Nom5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`Id`, `Id_hebergement`, `Nom1`, `Nom2`, `Nom3`, `Nom4`, `Nom5`) VALUES
(15, NULL, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(16, NULL, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(17, NULL, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg'),
(18, NULL, 'bedroom-6577523_1920.jpg', 'house-1477041_1280.jpg', 'La chanterelle.jpg', 'large-home-389271_1280.jpg', 'Le poulailler.jpg');

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
  `mail` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_clients`
--

INSERT INTO `reservation_clients` (`Id`, `Id_hebergement`, `arrivee`, `depart`, `adulte`, `enfant`, `titre`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `mail`) VALUES
(74, 40, '2022-01-28', '2022-01-30', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(75, 35, '2022-01-29', '2022-02-06', 2, 4, 'Mme', 'Durand', 'Alice', '56 rue du chemin', '73000', 'Chambery', 'France', '0600000000', 'ibtissemkhiri.simplon@gmail.com'),
(76, 35, '2022-01-29', '2022-02-06', 2, 4, 'Mme', 'Durand', 'Alice', '56 rue du chemin', '73000', 'Chambery', 'France', '0600000000', 'ibtissemkhiri.simplon@gmail.com'),
(77, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(78, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(79, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(80, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(81, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(82, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(83, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(84, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(85, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(86, 35, '2022-01-29', '2022-01-29', 2, 4, 'Mme', 'Insertion', 'Test', '65 Rue de la Fontaine', '73100', 'Aix Les Bains', 'France', '0668547852', 'semsem73@hotmail.fr'),
(87, 35, '2022-01-29', '2022-01-30', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(88, 35, '2022-01-29', '2022-01-30', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(89, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(90, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(91, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(92, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(93, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(94, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(95, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(96, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(97, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(98, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(99, 35, '2022-01-28', '2022-02-05', 2, 1, 'Mme', 'Test', 'Insertion 2', '56 Rue la Guillotiere', '73000', 'ChambÃ©ry', 'France', '0600000000', 'mail@gmail.com'),
(100, 66, '2022-01-26', '2022-01-30', 2, 4, 'Mr', 'Martin', 'Eric', '24 Avenue Daniel Rops', '73000', 'ChambÃ©ry', 'France', '0600000000', 'ibtissemkhiri.simplon@gmail.com'),
(101, 67, '2022-02-02', '2022-01-30', 5, 4, 'Mme', 'Test', 'deId', '143 Rue Pierre', '73000', 'ChambÃ©ry', 'France', '0600000000', 'semsem73@hotmail.fr'),
(102, 67, '2022-02-02', '2022-01-30', 5, 4, 'Mme', 'Test', 'deId', '143 Rue Pierre', '73000', 'ChambÃ©ry', 'France', '0600000000', 'semsem73@hotmail.fr');

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
-- Index pour la table `images`
--
ALTER TABLE `images`
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
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `hebergements`
--
ALTER TABLE `hebergements`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `reservation_clients`
--
ALTER TABLE `reservation_clients`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
