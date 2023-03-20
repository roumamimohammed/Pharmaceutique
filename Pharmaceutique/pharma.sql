-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 mars 2023 à 12:38
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pharma`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'mohamed', 'admin'),
(2, 'ROUMAMI', '$2y$10$wVXOyAZVY4LHom3/411I7.CnF8DddwSs5JJkQoNiBcbjgw0EqtTeK'),
(3, '', '$2y$10$hbImi0SRclqVd4knIFcUP.QgcvoS4BDgCMDYes9iPfmN/XBh/XLdK'),
(4, '', '$2y$10$nNqgoPBnXp0kZ3uo8MN71uvTuc9gehrtm2cQyf9sI8VD4HgbyNwGW'),
(5, 'jfjfj', '$2y$10$jOkN3WVA4JOQMZyGqw2J/uPUT1CPV3gGbmPQm601hm92LPCNVejvK'),
(6, '', '$2y$10$zZizqkpJ7nbiXnBqhUYHK.siPzFGwAAbxLEidLOU13hksdzbuVlea'),
(7, 'jjj', '$2y$10$KkF9iLKTNOn.DXPuUaaqDuTF11M/e/fXejm0cIVON/7v/HWHoWHOO'),
(8, '', '$2y$10$NNylJEcMrx7iZx4svDP6GuOsClallMZoiP6lsMnhPSTw0EWEsQ3Li'),
(9, 'jhsjdhjhds', '$2y$10$ZsyjFQF4WQJeLNnJnuI4t.83pRYKBkZzdpzkN3hLkKoxtR2rwzMi.'),
(10, 'hdhd', '$2y$10$GGW5hF9h9LtwDmtOYDH/LeoSec0VFMdAiulRt2GPP9agJSEqNfW16'),
(11, 'kjkkj', '$2y$10$jqFAOK23pTNshJXQCFJC8.u.grKRYQaCXNUh8jwmIQygUf1whEdwG'),
(12, 'Mohammed', '$2y$10$aFn1HiuPr.792pj4BQx3SuZmN7RPgMl6vgCkoTOMiyKownMNR.8qO'),
(13, 'Youcode', '$2y$10$0GBIea/svyMdvFcrieGEZuaRoJ8OSmP8Hut.U4chNUfZFa2L3cjH2');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `cat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_cat`, `cat`) VALUES
(0, 'PILL'),
(1, 'Head'),
(2, 'Stoma'),
(7, 'hgj'),
(8, 'ngh'),
(9, 'hgh'),
(10, 'gbgh'),
(11, 'ALAE');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_prod` int(11) NOT NULL,
  `Llibelle` varchar(100) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `data_ajout` date NOT NULL,
  `id_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_prod`, `Llibelle`, `quantite`, `prix`, `IMAGE`, `data_ajout`, `id_cat`) VALUES
(58, 'DALFEINE', 12, 1212, 'pack_3d_dalfeine.png', '2023-01-23', 0),
(59, 'PARAMOLE', 200, 340, 'Paramol-extra-500.png', '2023-01-23', 1),
(60, 'BIOGARAN', 30, 400, 'trio-medicaments.png', '2023-01-23', 0),
(65, 'Paracitamolax', 32, 22, 'ISOXAN-ADULTE_560x400.png', '2023-01-23', 0),
(72, 'FGHQ', 0, 1234, 'ISOXAN-ADULTE_560x400.png', '2023-01-23', 0),
(73, 'Alol', 234, 234, '981-9814077_info-medicamentos-on-twitter-crte-de-coq-traitement.png', '2023-01-25', 0),
(77, '123', 0, 0, '981-9814077_info-medicamentos-on-twitter-crte-de-coq-traitement.png', '2023-01-26', 0),
(78, '456', 567, 123, '355-3554483_doxycycline-box-from-the-front-medicament-pour-le.png', '2023-01-26', 0),
(79, '789', 56, 2213, 'Pills-Medicine-PNG-Clipart.png', '2023-01-26', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `product_ibfk_1` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
