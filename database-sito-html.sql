/* Delimitatore cambiato in ; */
/* Connessione a 127.0.0.1 tramite MariaDB or MySQL (TCP/IP), nome utente root, usando la password: No… */
SELECT CONNECTION_ID();
SHOW VARIABLES;
/* Set di caratteri: utf8mb4 */
SHOW /*!50002 GLOBAL */ STATUS;
SELECT NOW();
/* Connesso. ID thread: 9 */
/* Reading function definitions from C:\Program Files\HeidiSQL\functions-mariadb.ini */
SHOW TABLES FROM `information_schema`;
SHOW DATABASES;
SHOW OPEN TABLES FROM `sito-html` WHERE `in_use`!=0;
USE `sito-html`;
/* Collegamento alla sessione “Unnamed” */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='sito-html';
SHOW TABLE STATUS FROM `sito-html`;
SHOW FUNCTION STATUS WHERE `Db`='sito-html';
SHOW PROCEDURE STATUS WHERE `Db`='sito-html';
SHOW TRIGGERS FROM `sito-html`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='sito-html';
/* Loading file "C:\Users\vince\Desktop\f1.sql" (2,7 KiB) into query tab #1 ... */
/* Loading file "C:\Users\vince\Desktop\f1.sql" (2,7 KiB) into query tab #2 ... */
/* Loading file "C:\Users\vince\Desktop\f1.sql" (2,7 KiB) into query tab #3 ... */
/* Loading file "C:\Users\vince\Desktop\progetto_php\data\db_travelfy.sql" (1,3 KiB) into query tab #4 ... */
/* Loading file "C:\Users\vince\Desktop\progetto_php\data\db_travelfy.sql" (1,3 KiB) into query tab #5 ... */
/* Ridimensionamento dei controlli ai DPI dello schermo: 100% */
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sito-html' AND TABLE_NAME='destinations' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `destinations` FROM `sito-html`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sito-html'   AND TABLE_NAME='destinations'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sito-html'   AND TABLE_NAME='destinations'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SHOW ENGINES;
SHOW COLLATION;
SHOW CREATE TABLE `sito-html`.`destinations`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sito-html' AND TABLE_NAME='destinations';
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sito-html' AND TABLE_NAME='favorites' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `favorites` FROM `sito-html`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sito-html'   AND TABLE_NAME='favorites'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sito-html'   AND TABLE_NAME='favorites'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SHOW CREATE TABLE `sito-html`.`favorites`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sito-html' AND TABLE_NAME='favorites';
SHOW CREATE TABLE `sito-html`.`destinations`;
SELECT * FROM `sito-html`.`destinations` LIMIT 1000;
SELECT * FROM `sito-html`.`favorites` LIMIT 1000;
SHOW CREATE TABLE `sito-html`.`favorites`;
SELECT * FROM `sito-html`.`favorites` LIMIT 1000;
SELECT * FROM `information_schema`.`COLUMNS` WHERE TABLE_SCHEMA='sito-html' AND TABLE_NAME='users' ORDER BY ORDINAL_POSITION;
SHOW INDEXES FROM `users` FROM `sito-html`;
SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE   CONSTRAINT_SCHEMA='sito-html'   AND TABLE_NAME='users'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM information_schema.KEY_COLUMN_USAGE WHERE   TABLE_SCHEMA='sito-html'   AND TABLE_NAME='users'   AND REFERENCED_TABLE_NAME IS NOT NULL;
SELECT * FROM `sito-html`.`users` LIMIT 1000;
SHOW CREATE TABLE `sito-html`.`users`;
SELECT CONSTRAINT_NAME, CHECK_CLAUSE FROM `information_schema`.`CHECK_CONSTRAINTS` WHERE CONSTRAINT_SCHEMA='sito-html' AND TABLE_NAME='users';
SELECT * FROM `sito-html`.`users` LIMIT 1000;
SELECT * FROM `sito-html`.`favorites` LIMIT 1000;
SHOW CREATE TABLE `sito-html`.`favorites`;
SELECT * FROM `sito-html`.`favorites` LIMIT 1000;
SELECT * FROM `sito-html`.`users` LIMIT 1000;
SHOW CREATE TABLE `sito-html`.`users`;
SELECT * FROM `sito-html`.`users` LIMIT 1000;
SELECT * FROM `sito-html`.`users` ORDER BY `username` ASC LIMIT 1000;
SELECT * FROM `sito-html`.`users` ORDER BY `username` DESC LIMIT 1000;
SELECT * FROM `sito-html`.`users` LIMIT 1000;
INSERT INTO `sito-html`.`users` (`username`, `password`) VALUES ('Vincenzo', '123');
SELECT LAST_INSERT_ID();
SELECT `ID`, `username`, `password` FROM `sito-html`.`users` WHERE  `ID`=1;