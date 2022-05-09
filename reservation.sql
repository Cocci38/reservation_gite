-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 09 mai 2022 à 09:34
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
(5, 'Villa'),
(6, 'Appartement');

-- --------------------------------------------------------

--
-- Structure de la table `hebergements`
--

CREATE TABLE `hebergements` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_categorie` int(10) DEFAULT NULL,
  `Intitule` varchar(10000) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Description` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `Nombre_de_couchages` int(10) UNSIGNED NOT NULL,
  `Nombre_de_salles_de_bain` int(10) UNSIGNED NOT NULL,
  `Emplacement_geographique` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Prix` int(10) UNSIGNED NOT NULL,
  `Disponibilite` tinyint(1) DEFAULT '1',
  `Nom1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Nom2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Nom3` varchar(100) NOT NULL,
  `Nom4` varchar(100) NOT NULL,
  `Nom5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hebergements`
--

INSERT INTO `hebergements` (`Id`, `Id_categorie`, `Intitule`, `Description`, `Nombre_de_couchages`, `Nombre_de_salles_de_bain`, `Emplacement_geographique`, `Prix`, `Disponibilite`, `Nom1`, `Nom2`, `Nom3`, `Nom4`, `Nom5`) VALUES
(76, 4, 'Chanteclair', 'Description : Maison individuelle rÃ©cente, de 70 m2, tout confort, trÃ¨s calme, charme, avec Ã©tage, jardin clos de 50 mÂ² plein sud, sans vis Ã  vis, proche des commerces.', 4, 1, 'IsÃ¨re', 60, 1, 'Chanteclair.jpg', 'hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg', 'jamie-haughton--ZQ7N4EnUas-unsplash.jpg', 'jeremy-bezanger-v4IJJu1Qa0U-unsplash.jpg', 'neonbrand-mGZX2MOPR-s-unsplash.jpg'),
(81, 3, 'Le chÃªne vert', 'Description : SituÃ© dans un Ã©crin de verdure , LE CHÃŠNE VERT vous propose la solution parfaite qui rÃ©pond Ã  vos besoins et Ã  vos attentes en terme de calme, sÃ©curitÃ© et verdure. Animaux et barbecue admis.', 2, 1, 'Savoie', 30, 1, 'chÃªne_vert - Copie.jpg', 'hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg', 'jamie-haughton--ZQ7N4EnUas-unsplash - Copie.jpg', 'jamie-haughton--ZQ7N4EnUas-unsplash.jpg', 'jeremy-bezanger-v4IJJu1Qa0U-unsplash.jpg'),
(84, 2, 'Bellevue', 'Maison individuelle rÃ©cente, de 70 m2, tout confort, trÃ¨s calme, charme, avec Ã©tage, jardin clos de 50 mÂ² plein sud, sans vis Ã  vis, proche des commerces.', 4, 1, 'IsÃ¨re', 60, 1, 'Bellevue.jpg', 'Esterel_piscine - Copie.jpg', 'Esterel_piscine.jpg', 'Esterel_salon - Copie.jpg', 'Esterel_salon.jpg'),
(89, 4, 'La chanterelle', 'En lisiÃ¨re de forÃªt, dans un environnement arborÃ© et fleuri, venez profiter d\'un sÃ©jour Ã  la campagne. A 5 km seulement, vous pourrez vous adonner Ã  diffÃ©rentes activitÃ©s, baignade (en Ã©tÃ©), pÃªche, marche, course Ã  pied ou VTT sur les sentiers cyclables. Lieu idÃ©al pour une grande balade en plein air!', 1, 1, 'IsÃ¨re', 30, 1, 'La chanterelle.jpg', 'Le penthouse.jpg', 'Le poulailler.jpg', 'Les_quatres_vents.jpg', 'quatres_vents.jpg'),
(92, 6, 'Le penthouse', 'Appartement qui se compose d\'un sÃ©jour Ã©quipÃ© d\'une table Ã  manger, d\'un lit gigogne et chambre en alcÃ´ve avec placards et un lit en 140 cm, d\'un coin-cuisine Ã©quipÃ©. Ainsi d\'une salle d\'eau avec WC.', 4, 1, 'IsÃ¨re', 80, 1, 'Le penthouse (2) - Copie.jpg', 'Le penthouse (2).jpg', 'Le penthouse (3) - Copie.jpg', 'Le penthouse (3).jpg', 'Le penthouse (4) - Copie.jpg'),
(93, 2, 'Le poulailler', 'Nous vous accueillons dans une maison de caractÃ¨re en campagne pour un sÃ©jour reposant et agrÃ©able. A 2 km des commerces et 35 km. Cette chambre d\'hÃ´tes peut accueillir 2 personnes avec 1 lit de 140 au premier Ã©tage. Vous trouverez tout le confort nÃ©cessaire Ã  votre sÃ©jour : salle de bain privative, WC. Terrasse, Cour, Salon de jardin, Jardin communs. Stationnement privÃ©. La maison se trouve Ã  proximitÃ© d\'une exploitation agricole. Beaucoup de loisirs et dâ€™activitÃ©s rendront votre sÃ©jour inoubliable.', 2, 1, 'Savoie', 30, 1, 'Le poulailler (2).jpg', 'Le poulailler (3).jpg', 'Le poulailler (4).jpg', 'Le poulailler (5).jpg', 'Le poulailler.jpg'),
(94, 5, 'Les quatre vents', 'Villa avec piscine pour 10 personnes. Quartier calme Ã  proximite du village, avec 6 velos adultes Ã  disposition. Connexion Internet illimitÃ© Piscine chauffÃ©e', 10, 1, 'DrÃ´me', 160, 1, 'Les_quatres_vents (2).jpg', 'Les_quatres_vents (3).jpg', 'Les_quatres_vents (4).jpg', 'Les_quatres_vents (5).jpg', 'Les_quatres_vents.jpg'),
(95, 5, 'L\'EstÃ©rel', 'Cette trÃ¨s agrÃ©able maison de vacances avec piscine vous attend Ã  2 km du centre historique dans un quartier trÃ¨s calme, offre un cadre idÃ©al pour un sÃ©jour en famille. A l\'intÃ©rieur, vous profiterez d\'un grand sÃ©jour lumineux, d\'une cuisine Ã©quipÃ©e donnant sur la terrasse et le jardin, de deux chambres modernes et spacieuses et d\'une grande salle de bain. Pour profiter du beau soleil du DrÃ´me, de nombreux espaces de vie vous attendent Ã  l\'extÃ©rieur. Une terrasse couverte avec barbecue ,le jardin est arborÃ© pour vous permettre de vous dÃ©tendre en toute quiÃ©tude, sans oublier la belle piscine . Cette charmante location de vacances avec piscine vous offre tout le confort nÃ©cessaire Ã  un sÃ©jour rÃ©ussi.', 6, 1, 'DrÃ´me', 140, 1, 'Esterel_facade (2).jpg', 'Esterel_facade (3).jpg', 'Esterel_facade (4).jpg', 'Esterel_facade (5).jpg', 'Esterel_facade.jpg');

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
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `hebergements`
--
ALTER TABLE `hebergements`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `reservation_clients`
--
ALTER TABLE `reservation_clients`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
