-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3305
-- Généré le :  jeu. 30 avr. 2020 à 20:08
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `covid237db`
--

-- --------------------------------------------------------

--
-- Structure de la table `aspnetroleclaims`
--

DROP TABLE IF EXISTS `aspnetroleclaims`;
CREATE TABLE IF NOT EXISTS `aspnetroleclaims` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` varchar(64) NOT NULL,
  `ClaimType` longtext CHARACTER SET utf8mb4,
  `ClaimValue` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `RoleId` (`RoleId`),
  KEY `IX_AspNetRoleClaims_RoleId` (`RoleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aspnetuserclaims`
--

DROP TABLE IF EXISTS `aspnetuserclaims`;
CREATE TABLE IF NOT EXISTS `aspnetuserclaims` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(64) NOT NULL,
  `ClaimType` longtext CHARACTER SET utf8mb4,
  `ClaimValue` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `IX_AspNetUserClaims_UserId` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aspnetuserlogins`
--

DROP TABLE IF EXISTS `aspnetuserlogins`;
CREATE TABLE IF NOT EXISTS `aspnetuserlogins` (
  `LoginProvider` varchar(125) CHARACTER SET utf8mb4 NOT NULL,
  `ProviderKey` varchar(125) CHARACTER SET utf8mb4 NOT NULL,
  `ProviderDisplayName` longtext CHARACTER SET utf8mb4,
  `UserId` varchar(64) NOT NULL,
  PRIMARY KEY (`LoginProvider`,`ProviderKey`),
  UNIQUE KEY `UserId` (`UserId`),
  KEY `IX_AspNetUserLogins_UserId` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `interpretations`
--

DROP TABLE IF EXISTS `interpretations`;
CREATE TABLE IF NOT EXISTS `interpretations` (
  `InterpretationId` varchar(64) NOT NULL,
  `PointMin` int(11) NOT NULL,
  `PointMax` int(11) NOT NULL,
  `Libelle` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`InterpretationId`),
  UNIQUE KEY `InterpretationId` (`InterpretationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

DROP TABLE IF EXISTS `medecins`;
CREATE TABLE IF NOT EXISTS `medecins` (
  `Id` varchar(64) NOT NULL,
  `UserName` longtext CHARACTER SET utf8mb4,
  `NormalizedUserName` longtext CHARACTER SET utf8mb4,
  `Email` longtext CHARACTER SET utf8mb4,
  `NormalizedEmail` longtext CHARACTER SET utf8mb4,
  `EmailConfirmed` tinyint(1) NOT NULL,
  `PasswordHash` longtext CHARACTER SET utf8mb4,
  `SecurityStamp` longtext CHARACTER SET utf8mb4,
  `ConcurrencyStamp` longtext CHARACTER SET utf8mb4,
  `PhoneNumber` longtext CHARACTER SET utf8mb4,
  `PhoneNumberConfirmed` tinyint(1) NOT NULL,
  `TwoFactorEnabled` tinyint(1) NOT NULL,
  `LockoutEnd` datetime(6) DEFAULT NULL,
  `LockoutEnabled` tinyint(1) NOT NULL,
  `AccessFailedCount` int(11) NOT NULL,
  `Specialisation` longtext CHARACTER SET utf8mb4,
  `Hospital` longtext CHARACTER SET utf8mb4,
  `Fonction` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patientrole`
--

DROP TABLE IF EXISTS `patientrole`;
CREATE TABLE IF NOT EXISTS `patientrole` (
  `UserId` varchar(64) NOT NULL,
  `RoleId` varchar(64) NOT NULL,
  PRIMARY KEY (`UserId`,`RoleId`),
  UNIQUE KEY `UserId` (`UserId`),
  UNIQUE KEY `RoleId` (`RoleId`),
  KEY `IX_PatientRole_RoleId` (`RoleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `Id` varchar(64) NOT NULL,
  `UserName` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NormalizedUserName` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Email` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NormalizedEmail` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `EmailConfirmed` tinyint(1) NOT NULL,
  `PasswordHash` longtext CHARACTER SET utf8mb4,
  `SecurityStamp` longtext CHARACTER SET utf8mb4,
  `ConcurrencyStamp` longtext CHARACTER SET utf8mb4,
  `PhoneNumber` longtext CHARACTER SET utf8mb4,
  `PhoneNumberConfirmed` tinyint(1) NOT NULL,
  `TwoFactorEnabled` tinyint(1) NOT NULL,
  `LockoutEnd` datetime(6) DEFAULT NULL,
  `LockoutEnabled` tinyint(1) NOT NULL,
  `AccessFailedCount` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Address_StreetAddress` longtext CHARACTER SET utf8mb4,
  `Address_City` longtext CHARACTER SET utf8mb4,
  `PhotoPath` longtext CHARACTER SET utf8mb4,
  `ContactUrgence` longtext CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `UserNameIndex` (`NormalizedUserName`),
  KEY `EmailIndex` (`NormalizedEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `QuestionId` varchar(64) NOT NULL,
  `Libelle` longtext CHARACTER SET utf8mb4,
  `Points` int(11) NOT NULL,
  `SymptomeId` varchar(64) NOT NULL,
  PRIMARY KEY (`QuestionId`),
  UNIQUE KEY `QuestionId` (`QuestionId`),
  UNIQUE KEY `SymptomeId` (`SymptomeId`),
  KEY `IX_Questions_SymptomeId` (`SymptomeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `PatientId` varchar(64) NOT NULL,
  `QuestionId` varchar(64) NOT NULL,
  `PointObtenu` int(11) NOT NULL,
  PRIMARY KEY (`PatientId`,`QuestionId`),
  UNIQUE KEY `PatientId` (`PatientId`),
  UNIQUE KEY `QuestionId` (`QuestionId`),
  KEY `IX_Reponses_QuestionId` (`QuestionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE IF NOT EXISTS `resultats` (
  `Id` varchar(64) NOT NULL,
  `TotalPoints` int(11) NOT NULL,
  `PatientId` varchar(64) NOT NULL,
  `InterpretationId` varchar(64) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `PatientId` (`PatientId`),
  UNIQUE KEY `InterpretationId` (`InterpretationId`),
  UNIQUE KEY `IX_Resultats_PatientId` (`PatientId`),
  KEY `IX_Resultats_InterpretationId` (`InterpretationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `Id` varchar(64) NOT NULL,
  `Name` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NormalizedName` varchar(125) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ConcurrencyStamp` longtext CHARACTER SET utf8mb4,
  `Description` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `RoleNameIndex` (`NormalizedName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `symptomes`
--

DROP TABLE IF EXISTS `symptomes`;
CREATE TABLE IF NOT EXISTS `symptomes` (
  `Id` varchar(64) NOT NULL,
  `Libelle` longtext CHARACTER SET utf8mb4,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `__efmigrationshistory`
--

DROP TABLE IF EXISTS `__efmigrationshistory`;
CREATE TABLE IF NOT EXISTS `__efmigrationshistory` (
  `MigrationId` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `ProductVersion` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`MigrationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
