CREATE DATABASE IF NOT EXISTS `sito-html`;
USE `sito-html`;


CREATE TABLE IF NOT EXISTS `destinations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pack_name` char(50) NOT NULL,
  `price` char(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `favorites` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL DEFAULT 0,
  `Destination_ID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  KEY `ID_user` (`User_ID`),
  KEY `ID_destinations` (`Destination_ID`),
  CONSTRAINT `FK_favorites_destinations` FOREIGN KEY (`Destination_ID`) REFERENCES `destinations` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_favorites_users` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;