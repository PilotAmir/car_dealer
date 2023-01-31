-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 31 jan. 2023 à 19:08
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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci,
  `image_article` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`article_id`, `titre`, `commentaire`, `image_article`) VALUES
(15, 'Histoire de la BMW', '                              Lâ€™acronyme BMW signifie Bayerische Motoren Werke (fabrique de moteurs de BaviÃ¨re). BMW est nÃ©e en 1917 de lâ€™entreprise munichoise Rapp Motorenwerke. En 1920, elle est intÃ©grÃ©e Ã  Knorr-Bremse AG. En 1922, succÃ©dant aux Bayerische Flugzeugwerke AG, fondÃ©es en 1916, elle redevient Bayerische Motoren Werke AG. 1916 est donc lâ€™annÃ©e de fondation de BMW.\r\nLe siÃ¨ge principal de Rapp Motorenwerke Ã©tait Ã  Munich â€“ tout comme celui de la fabrique dâ€™avions de Gustav Otto, oÃ¹ les moteurs Ã©taient montÃ©s dans les appareils. En 1916, lâ€™entreprise Otto fait faillite, permettant aux Bayerische Flugzeugwerke AG (BFW) de voir le jour. Peu aprÃ¨s, en 1917, Rapp Motorenwerke dÃ©cide de sâ€™appeler Bayerische Motoren Werke GmbH. Lâ€™origine de BMW dans lâ€™entreprise Rapp se reconnaÃ®t aussi Ã  son logo.\r\nEn aoÃ»t 1918, les Bayerische Motoren Werke sont transformÃ©es en sociÃ©tÃ© par actions. La fin de la PremiÃ¨re Guerre mondiale met toutefois un terme Ã  la construction de moteurs pour avions. Le TraitÃ© de paix de Versailles interdit en effet Ã  lâ€™Allemagne ce type dâ€™activitÃ©s. BMW se spÃ©cialise alors dans les freins pour les chemins de fer. Le succÃ¨s est tel que la sociÃ©tÃ© berlinoise Knorr-Bremse AG prend la majoritÃ© de BMW en 1920. Elle lâ€™intÃ¨gre et la dÃ©place Ã  Munich. Les Bayerische Motoren Werke ne sont alors plus une entreprise autonome. Leur disparition ne sera toutefois que de courte durÃ©e.\r\n\r\n\r\n\r\n          ', './assets/img/IMG-63d8fc76241ba3.72118584.jpeg'),
(16, 'La Mercedes, voiture de boss??', '                    Lâ€™histoire de ce constructeur est plutÃ´t complexe.\r\nElle dÃ©bute avec un ingÃ©nieur allemand, Karl Benz. NÃ© le 25 novembre 1844, Benz commence sa vie professionnelle vers 1864 dans les chemins de fer. \r\n\r\nIl travaille ensuite pour diffÃ©rentes compagnies et Ã©choue dans une entreprise qui pique rapidement du nez, son associÃ© sâ€™avÃ©rant peu fiable. En 1871, une certaine Bertha, la fiancÃ©e de Karl, entre en scÃ¨ne et rachÃ¨te la part de lâ€™associÃ© douteux avec sa dot. \r\n\r\nLes affaires sâ€™amÃ©liorent et nos deux tourtereaux se marient le 20 juillet 1872.\r\n\r\nVers la fin des annÃ©es 1930, le gouvernement allemand interdit Ã  Daimler-Benz la production des voitures particuliÃ¨res. DÃ©sormais et jusquâ€™Ã  la fin de la Seconde guerre mondiale, la compagnie ne produira que des camions pour les forces armÃ©es allemandes. ConsÃ©quence, ses usines sont bombardÃ©es Ã  maintes reprises.\r\n\r\nLa production reprend aprÃ¨s la guerre et vers la fin des annÃ©es 1950, Daimler-Benz AG, possÃ¨de dÃ©jÃ  un grand nombre dâ€™usines en Allemagne et dans une vingtaine dâ€™autres pays. Ã€ lâ€™Ã©poque, prÃ¨s de 75% des exportations de camions allemands est reprÃ©sentÃ© par Mercedes-Benz.          ', './assets/img/IMG-63d94a6eb57211.19437401.jpg'),
(17, 'Lamborghini et Bling-Bling', '                    Lâ€™histoire du constructeur automobile Lamborghini dÃ©bute en 1963 Ã  Sant â€˜Agata Bolognese en Italie. Sa spÃ©cialitÃ© Ã©tait la fabrication de tracteurs agricoles.\r\n\r\nDans le but de performer que les Ferrari et Maserati, son crÃ©ateur Ferruccio Lamborghini dÃ©cide de se lancer dans la construction des voitures sportives de prestige. Ainsi en 1963, il ouvre la firme Automobili Ferruccio Lamborghini.\r\n\r\nLe premier modÃ¨le Lamborghini qui vit le jour est le chef-dâ€™Å“uvre 350 GTV dotÃ© de 12 cylindres en V.\r\nIl est produit Ã  120 exemplaires. Il connaitra un franc succÃ¨s. Le modÃ¨le suivant est la 400 GT 2 +2 Ã  quatre places, dont 273 exemplaires sortirent de lâ€™usine.\r\n\r\nLes modÃ¨les de voitures conÃ§us par Lamborghini combinent design dâ€™exception et ingÃ©niositÃ©.\r\nGrÃ¢ce Ã  la technologie de pointe utilisÃ©e, elle signe dâ€™autres voitures sportives telles que la Miura conÃ§ue entre 1966 et 1973. Cette derniÃ¨re constitue le premier modÃ¨le de sÃ©rie et de route Ã  dÃ©passer les 300 km/h.\r\n\r\nLa nouvelle gÃ©nÃ©ration de Lamborghini est trÃ¨s variÃ©e et performante.\r\nEn 2014, lâ€™entreprise prÃ©sente la HuracÃ¡n dotÃ©e dâ€™un moteur de 610 chevaux. Plusieurs autres modÃ¨les suivront et seront encore plus puissants et amÃ©liorÃ©s. De nos jours, Lamborghini demeure une marque prestigieuse dâ€™automobiles sportives qui continue de construire son histoire. \r\n', './assets/img/IMG-63d8f687366fe1.89471971.jpg'),
(18, 'Les Quatres Anneaux', '                                                  Le 16 juillet 1909 August Horch crÃ©e sa sociÃ©tÃ© automobile mais ne peut reprendre son nom car un constructeur lâ€™utilise dÃ©jÃ  en Allemagne.\r\n\r\nIl dÃ©cide donc de lui donner comme nom la traduction latine de celui-ci : Audi, qui signifie Â« Ã©coutez Â» et se nomme donc Audi Automobilwerke GmbH.\r\n\r\nQuelques annÃ©es plus tard, lâ€™entreprise connaÃ®t des difficultÃ©s financiÃ¨res qui lâ€™obligent Ã  fusionner en 1932 avec trois autres marques automobiles allemandes, DKW,HORCH et WANDERER.\r\n\r\nLa nouvelle entitÃ© dÃ©nommÃ©e Auto Union est reprÃ©sentÃ©e par quatre anneaux, symbole de lâ€™union entre ces 4 constructeurs. Chacune des marques prend un segment de marchÃ© et Audi se voit attribuer le crÃ©neau de la voiture de luxe et du haut de gamme. Lâ€™identitÃ© visuelle des 4 anneaux est conservÃ©e aujourdâ€™hui encore par Audi. \r\n\r\nEn 1964 Volkswagen rachÃ¨te Auto-Union et ressuscite le nom Audi. Ce nâ€™est quâ€™Ã  partir des annÃ©es 1970, sous lâ€™impulsion de Ferdinand PiÃ«ch (petit-fils de Ferdinand Porsche, le fondateur de Volkswagen), quâ€™Audi rencontre lâ€™essor quâ€™on lui connaÃ®t aujourdâ€™hui.\r\n\r\nIl donne lâ€™impulsion initiale Ã  la marque Audi avec de nouveaux moteurs, de nouvelles carrosseries et surtout la transmission Quattro.\r\n\r\nDes voitures haut de gamme pour le constructeur allemand.\r\n                       ', './assets/img/IMG-63d94a4ecf90f4.95238002.jpg');

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
(2, 'aboukhedoud', 'amir', 'amiraboukhedoud@gmail.com', 4141, 'ppp', '$2y$10$LIr9Hi5PrghPZ9mZel.APOJ0k/ckEvCcn1brTcJEqxhgFYzTl2M7m');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `client_reserv` int(11) DEFAULT NULL,
  `voiture_reserv` int(11) DEFAULT NULL,
  `date_de_reservation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pack_reserver` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(38, 'bmw', 'X6', 'Beige', 25000, './assets/img/IMG-63d8eb356b3150.56229014.jpeg'),
(39, 'lamborghini', 'Cabriolet', 'Beige', 75000, './assets/img/IMG-63d8eb7a440752.10535872.jpg'),
(40, 'audi', 'A-800', 'White', 55000, './assets/img/IMG-63d8ebceb88ff8.77278145.jpg'),
(41, 'mercedes', 'Benz', 'Simpliste', 50000, './assets/img/IMG-63d8ebfe1e83a7.59031049.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `client_reserv` (`client_reserv`,`voiture_reserv`),
  ADD KEY `voiture_reserv` (`voiture_reserv`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`voiture_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `voiture_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`client_reserv`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`voiture_reserv`) REFERENCES `voiture` (`voiture_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
