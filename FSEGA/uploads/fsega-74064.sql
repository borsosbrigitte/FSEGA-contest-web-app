-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 06, 2020 at 03:16 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsega`
--

-- --------------------------------------------------------

--
-- Table structure for table `diakok`
--

DROP TABLE IF EXISTS `diakok`;
CREATE TABLE IF NOT EXISTS `diakok` (
  `Nr_matricol` int(11) NOT NULL,
  `Csaladnev` varchar(30) NOT NULL,
  `Keresztnev` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CNP` varchar(13) NOT NULL,
  `DTel` varchar(20) NOT NULL,
  `Szak` varchar(30) NOT NULL,
  `Helyseg` varchar(30) NOT NULL,
  `TanarID` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Nr_matricol`),
  KEY `FK_TanarID` (`TanarID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diakok`
--

INSERT INTO `diakok` (`Nr_matricol`, `Csaladnev`, `Keresztnev`, `Email`, `CNP`, `DTel`, `Szak`, `Helyseg`, `TanarID`, `Password`) VALUES
(111, 'Barabas', 'Zoltan', 'barabaszoltan@gmail.com', '1990707060026', '0785454787', 'Mat-info', 'Szaszregen', 3, '123456789'),
(222, 'Szekely', 'Szilard', 'szekelyszilard@gmail.com', '19907060089', '0754212548', 'Mat-info', 'Kolozsvar', 1, '123456789'),
(333, 'Szilagyi', 'Anna', 'szilagyianna@gmail.com', '2990808060026', '0745787965', 'Bio-kemia', 'Beszterce', 2, '123456789'),
(444, 'Szasz', 'Peter', 'szaszpeter@gmail.com', '1990202060026', '0751213542', 'Bio-kemia', 'Marosvasarhely', 3, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `projekt`
--

DROP TABLE IF EXISTS `projekt`;
CREATE TABLE IF NOT EXISTS `projekt` (
  `ProjektID` int(11) NOT NULL,
  `Cim` varchar(30) NOT NULL,
  `Nr_matricol` int(11) NOT NULL,
  `FeltDatum` date NOT NULL,
  `FileNev` varchar(30) NOT NULL,
  `Vegleges` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProjektID`),
  KEY `FK_Nr_matricol` (`Nr_matricol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanar`
--

DROP TABLE IF EXISTS `tanar`;
CREATE TABLE IF NOT EXISTS `tanar` (
  `TanarID` int(11) NOT NULL,
  `Csaladnev` varchar(30) NOT NULL,
  `Keresztnev` varchar(30) NOT NULL,
  `TEmail` varchar(30) NOT NULL,
  `TTel` varchar(30) NOT NULL,
  PRIMARY KEY (`TanarID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tanar`
--

INSERT INTO `tanar` (`TanarID`, `Csaladnev`, `Keresztnev`, `TEmail`, `TTel`) VALUES
(3, 'Kovacs', 'Eva', 'kovacseva@gmail.com', '0787878787'),
(1, 'Saplacan', 'Maria', 'saplacanmaria@gmail.com', '0738293839'),
(2, 'Avornicului', 'Mihai', 'avorniculuimihai@gmail.com', '0765263536'),
(4, 'Cardos', 'Vasile', 'cardosvasile@gmail.com', '0765263253'),
(5, 'Varga', 'Viorica', 'vargaviorica@gmail.com', '0765363252');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
