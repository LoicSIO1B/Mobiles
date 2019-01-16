-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2019 at 04:19 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmobiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessoire`
--

DROP TABLE IF EXISTS `accessoire`;
CREATE TABLE IF NOT EXISTS `accessoire` (
  `refPro` int(11) NOT NULL,
  `nomPro` varchar(40) DEFAULT NULL,
  `dateDispo` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `dateConcept` date DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `Prix` float(10,2) DEFAULT NULL,
  `Taille` float(10,2) DEFAULT NULL,
  `QttA` int(3) DEFAULT NULL,
  `Version` float(3,1) DEFAULT NULL,
  `idMarq` int(11) NOT NULL,
  PRIMARY KEY (`refPro`),
  KEY `idMarq` (`idMarq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

DROP TABLE IF EXISTS `assistant`;
CREATE TABLE IF NOT EXISTS `assistant` (
  `idAss` int(11) NOT NULL AUTO_INCREMENT,
  `nomAss` varchar(30) DEFAULT NULL,
  `prenomAss` varchar(30) DEFAULT NULL,
  `telAss` char(10) DEFAULT NULL,
  `mailAss` varchar(80) DEFAULT NULL,
  `Salaire` float(6,2) DEFAULT NULL,
  PRIMARY KEY (`idAss`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`idAss`, `nomAss`, `prenomAss`, `telAss`, `mailAss`, `Salaire`) VALUES
(1, 'Strifeaaa', 'Cloud', '0606060606', 'cloud.strife@gmail.com', 3000.00),
(2, 'Wallace', 'Barret', '0707070707', 'barret.wallace@gmail.com', 3500.00),
(3, 'Lockheart', 'Tifa', '0808080808', 'tifa.lockhear@gmail.com', 2800.00),
(4, 'Gainsborough', 'Aerith', '0909090909', 'aerith.gainsborough@gmail.com', 2600.00),
(5, 'Highwind', 'Cid', '1010101010', 'cid.highwind@gmail.com', 1400.00);

-- --------------------------------------------------------

--
-- Table structure for table `assurer`
--

DROP TABLE IF EXISTS `assurer`;
CREATE TABLE IF NOT EXISTS `assurer` (
  `dateHD` date DEFAULT NULL,
  `dateHF` date DEFAULT NULL,
  `idCl` int(11) NOT NULL,
  `idAss` int(11) NOT NULL,
  `refSup` int(11) NOT NULL,
  PRIMARY KEY (`idCl`,`idAss`,`refSup`),
  KEY `idAss` (`idAss`),
  KEY `refSup` (`refSup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idCl` int(11) NOT NULL AUTO_INCREMENT,
  `nomCl` varchar(50) NOT NULL,
  `prenomCl` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sexe` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date_creation_compte` datetime NOT NULL,
  `level` int(1) NOT NULL,
  `n_mdp` int(1) NOT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idCl`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idCl`, `nomCl`, `prenomCl`, `username`, `sexe`, `email`, `mdp`, `date_creation_compte`, `level`, `n_mdp`, `actif`) VALUES
(1, 'TRANv', 'VANv', 'vanv', 1, 'tran@gmail.com', 'VOVTSzxD2Hg5U', '2019-01-16 13:46:29', 1, 0, 1),
(2, 'TRAN', 'VAN', 'VAN', 1, 'vincentvn2005@gmail.com', 'VOVTSzxD2Hg5U', '2019-01-16 13:48:05', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `refCmd` int(11) NOT NULL AUTO_INCREMENT,
  `dateCmd` date DEFAULT NULL,
  `Frais` float(6,2) DEFAULT NULL,
  `Reduction` float(6,2) DEFAULT NULL,
  `idCl` int(11) NOT NULL,
  PRIMARY KEY (`refCmd`),
  KEY `idCl` (`idCl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `Qtt` int(11) NOT NULL,
  `refCmd` int(11) NOT NULL,
  `refPro` int(11) NOT NULL,
  PRIMARY KEY (`refCmd`,`refPro`),
  KEY `refPro` (`refPro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `encadrer`
--

DROP TABLE IF EXISTS `encadrer`;
CREATE TABLE IF NOT EXISTS `encadrer` (
  `refPro` int(11) NOT NULL,
  `idFor` int(11) NOT NULL,
  PRIMARY KEY (`refPro`,`idFor`),
  KEY `idFor` (`idFor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forfait`
--

DROP TABLE IF EXISTS `forfait`;
CREATE TABLE IF NOT EXISTS `forfait` (
  `idFor` int(11) NOT NULL,
  `debutFor` date DEFAULT NULL,
  `finFor` date DEFAULT NULL,
  `conditionFor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forfait`
--

INSERT INTO `forfait` (`idFor`, `debutFor`, `finFor`, `conditionFor`) VALUES
(1, '2017-01-01', '2022-01-01', 'majeur'),
(2, '2017-02-02', '2022-02-02', 'etudiant'),
(3, '2017-03-03', '2022-03-03', 'professionnel'),
(4, '2017-04-04', '2022-04-04', 'fan club'),
(5, '2017-05-05', '2022-05-05', '3 ans');

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarq` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarq` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idMarq`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`idMarq`, `nomMarq`) VALUES
(1, 'Galaxy'),
(2, 'Iphone'),
(3, 'Huawei'),
(4, 'Xiaomi'),
(5, 'Pixel');

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `refOff` int(11) NOT NULL AUTO_INCREMENT,
  `debutOff` date DEFAULT NULL,
  `finOff` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `montantOff` float(8,2) DEFAULT NULL,
  `refSup` int(11) NOT NULL,
  `refPro` int(11) NOT NULL,
  PRIMARY KEY (`refOff`),
  KEY `refSup` (`refSup`),
  KEY `refPro` (`refPro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `refPro` int(11) NOT NULL AUTO_INCREMENT,
  `nomPro` varchar(40) DEFAULT NULL,
  `dateDispo` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `dateConcept` date DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `Prix` float(10,2) DEFAULT NULL,
  `Taille` float(10,2) DEFAULT NULL,
  `idMarq` int(11) NOT NULL,
  PRIMARY KEY (`refPro`),
  KEY `idMarq` (`idMarq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produitmobile`
--

DROP TABLE IF EXISTS `produitmobile`;
CREATE TABLE IF NOT EXISTS `produitmobile` (
  `refPro` int(11) NOT NULL,
  `nomPro` varchar(40) DEFAULT NULL,
  `dateDispo` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `dateConcept` date DEFAULT NULL,
  `serie` varchar(20) DEFAULT NULL,
  `Prix` float(10,2) DEFAULT NULL,
  `Taille` float(10,2) DEFAULT NULL,
  `coutTotal` float(10,2) DEFAULT NULL,
  `idMarq` int(11) NOT NULL,
  PRIMARY KEY (`refPro`),
  KEY `idMarq` (`idMarq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `idsl` int(11) NOT NULL,
  `nomsl` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idsl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

DROP TABLE IF EXISTS `support`;
CREATE TABLE IF NOT EXISTS `support` (
  `refSup` int(11) NOT NULL AUTO_INCREMENT,
  `Nature` varchar(20) DEFAULT NULL,
  `conditionSup` varchar(20) DEFAULT NULL,
  `CoutSup` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`refSup`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`refSup`, `Nature`, `conditionSup`, `CoutSup`) VALUES
(1, 'Panne', 'abonnement', 300.50),
(2, 'Malfonction', 'assurance', 75.20),
(3, 'Freeze', 'bonus', 400.50),
(4, 'Illsible', 'supplement', 120.00),
(5, 'Contraste', 'justificatif', 40.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_commandes`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_commandes`;
CREATE TABLE IF NOT EXISTS `v_commandes` (
`nomCl` varchar(50)
,`prenomCl` varchar(50)
,`refCmd` int(11)
,`dateCmd` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_produits`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_produits`;
CREATE TABLE IF NOT EXISTS `v_produits` (
`refPro` int(11)
,`nomPro` varchar(40)
,`nomMarq` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_support`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_support`;
CREATE TABLE IF NOT EXISTS `v_support` (
`nomAss` varchar(30)
,`prenomAss` varchar(30)
,`refSup` int(11)
,`Nature` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_commandes`
--
DROP TABLE IF EXISTS `v_commandes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_commandes`  AS  (select `cl`.`nomCl` AS `nomCl`,`cl`.`prenomCl` AS `prenomCl`,`co`.`refCmd` AS `refCmd`,`co`.`dateCmd` AS `dateCmd` from (`client` `cl` join `commande` `co`) where (`cl`.`idCl` = `co`.`idCl`) order by `cl`.`nomCl`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_produits`
--
DROP TABLE IF EXISTS `v_produits`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_produits`  AS  (select `p`.`refPro` AS `refPro`,`p`.`nomPro` AS `nomPro`,`m`.`nomMarq` AS `nomMarq` from (`produit` `p` join `marque` `m`) where (`p`.`idMarq` = `m`.`idMarq`) order by `m`.`idMarq`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_support`
--
DROP TABLE IF EXISTS `v_support`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_support`  AS  (select `a`.`nomAss` AS `nomAss`,`a`.`prenomAss` AS `prenomAss`,`s`.`refSup` AS `refSup`,`s`.`Nature` AS `Nature` from ((`assistant` `a` join `support` `s`) join `assurer` `ass`) where ((`a`.`idAss` = `ass`.`idAss`) and (`s`.`refSup` = `ass`.`refSup`)) order by `s`.`refSup`) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessoire`
--
ALTER TABLE `accessoire`
  ADD CONSTRAINT `accessoire_ibfk_1` FOREIGN KEY (`idMarq`) REFERENCES `marque` (`idMarq`);

--
-- Constraints for table `assurer`
--
ALTER TABLE `assurer`
  ADD CONSTRAINT `assurer_ibfk_1` FOREIGN KEY (`idCl`) REFERENCES `client` (`idCl`),
  ADD CONSTRAINT `assurer_ibfk_2` FOREIGN KEY (`idAss`) REFERENCES `assistant` (`idAss`),
  ADD CONSTRAINT `assurer_ibfk_3` FOREIGN KEY (`refSup`) REFERENCES `support` (`refSup`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idCl`) REFERENCES `client` (`idCl`);

--
-- Constraints for table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`refCmd`) REFERENCES `commande` (`refCmd`),
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`refPro`) REFERENCES `produit` (`refPro`);

--
-- Constraints for table `encadrer`
--
ALTER TABLE `encadrer`
  ADD CONSTRAINT `encadrer_ibfk_1` FOREIGN KEY (`refPro`) REFERENCES `produit` (`refPro`),
  ADD CONSTRAINT `encadrer_ibfk_2` FOREIGN KEY (`idFor`) REFERENCES `forfait` (`idFor`);

--
-- Constraints for table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`refSup`) REFERENCES `support` (`refSup`),
  ADD CONSTRAINT `offre_ibfk_2` FOREIGN KEY (`refPro`) REFERENCES `produit` (`refPro`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idMarq`) REFERENCES `marque` (`idMarq`);

--
-- Constraints for table `produitmobile`
--
ALTER TABLE `produitmobile`
  ADD CONSTRAINT `produitmobile_ibfk_1` FOREIGN KEY (`idMarq`) REFERENCES `marque` (`idMarq`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
