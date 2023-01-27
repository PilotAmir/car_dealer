-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 23 jan. 2023 à 13:20
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
-- Base de données : `car_dealer`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `identifiant` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` text COLLATE utf8mb4_unicode_ci,
  `email_admin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `identifiant`, `mdp`, `email_admin`) VALUES
(2, 'admin', '123', 'amiraboukhedoud@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `identifiant` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `nom`, `prenom`, `email`, `tel`, `identifiant`, `mdp`) VALUES
(1, 'aboukhedoud', 'amir', 'amir@gmail.com', 44, NULL, NULL),
(2, 'aboukhedoud', 'amir', 'amiraboukhedoud@gmail.com', 4141, 'ppp', '$2y$10$LIr9Hi5PrghPZ9mZel.APOJ0k/ckEvCcn1brTcJEqxhgFYzTl2M7m'),
(3, 'aboukhedoud', 'amir', 'amiraboukhedoud@gmail.com', 4141, 'ppp', '$2y$10$rSDiQMM08J5ne4OYkDXPDeX4hfb1ILFegqdtJZqQvTgbLiIie1Tri'),
(4, 'aboukhedoud', 'amir', 'amiraboukhedoud@gmail.com', 4141, 'ppp', '$2y$10$zFEWOVc4Cn6jbhHkeKCw.OYgXVBCWiAlqhsuKSGw2f96ZyjXTrHnm'),
(5, 'aboukhedoud', 'amir', 'amir@gmail.com', 4444, 'aamir', '$2y$10$ewYAaqjhFmrd8iOeNw9d..2KzvJbphT3L7NRk9DlqEJQXIYNs5Pay'),
(6, 'a', 'a', 'amir@gmail.com', 22, 'a', '$2y$10$6BGbgOlX7fsv/LpCRR.QCuK6q0tjFrDJLAla6/m3Sf4mGcLyDB/Q.'),
(7, 'z', 'z', 'z@g', 5, 'z', '$2y$10$J0eltsDq7rvmhYccKxCy5O/x/QlJYrW5u/tWus1bgCihdVxekK/iu');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `commande_id` int(250) NOT NULL,
  `voiture_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date_commande` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nav_links`
--

CREATE TABLE `nav_links` (
  `id` int(11) NOT NULL,
  `links_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_goto` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_target` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `voiture_id` int(250) NOT NULL,
  `voiture_brand` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voiture_model` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voiture_color` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voiture_price` int(250) DEFAULT NULL,
  `images_voitures` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`voiture_id`, `voiture_brand`, `voiture_model`, `voiture_color`, `voiture_price`, `images_voitures`) VALUES
(11, 'zdz', 'erge', 'gerg', 10, './assets/img/IMG-63c6e30c782ad2.08521670.png'),
(12, 'fgfg', 'gdfgdgf', 'gf', 20, './assets/img/IMG-63c6e526320eb3.91452144.png'),
(13, 'merco', 'c300', 'rouge', 500000, './assets/img/IMG-63c7be734c0059.17819700.png'),
(14, 'd', 's', 's', 1, './assets/img/IMG-63c8561af17121.81322908.png');

-- --------------------------------------------------------

--
-- Structure de la table `voiture_commander`
--

CREATE TABLE `voiture_commander` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `voiture_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voiture_reserver`
--

CREATE TABLE `voiture_reserver` (
  `id` int(11) NOT NULL,
  `voiture_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`commande_id`);

--
-- Index pour la table `nav_links`
--
ALTER TABLE `nav_links`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`voiture_id`);

--
-- Index pour la table `voiture_commander`
--
ALTER TABLE `voiture_commander`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture_reserver`
--
ALTER TABLE `voiture_reserver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `commande_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nav_links`
--
ALTER TABLE `nav_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `voiture_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `voiture_commander`
--
ALTER TABLE `voiture_commander`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voiture_reserver`
--
ALTER TABLE `voiture_reserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
