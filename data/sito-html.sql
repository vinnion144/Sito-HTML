-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database sito-html
CREATE DATABASE IF NOT EXISTS `sito-html` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sito-html`;

-- Dump della struttura di tabella sito-html.destinations
CREATE TABLE IF NOT EXISTS `destinations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pagina_nome` char(50) NOT NULL,
  `copertina` char(50) NOT NULL,
  `nome` char(50) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella sito-html.destinations: ~6 rows (circa)
INSERT INTO `destinations` (`ID`, `pagina_nome`, `copertina`, `nome`) VALUES
	(1, 'lione.php', 'Lione.jpg', 'Lione'),
	(2, 'sudafrica.php', 'Sudafrica.jpg', 'sudafrica'),
	(3, 'giappone.php', 'giappone.jpeg', 'Giappone'),
	(4, 'messico.php', 'messico-carousel.jpg', 'Messico'),
	(5, 'statiuniti.php', 'stati-uniti.jpeg', 'statiuniti'),
	(6, 'italia.php', 'italia.webp', 'Italia');

-- Dump della struttura di tabella sito-html.favorites
CREATE TABLE IF NOT EXISTS `favorites` (
  `User_ID` int(11) NOT NULL DEFAULT 0,
  `Destination_ID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`User_ID`,`Destination_ID`) USING BTREE,
  KEY `ID_user` (`User_ID`),
  KEY `ID_destinations` (`Destination_ID`),
  CONSTRAINT `FK_favorites_users` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella sito-html.favorites: ~7 rows (circa)
INSERT INTO `favorites` (`User_ID`, `Destination_ID`) VALUES
	(29, 1),
	(29, 2),
	(29, 3),
	(29, 4),
	(29, 5),
	(29, 6),
	(77, 1);

-- Dump della struttura di tabella sito-html.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `soldi` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella sito-html.users: ~2 rows (circa)
INSERT INTO `users` (`ID`, `nome`, `cognome`, `username`, `password`, `soldi`) VALUES
	(29, 'Ben', 'Dover', 'Vincenzo', 'asd', 84600),
	(77, NULL, NULL, 'asd', 'asd', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
