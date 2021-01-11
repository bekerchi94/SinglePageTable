-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.43 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных singlepagetable
CREATE DATABASE IF NOT EXISTS `singlepagetable` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `singlepagetable`;

-- Дамп структуры для таблица singlepagetable.singlepagetable
CREATE TABLE IF NOT EXISTS `singlepagetable` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `quantity` decimal(10,0) NOT NULL DEFAULT '0',
  `distance` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы singlepagetable.singlepagetable: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `singlepagetable` DISABLE KEYS */;
REPLACE INTO `singlepagetable` (`id`, `date`, `name`, `quantity`, `distance`) VALUES
	(1, '2021-01-11', 'вывыф', 1, 2),
	(2, '2021-01-11', 'ууц', 2, 3),
	(3, '2021-01-11', 'hhhh', 2, 2),
	(4, '2021-01-11', 'ewe', 0, 0),
	(5, '2021-01-11', 'trtrtr', 5, 0),
	(6, '2021-01-11', 'ere', 23, 0),
	(7, '2021-01-11', 'tttt', 0, 54),
	(8, '2021-01-11', 'trt', 54, 0),
	(9, '2021-01-11', 'yyyyy', 10, 10),
	(10, '2021-01-11', 'uuuu', 5, 5),
	(11, '2021-01-11', 'lllll', 7, 7);
/*!40000 ALTER TABLE `singlepagetable` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
