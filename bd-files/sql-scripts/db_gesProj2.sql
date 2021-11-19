-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 15 oct. 2021 à 11:11
-- Version du serveur :  5.7.11
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS db_gesproj2;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gesproj2`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

CREATE TABLE `t_client` (
  `idClient` int(11) NOT NULL,
  `cliNom` varchar(50) NOT NULL,
  `cliPrenom` varchar(50) NOT NULL,
  `cliNumTel` varchar(20) NOT NULL,
  `cliLocalite` varchar(50) NOT NULL,
  `cliCp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_client`
--

INSERT INTO `t_client` (`idClient`, `cliNom`, `cliPrenom`, `cliNumTel`, `cliLocalite`, `cliCp`) VALUES
(1, 'Acevedo', 'Daryl', '16220609 2831', 'Hudson\'s Hope', 26867),
(2, 'Ross', 'Leo', '16750313 0572', 'Arrone', 23911),
(3, 'Dodson', 'Eden', '16910112 9469', 'Chimbarongo', 62977),
(4, 'Curtis', 'Anika', '16271221 3764', 'Langenhagen', 23797),
(5, 'Blankenship', 'Colin', '16040723 9078', 'New Orleans', 7610),
(6, 'Witt', 'Talon', '16060208 0301', 'Daska', 94149),
(7, 'Meyers', 'Grant', '16861015 1949', 'Ligny', 77261),
(8, 'Odom', 'Olympia', '16140817 7820', 'Weisenfels', 34681),
(9, 'Hood', 'Stone', '16921228 1050', 'Norman', 56794),
(10, 'Gomez', 'Patrick', '16910905 4693', 'Pilibhit', 20467),
(11, 'Hurst', 'Walter', '16540515 8279', 'Straubing', 45016),
(12, 'Kirkland', 'Octavia', '16910105 8130', 'Buguma', 28228),
(13, 'Lancaster', 'Kelly', '16381103 2857', 'Neerrepen', 91646),
(14, 'Herman', 'Baker', '16840823 1333', 'Medea', 23377),
(15, 'Huber', 'Ali', '16010508 3901', 'Lerwick', 42123),
(16, 'Lee', 'Ivana', '16541018 4138', 'Abingdon', 87810),
(18, 'Wooten', 'Jescie', '16600527 1223', 'Gwalior', 20340),
(19, 'Murphy', 'Ashely', '16570225 6701', 'Chatelineau', 84877),
(20, 'Byers', 'Kermit', '16880706 7486', 'Sainte-Marie-sur-Semois', 33496),
(21, 'Benjamin', 'Cullen', '16940815 9615', 'Mirny', 79352),
(22, 'Drake', 'Elijah', '16301006 2010', 'Lomza', 78858),
(23, 'Rosa', 'Nevada', '16771203 4318', 'Krasnoarmeysk', 95254),
(24, 'Spears', 'Kennan', '16240104 7929', 'Cuxhaven', 53206),
(25, 'Mcgee', 'Rajah', '16490327 3524', 'Buti', 76731),
(26, 'Allen', 'Maggie', '16730310 4850', 'Squillace', 47599),
(27, 'Ballard', 'Jolene', '16640426 9075', 'Orenburg', 41423),
(28, 'Pope', 'Mohammad', '16041225 8840', 'Multan', 44484),
(29, 'Curtis', 'Alvin', '16920312 1638', 'Gwangyang', 56909),
(30, 'Hogan', 'Lacota', '16120515 0038', 'Heredia', 20111),
(31, 'Robertson', 'Stephen', '16960807 6635', 'Boulogne-Billancourt', 20351),
(32, 'Good', 'Keegan', '16540629 3661', 'Chimbote', 34764),
(33, 'Mcdowell', 'Connor', '16790609 2866', 'Colonnella', 44758),
(34, 'Ross', 'Shad', '16340704 3524', 'Katsina', 79722),
(35, 'Munoz', 'Noble', '16160619 8156', 'Armento', 8569),
(36, 'Brooks', 'Claire', '16550508 8178', 'Knighton', 29442),
(37, 'Avila', 'Flynn', '16410622 0421', 'Fosses-la-Ville', 96704),
(38, 'Torres', 'Gretchen', '16180503 7502', 'Sahiwal', 70609),
(39, 'Mccullough', 'Teegan', '16460221 1551', 'Plymouth', 51100),
(40, 'Ford', 'Aristotle', '16071010 4290', 'Montauban', 14049),
(41, 'Bolton', 'Rhonda', '16800511 3363', 'Latera', 72475),
(42, 'Moreno', 'Wyoming', '16610323 5484', 'Genova', 80077),
(43, 'Crane', 'Evangeline', '16130529 0866', 'Tobermory', 41306),
(44, 'Finch', 'Ria', '16781210 3690', 'Chungju', 45459),
(45, 'Bruce', 'Jasper', '16890823 2526', 'Gualdo Tadino', 95923),
(46, 'Browning', 'Reed', '16730617 9529', 'Coleville Lake', 76671),
(47, 'Dawson', 'Austin', '16720918 1986', 'Berwick-upon-Tweed', 7186),
(48, 'Vance', 'Wendy', '16120416 6712', 'Kessel', 4088),
(49, 'Hester', 'Bert', '16131106 1392', 'Campbellton', 86572),
(50, 'Gonzales', 'Unity', '16760605 4588', 'Fayetteville', 52744);

-- --------------------------------------------------------

--
-- Structure de la table `t_commande`
--

CREATE TABLE `t_commande` (
  `idCommande` int(11) NOT NULL,
  `comDateAchat` date NOT NULL,
  `comDateFinGarantie` date NOT NULL,
  `fkClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_commande`
--

INSERT INTO `t_commande` (`idCommande`, `comDateAchat`, `comDateFinGarantie`, `fkClient`) VALUES
(1, '2020-09-02', '2022-09-02', 30),
(2, '2019-08-02', '2021-08-01', 50),
(3, '2019-01-09', '2021-01-08', 30),
(4, '2020-08-30', '2022-08-30', 49),
(5, '2020-09-04', '2022-09-04', 32),
(6, '2020-12-24', '2022-12-24', 1),
(7, '2021-06-20', '2023-06-20', 21),
(8, '2019-08-26', '2021-08-25', 34),
(9, '2020-06-11', '2022-06-11', 28),
(10, '2021-03-01', '2023-03-01', 4),
(11, '2019-04-22', '2021-04-21', 14),
(12, '2019-03-15', '2021-03-14', 3),
(13, '2019-06-03', '2021-06-02', 6),
(14, '2020-12-03', '2022-12-03', 10),
(15, '2021-06-24', '2023-06-24', 23),
(16, '2019-05-20', '2021-05-19', 12),
(17, '2019-05-14', '2021-05-13', 45),
(18, '2019-06-06', '2021-06-05', 47),
(19, '2020-02-19', '2022-02-18', 29),
(20, '2021-01-03', '2023-01-03', 2),
(21, '2020-05-09', '2022-05-09', 48),
(22, '2020-05-10', '2022-05-10', 15),
(23, '2019-03-13', '2021-03-12', 16),
(24, '2020-12-14', '2022-12-14', 19),
(25, '2019-05-21', '2021-05-20', 43),
(26, '2019-08-06', '2021-08-05', 37),
(27, '2021-05-23', '2023-05-23', 14),
(28, '2021-01-02', '2023-01-02', 38),
(29, '2021-02-02', '2023-02-02', 9),
(30, '2021-05-06', '2023-05-06', 50),
(31, '2019-02-17', '2021-02-16', 31),
(32, '2019-12-27', '2021-12-26', 38),
(33, '2019-06-26', '2021-06-25', 10),
(34, '2019-11-28', '2021-11-27', 29),
(35, '2019-12-26', '2021-12-25', 21),
(36, '2019-01-15', '2021-01-14', 30),
(37, '2019-03-03', '2021-03-02', 38),
(38, '2021-08-19', '2023-08-19', 41),
(39, '2021-07-01', '2023-07-01', 36),
(40, '2020-11-15', '2022-11-15', 47),
(41, '2019-10-30', '2021-10-29', 11),
(42, '2019-10-23', '2021-10-22', 24),
(43, '2020-03-18', '2022-03-18', 38),
(44, '2019-10-23', '2021-10-22', 16),
(45, '2019-02-19', '2021-02-18', 25),
(46, '2019-07-25', '2021-07-24', 24),
(47, '2019-10-26', '2021-10-25', 39),
(48, '2019-07-01', '2021-06-30', 13),
(49, '2020-03-22', '2022-03-22', 26),
(50, '2019-06-19', '2021-06-18', 44);

-- --------------------------------------------------------

--
-- Structure de la table `t_contenir`
--

CREATE TABLE `t_contenir` (
  `fkCommande` int(11) NOT NULL,
  `fkTelephone` int(11) NOT NULL,
  `conQuantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_contenir`
--

INSERT INTO `t_contenir` (`fkCommande`, `fkTelephone`, `conQuantite`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 3, 3),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 1),
(9, 9, 1),
(10, 10, 4),
(11, 11, 3),
(12, 12, 2),
(13, 13, 4),
(14, 14, 4),
(15, 15, 1),
(16, 16, 1),
(17, 17, 2),
(18, 18, 2),
(19, 19, 3),
(20, 20, 4),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 2),
(25, 25, 2),
(26, 26, 3),
(27, 27, 1),
(28, 28, 2),
(29, 29, 4),
(30, 30, 1),
(31, 21, 1),
(32, 7, 4),
(33, 4, 4),
(34, 6, 3),
(35, 23, 2),
(36, 12, 2),
(37, 17, 2),
(38, 18, 2),
(39, 26, 1),
(40, 30, 1),
(41, 11, 3),
(42, 2, 3),
(43, 6, 4),
(44, 3, 4),
(45, 14, 1),
(46, 19, 4),
(47, 28, 2),
(48, 19, 3),
(49, 14, 1),
(50, 28, 4);

-- --------------------------------------------------------

--
-- Structure de la table `t_marque`
--

CREATE TABLE `t_marque` (
  `idMarque` int(11) NOT NULL,
  `marNom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_marque`
--

INSERT INTO `t_marque` (`idMarque`, `marNom`) VALUES
(1, 'Nokia'),
(2, 'Huawei'),
(3, 'Xiaomi'),
(4, 'Samsung'),
(5, 'ZTE'),
(6, 'CAT'),
(7, 'Apple'),
(8, 'OnePlus'),
(9, 'Asus');

-- --------------------------------------------------------

--
-- Structure de la table `t_telephone`
--

CREATE TABLE `t_telephone` (
  `idTelephone` int(11) NOT NULL,
  `telModele` varchar(40) NOT NULL,
  `telOS` varchar(20) NOT NULL,
  `telVersionOs` varchar(4) DEFAULT NULL,
  `telPrixSortie` int(11) NOT NULL,
  `telPrixActuel` int(11) NOT NULL,
  `telChipsetRef` varchar(40) NOT NULL,
  `telChipsetGhz` float NOT NULL,
  `telNbCoeur` int(11) NOT NULL,
  `telRam` int(11) NOT NULL,
  `telTailleEcran` float NOT NULL,
  `telResolution` varchar(10) NOT NULL,
  `telAutonomie` int(11) NOT NULL,
  `telMemoire` int(11) NOT NULL,
  `fkMarque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_telephone`
--

INSERT INTO `t_telephone` (`idTelephone`, `telModele`, `telOS`, `telVersionOs`, `telPrixSortie`, `telPrixActuel`, `telChipsetRef`, `telChipsetGhz`, `telNbCoeur`, `telRam`, `telTailleEcran`, `telResolution`, `telAutonomie`, `telMemoire`, `fkMarque`) VALUES
(1, 'TA-1357', 'Android', '11', 110, 110, 'Unisoc SC9863A', 1.6, 8, 3, 6.82, '720x1600', 6000, 64, 1),
(2, 'C1 2nd Edition', 'Android', '11', 54, 50, 'Unisoc SC7731e', 1, 4, 1, 5.45, '720x1440', 2500, 16, 1),
(3, 'TA-1388', 'Android', '11', 300, 200, 'Unisoc SC9863A', 1.6, 8, 3, 6.5, '720x1600', 4950, 32, 1),
(4, 'TA-1334', 'Android', '11', 149, 129, 'MediaTek Helio G25', 2, 8, 4, 6.52, '720x1600', 5050, 64, 1),
(5, '8 V 5G UW', 'Android', '10', 649, 299, '765G 5G', 2.4, 8, 6, 6.81, '1080x2400', 4500, 64, 1),
(6, 'TA-1341', 'Android', '11', 350, 320, 'Snapdragon 480 5G', 2, 8, 8, 6.61, '1080x2400', 4470, 128, 1),
(7, 'JAD-AL50', 'HarmonyOS', '2.0', 1510, 1250, 'Kirin 9000', 3.13, 8, 12, 6.6, '1228x2700', 4360, 512, 2),
(8, 'M2012K10C', 'Android', '11', 500, 360, 'Dimensity 1200 5G', 3, 8, 12, 6.67, '1080x2400', 5065, 256, 3),
(9, 'SHARK PRS-H0', 'Android', '11', 800, 700, 'Snapdragon 870 5G', 3.2, 8, 12, 6.67, '1080x2400', 4500, 256, 3),
(10, 'Galaxy S20+', 'Android', '10', 1100, 500, 'Exynos 990', 2.5, 8, 8, 6.7, '1440x3200', 4500, 128, 4),
(11, 'Galaxy A51', 'Android', '10', 700, 299, 'Exynos 9611', 2.3, 8, 8, 6.5, '1080x2400', 4000, 128, 4),
(12, 'Galaxy Note10', 'Android', '9', 959, 350, 'Exynos 9825', 2.73, 8, 8, 6.3, '1080x2280', 3500, 256, 4),
(13, 'Galaxy Fold', 'Android', '9', 1899, 1000, 'Snapdragon 855', 2.84, 8, 12, 7.3, '1536x2152', 4380, 512, 4),
(14, 'Galaxy A71', 'Android', '10', 1000, 399, 'Snapdragon 730', 2.2, 8, 8, 6.7, '1080x2400', 4500, 128, 4),
(15, 'Galaxy S10', 'Android', '9', 909, 400, 'Snapdragon 855', 2.73, 8, 8, 6.1, '1440x3040', 3400, 128, 4),
(16, 'Galaxy Note10+', 'Android', '9', 1109, 500, 'Snapdragon 855', 2.73, 8, 12, 6.8, '1440x3040', 4300, 256, 4),
(17, 'Galaxy A20s', 'Android', '9', 700, 250, 'Snapdragon 450', 1.8, 8, 4, 6.5, '720x1560', 4000, 64, 4),
(18, 'Blade V30', 'Android', '11', 217, 200, 'Unisoc Tiger T618', 2, 8, 4, 6.67, '1080x2400', 5000, 128, 5),
(19, 'nubia Z20', 'Android', '9', 450, 719, 'Snapdragon 855+', 2.96, 8, 8, 6.42, '1080x2340', 4000, 128, 5),
(20, 'S62 Pro', 'Android', '10', 670, 500, 'Snapdragon 660', 2.2, 8, 6, 5.7, '1080x2160', 4000, 128, 6),
(21, 'Iphone XR', 'iOs', '12', 610, 430, 'A12 bionic', 2.5, 6, 3, 6.1, '828x1792', 2942, 128, 7),
(22, 'Iphone XS', 'iOs', '12', 1329, 730, 'A12 bionic', 2.5, 6, 4, 5.8, '1125x2436', 2658, 256, 7),
(23, 'Iphone XS Max', 'iOs', '12', 1429, 840, 'A12 bionic', 2.5, 6, 4, 6.5, '1242x2688', 3174, 256, 7),
(24, 'Iphone 11', 'iOs', '13', 650, 650, 'A13 bionic', 2.65, 6, 4, 6.1, '828x1792', 3110, 128, 7),
(25, 'Iphonne 11 Pro', 'iOs', '13', 1329, 800, 'A13 bionic', 2.65, 6, 4, 5.8, '1125x2436', 3046, 256, 7),
(26, 'Iphone 11 Pro Max', 'iOs', '13', 1429, 1250, 'A13 bionic', 2.65, 6, 4, 6.5, '1242x2688', 3969, 256, 7),
(27, 'Iphone 12', 'iOs', '14.1', 1130, 800, 'A14 bionic', 3.1, 6, 4, 6.1, '1170x2532', 2815, 128, 7),
(28, 'Iphone 12 Pro max', 'iOs', '14.1', 1230, 1045, 'A14 bionic', 3.1, 6, 6, 6.7, '1284x2778', 3687, 128, 7),
(29, 'Nord 2', 'Android', '11', 430, 430, 'Dimensity 1200', 3, 8, 12, 6.43, '1080x2400', 4500, 128, 8),
(30, 'ROG Phone 5 Utlimate', 'Android', '11', 1600, 1200, 'Snapdragon 888', 2.84, 8, 18, 6.78, '1080x2448', 6000, 512, 9);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_comprixtotal`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_comprixtotal` (
`idCommande` int(11)
,`comDateAchat` date
,`telPrixActuel` int(11)
,`conQuantite` int(11)
,`comPrix` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v_comprixtotal`
--
DROP TABLE IF EXISTS `v_comprixtotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_comprixtotal`  AS SELECT `t_commande`.`idCommande` AS `idCommande`, `t_commande`.`comDateAchat` AS `comDateAchat`, `t_telephone`.`telPrixActuel` AS `telPrixActuel`, `t_contenir`.`conQuantite` AS `conQuantite`, (`t_telephone`.`telPrixActuel` * `t_contenir`.`conQuantite`) AS `comPrix` FROM ((`t_telephone` join `t_contenir` on((`t_contenir`.`fkTelephone` = `t_telephone`.`idTelephone`))) join `t_commande` on((`t_commande`.`idCommande` = `t_contenir`.`fkCommande`))) ORDER BY `t_commande`.`idCommande` ASC ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_client`
--
ALTER TABLE `t_client`
  ADD PRIMARY KEY (`idClient`),
  ADD UNIQUE KEY `ID_t_client_IND` (`idClient`);

--
-- Index pour la table `t_commande`
--
ALTER TABLE `t_commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD UNIQUE KEY `ID_t_commande_IND` (`idCommande`),
  ADD KEY `FKeffectuer_IND` (`fkClient`);

--
-- Index pour la table `t_contenir`
--
ALTER TABLE `t_contenir`
  ADD PRIMARY KEY (`fkCommande`),
  ADD UNIQUE KEY `ID_t_contenir_IND` (`fkCommande`),
  ADD KEY `FKt_c_t_c_IND` (`fkTelephone`,`fkCommande`);

--
-- Index pour la table `t_marque`
--
ALTER TABLE `t_marque`
  ADD PRIMARY KEY (`idMarque`),
  ADD UNIQUE KEY `ID_t_marque_IND` (`idMarque`);

--
-- Index pour la table `t_telephone`
--
ALTER TABLE `t_telephone`
  ADD PRIMARY KEY (`idTelephone`),
  ADD UNIQUE KEY `ID_t_telephone_IND` (`idTelephone`),
  ADD KEY `FKposseder_IND` (`fkMarque`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_client`
--
ALTER TABLE `t_client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `t_commande`
--
ALTER TABLE `t_commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `t_marque`
--
ALTER TABLE `t_marque`
  MODIFY `idMarque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `t_telephone`
--
ALTER TABLE `t_telephone`
  MODIFY `idTelephone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commande`
--
ALTER TABLE `t_commande`
  ADD CONSTRAINT `FKeffectuer_FK` FOREIGN KEY (`fkClient`) REFERENCES `t_client` (`idClient`);

--
-- Contraintes pour la table `t_contenir`
--
ALTER TABLE `t_contenir`
  ADD CONSTRAINT `FKt_c_t_c_FK` FOREIGN KEY (`fkCommande`) REFERENCES `t_commande` (`idCommande`),
  ADD CONSTRAINT `FKt_c_t_t` FOREIGN KEY (`fkTelephone`) REFERENCES `t_telephone` (`idTelephone`);

--
-- Contraintes pour la table `t_telephone`
--
ALTER TABLE `t_telephone`
  ADD CONSTRAINT `FKposseder_FK` FOREIGN KEY (`fkMarque`) REFERENCES `t_marque` (`idMarque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
