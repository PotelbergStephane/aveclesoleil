-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 19 Mai 2014 à 06:40
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `avec_le_soleil`
--
CREATE DATABASE IF NOT EXISTS `avec_le_soleil` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `avec_le_soleil`;

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE IF NOT EXISTS `achats` (
  `produit` int(11) NOT NULL,
  `membre` int(11) NOT NULL,
  `payementRealise` int(11) NOT NULL,
  `payementMode` int(11) DEFAULT NULL,
  `payementDate` datetime DEFAULT NULL,
  PRIMARY KEY (`produit`),
  KEY `fk_achats_membres1_idx` (`membre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titreCiviliteFR` int(11) NOT NULL,
  `titreCiviliteEN` int(11) NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`),
  UNIQUE KEY `mail_UNIQUE` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `commune` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adresses_villes1_idx` (`commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slugFR` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `texteFR` text COLLATE utf8_unicode_ci,
  `media` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slugEN` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texteEN` text COLLATE utf8_unicode_ci,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slugFR_UNIQUE` (`slugFR`),
  UNIQUE KEY `slugEN_UNIQUE` (`slugEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `nomFR`, `slugFR`, `texteFR`, `media`, `nomEN`, `slugEN`, `texteEN`, `niveau`) VALUES
(1, 'articles nomFR n01', 'articles_slugFR_n01', 'articles texteFR n01 qui fait partie de la rubrique accueil du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n01.jpg', 'articles nomEN n01', 'articles_slugEN_01', 'articles texteEN n01 qui fait partie de la rubrique accueil du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(2, 'articles nomFR n02', 'articles_slugFR_n02', 'articles texteFR n02 qui fait partie de la rubrique accueil du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n02.jpg', 'articles nomEN n02', 'articles_slugEN_02', 'articles texteEN n02 qui fait partie de la rubrique accueil du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(3, 'articles nomFR n03', 'articles_slugFR_n03', 'articles texteFR n03 qui fait partie de la rubrique essai du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n03.jpg', 'articles nomEN n03', 'articles_slugEN_03', 'articles texteEN n03 qui fait partie de la rubrique essai du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(4, 'articles nomFR n04', 'articles_slugFR_n04', 'articles texteFR n04 qui fait partie de la rubrique essai du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n04.jpg', 'articles nomEN n04', 'articles_slugEN_04', 'articles texteEN n04 qui fait partie de la rubrique essai du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(5, 'articles nomFR n05', 'articles_slugFR_n05', 'articles texteFR n05 qui fait partie de la rubrique test du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n05.jpg', 'articles nomEN n05', 'articles_slugEN_05', 'articles texteEN n05 qui fait partie de la rubrique test du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(6, 'articles nomFR n06', 'articles_slugFR_n06', 'articles texteFR n06 qui fait partie de la rubrique test du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n06.jpg', 'articles nomEN n06', 'articles_slugEN_06', 'articles texteEN n06 qui fait partie de la rubrique test du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(7, 'articles nomFR n07', 'articles_slugFR_n07', 'articles texteFR n07 qui fait partie de la rubrique tentative du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n07.jpg', 'articles nomEN n07', 'articles_slugEN_07', 'articles texteEN n07 qui fait partie de la rubrique tentative du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(8, 'articles nomFR n08', 'articles_slugFR_n08', 'articles texteFR n08 qui fait partie de la rubrique tentative du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n08.jpg', 'articles nomEN n08', 'articles_slugEN_08', 'articles texteEN n08 qui fait partie de la rubrique tentative du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(9, 'articles nomFR n09', 'articles_slugFR_n09', 'articles texteFR n09 qui fait partie de la rubrique brouillon du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n09.jpg', 'articles nomEN n09', 'articles_slugEN_09', 'articles texteEN n09 qui fait partie de la rubrique brouillon du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(10, 'articles nomFR n10', 'articles_slugFR_n10', 'articles texteFR n10 qui fait partie de la rubrique brouillon du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n10.jpg', 'articles nomEN n10', 'articles_slugEN_10', 'articles texteEN n10 qui fait partie de la rubrique brouillon du site alphabetisation: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(11, 'articles nomFR n11', 'articles_slugFR_n11', 'articles texteFR n11 qui fait partie de la rubrique accueil du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n11.jpg', 'articles nomEN n11', 'articles_slugEN_11', 'articles texteEN n11 qui fait partie de la rubrique accueil du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(12, 'articles nomFR n12', 'articles_slugFR_n12', 'articles texteFR n12 qui fait partie de la rubrique accueil du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n12.jpg', 'articles nomEN n12', 'articles_slugEN_12', 'articles texteEN n12 qui fait partie de la rubrique accueil du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(13, 'articles nomFR n13', 'articles_slugFR_n13', 'articles texteFR n13 qui fait partie de la rubrique essai du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n13.jpg', 'articles nomEN n13', 'articles_slugEN_13', 'articles texteEN n13 qui fait partie de la rubrique essai du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(14, 'articles nomFR n14', 'articles_slugFR_n14', 'articles texteFR n14 qui fait partie de la rubrique essai du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n14.jpg', 'articles nomEN n14', 'articles_slugEN_14', 'articles texteEN n14 qui fait partie de la rubrique essai du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(15, 'articles nomFR n15', 'articles_slugFR_n15', 'articles texteFR n15 qui fait partie de la rubrique test du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n15.jpg', 'articles nomEN n15', 'articles_slugEN_15', 'articles texteEN n15 qui fait partie de la rubrique test du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(16, 'articles nomFR n16', 'articles_slugFR_n16', 'articles texteFR n16 qui fait partie de la rubrique test du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n16.jpg', 'articles nomEN n16', 'articles_slugEN_16', 'articles texteEN n16 qui fait partie de la rubrique test du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(17, 'articles nomFR n17', 'articles_slugFR_n17', 'articles texteFR n17 qui fait partie de la rubrique tentative du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n17.jpg', 'articles nomEN n17', 'articles_slugEN_17', 'articles texteEN n17 qui fait partie de la rubrique tentative du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(18, 'articles nomFR n18', 'articles_slugFR_n18', 'articles texteFR n18 qui fait partie de la rubrique tentative du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n18.jpg', 'articles nomEN n18', 'articles_slugEN_18', 'articles texteEN n18 qui fait partie de la rubrique tentative du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(19, 'articles nomFR n19', 'articles_slugFR_n19', 'articles texteFR n19 qui fait partie de la rubrique brouillon du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n19.jpg', 'articles nomEN n19', 'articles_slugEN_19', 'articles texteEN n19 qui fait partie de la rubrique brouillon du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(20, 'articles nomFR n20', 'articles_slugFR_n20', 'articles texteFR n20 qui fait partie de la rubrique brouillon du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n20.jpg', 'articles nomEN n20', 'articles_slugEN_20', 'articles texteEN n20 qui fait partie de la rubrique brouillon du site eft: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(21, 'articles nomFR n21', 'articles_slugFR_n21', 'articles texteFR n21 qui fait partie de la rubrique accueil du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n21.jpg', 'articles nomEN n21', 'articles_slugEN_21', 'articles texteEN n21 qui fait partie de la rubrique accueil du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(22, 'articles nomFR n22', 'articles_slugFR_n22', 'articles texteFR n22 qui fait partie de la rubrique accueil du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n22.jpg', 'articles nomEN n22', 'articles_slugEN_22', 'articles texteEN n22 qui fait partie de la rubrique accueil du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(23, 'articles nomFR n23', 'articles_slugFR_n23', 'articles texteFR n23 qui fait partie de la rubrique essai du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n23.jpg', 'articles nomEN n23', 'articles_slugEN_23', 'articles texteEN n23 qui fait partie de la rubrique essai du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(24, 'articles nomFR n24', 'articles_slugFR_n24', 'articles texteFR n24 qui fait partie de la rubrique essai du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n24.jpg', 'articles nomEN n24', 'articles_slugEN_24', 'articles texteEN n24 qui fait partie de la rubrique essai du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(25, 'articles nomFR n25', 'articles_slugFR_n25', 'articles texteFR n25 qui fait partie de la rubrique test du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n25.jpg', 'articles nomEN n25', 'articles_slugEN_25', 'articles texteEN n25 qui fait partie de la rubrique test du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(26, 'articles nomFR n26', 'articles_slugFR_n26', 'articles texteFR n26 qui fait partie de la rubrique test du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n26.jpg', 'articles nomEN n26', 'articles_slugEN_26', 'articles texteEN n26 qui fait partie de la rubrique test du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(27, 'articles nomFR n27', 'articles_slugFR_n27', 'articles texteFR n27 qui fait partie de la rubrique tentative du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n27.jpg', 'articles nomEN n27', 'articles_slugEN_27', 'articles texteEN n27 qui fait partie de la rubrique tentative du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(28, 'articles nomFR n28', 'articles_slugFR_n28', 'articles texteFR n28 qui fait partie de la rubrique tentative du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n28.jpg', 'articles nomEN n28', 'articles_slugEN_28', 'articles texteEN n28 qui fait partie de la rubrique tentative du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2),
(29, 'articles nomFR n29', 'articles_slugFR_n29', 'articles texteFR n29 qui fait partie de la rubrique brouillon du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n29.jpg', 'articles nomEN n29', 'articles_slugEN_29', 'articles texteEN n29 qui fait partie de la rubrique brouillon du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(30, 'articles nomFR n30', 'articles_slugFR_n30', 'articles texteFR n30 qui fait partie de la rubrique brouillon du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'articles_media_n30.jpg', 'articles nomEN n30', 'articles_slugEN_30', 'articles texteEN n30 qui fait partie de la rubrique brouillon du site ceramique: lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `rubrique` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  PRIMARY KEY (`rubrique`,`article`),
  KEY `fk_pages_has_articles_articles1_idx` (`article`),
  KEY `fk_pages_has_articles_pages1_idx` (`rubrique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `blogs`
--

INSERT INTO `blogs` (`rubrique`, `article`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10),
(6, 11),
(6, 12),
(7, 13),
(7, 14),
(8, 15),
(8, 16),
(9, 17),
(9, 18),
(10, 19),
(10, 20),
(11, 21),
(11, 22),
(12, 23),
(12, 24),
(13, 25),
(13, 26),
(14, 27),
(14, 28),
(15, 29),
(15, 30);

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE IF NOT EXISTS `communes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `site` int(11) NOT NULL,
  `parametre` int(11) NOT NULL,
  PRIMARY KEY (`site`,`parametre`),
  KEY `fk_sites_has_config_config1_idx` (`parametre`),
  KEY `fk_sites_has_config_sites1_idx` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `titreCiviliteFR` tinyint(4) NOT NULL,
  `titreCiviliteEN` tinyint(4) NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fonnctionFR` text COLLATE utf8_unicode_ci NOT NULL,
  `fonctionEN` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail_UNIQUE` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

CREATE TABLE IF NOT EXISTS `dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membre` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `donRealise` int(11) NOT NULL,
  `donDate` datetime DEFAULT NULL,
  `donMode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dons_membres1_idx` (`membre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE IF NOT EXISTS `formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slugFR` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nomEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slugEN` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `dateDebut` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  `descriptionFR` text COLLATE utf8_unicode_ci NOT NULL,
  `descriptionEN` text COLLATE utf8_unicode_ci,
  `reference` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombreParticipantsMaximum` int(11) NOT NULL,
  `site` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slugFR_UNIQUE` (`slugFR`),
  UNIQUE KEY `reference_UNIQUE` (`reference`),
  UNIQUE KEY `slugEN_UNIQUE` (`slugEN`),
  KEY `fk_formations_sites1_idx` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE IF NOT EXISTS `inscriptions` (
  `membre` int(11) NOT NULL,
  `formation` int(11) NOT NULL,
  `payementRealise` int(11) NOT NULL,
  `payementMode` int(11) DEFAULT NULL,
  `payementDate` datetime DEFAULT NULL,
  PRIMARY KEY (`membre`,`formation`),
  KEY `fk_membres_has_formations_formations1_idx` (`formation`),
  KEY `fk_membres_has_formations_membres1_idx` (`membre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titreCiviliteFR` tinyint(4) NOT NULL,
  `titreCiviliteEN` tinyint(4) NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`),
  UNIQUE KEY `mail_UNIQUE` (`mail`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_membres_adresses1_idx` (`adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `paremetres`
--

CREATE TABLE IF NOT EXISTS `paremetres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slugFR` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `disponibilite` int(11) NOT NULL,
  `media` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `reference` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionFR` text COLLATE utf8_unicode_ci,
  `nomEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slugEN` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionEN` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slugFR_UNIQUE` (`slugFR`),
  UNIQUE KEY `reference_UNIQUE` (`reference`),
  UNIQUE KEY `slugEN_UNIQUE` (`slugEN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomFR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slugFR` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nomEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slugEN` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slugFR_UNIQUE` (`slugFR`),
  UNIQUE KEY `slugEN_UNIQUE` (`slugEN`),
  KEY `fk_pages_sites1_idx` (`site`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='		' AUTO_INCREMENT=16 ;

--
-- Contenu de la table `rubriques`
--

INSERT INTO `rubriques` (`id`, `nomFR`, `slugFR`, `nomEN`, `slugEN`, `site`) VALUES
(1, 'rubriques nomFR accueil alphabetisation', 'rubriques_slugFR_accueil_alphabetisation', 'rubriques nomEN accueil alphabetisation', 'rubriques_slugEN_accueil_alphabetisation', 1),
(2, 'rubriques nomFR essai alphabetisation', 'rubriques_slugFR_essai_alphabetisation', 'rubriques nomEN essai alphabetisation', 'rubriques_slugEN_essai_alphabetisation', 1),
(3, 'rubriques nomFR test alphabetisation', 'rubriques_slugFR_test_alphabetisation', 'rubriques nomEN test alphabetisation', 'rubriques_slugEN_test_alphabetisation', 1),
(4, 'rubriques nomFR tentative alphabetisation', 'rubriques_slugFR_tentative_alphabetisation', 'rubriques nomEN tentative alphabetisation', 'rubriques_slugEN_tentative_alphabetisation', 1),
(5, 'rubriques nomFR brouillon alphabetisation', 'rubriques_slugFR_brouillon_alphabetisation', 'rubriques nomEN brouillon alphabetisation', 'rubriques_slugEN_brouillon_alphabetisation', 1),
(6, 'rubriques nomFR accueil eft', 'rubriques_slugFR_accueil_eft', 'rubriques nomEN accueil eft', 'rubriques_slugEN_accueil_eft', 2),
(7, 'rubriques nomFR essai eft', 'rubriques_slugFR_essai_eft', 'rubriques nomEN essai eft', 'rubriques_slugEN_essai_eft', 2),
(8, 'rubriques nomFR test eft', 'rubriques_slugFR_test_eft', 'rubriques nomEN test eft', 'rubriques_slugEN_test_eft', 2),
(9, 'rubriques nomFR tentative eft', 'rubriques_slugFR_tentative_eft', 'rubriques nomEN tentative eft', 'rubriques_slugEN_tentative_eft', 2),
(10, 'rubriques nomFR brouillon eft', 'rubriques_slugFR_brouillon_eft', 'rubriques nomEN brouillon eft', 'rubriques_slugEN_brouillon_eft', 2),
(11, 'rubriques nomFR accueil ceramique', 'rubriques_slugFR_accueil_ceramique', 'rubriques nomEN accueil ceramique', 'rubriques_slugEN_accueil_ceramique', 3),
(12, 'rubriques nomFR essai ceramique', 'rubriques_slugFR_essai_ceramique', 'rubriques nomEN essai ceramique', 'rubriques_slugEN_essai_ceramique', 3),
(13, 'rubriques nomFR test ceramique', 'rubriques_slugFR_test_ceramique', 'rubriques nomEN test ceramique', 'rubriques_slugEN_test_ceramique', 3),
(14, 'rubriques nomFR tentative ceramique', 'rubriques_slugFR_tentative_ceramique', 'rubriques nomEN tentative ceramique', 'rubriques_slugEN_tentative_ceramique', 3),
(15, 'rubriques nomFR brouillon ceramique', 'rubriques_slugFR_brouillon_ceramique', 'rubriques nomEN brouillon ceramique', 'rubriques_slugEN_brouillon_ceramique', 3);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_UNIQUE` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id`, `nom`) VALUES
(1, 'sites_alphabetisation'),
(3, 'sites_ceramique'),
(2, 'sites_eft');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `fk_achats_membres1` FOREIGN KEY (`membre`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_achats_produits1` FOREIGN KEY (`produit`) REFERENCES `produits` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `fk_adresses_villes1` FOREIGN KEY (`commune`) REFERENCES `communes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_pages_has_articles_articles1` FOREIGN KEY (`article`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pages_has_articles_pages1` FOREIGN KEY (`rubrique`) REFERENCES `rubriques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD CONSTRAINT `fk_sites_has_config_config1` FOREIGN KEY (`parametre`) REFERENCES `paremetres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sites_has_config_sites1` FOREIGN KEY (`site`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `dons`
--
ALTER TABLE `dons`
  ADD CONSTRAINT `fk_dons_membres1` FOREIGN KEY (`membre`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `fk_formations_sites1` FOREIGN KEY (`site`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `fk_membres_has_formations_formations1` FOREIGN KEY (`formation`) REFERENCES `formations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_membres_has_formations_membres1` FOREIGN KEY (`membre`) REFERENCES `membres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `membres`
--
ALTER TABLE `membres`
  ADD CONSTRAINT `fk_membres_adresses1` FOREIGN KEY (`adresse`) REFERENCES `adresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `fk_pages_sites1` FOREIGN KEY (`site`) REFERENCES `sites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
