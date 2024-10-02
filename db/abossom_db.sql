-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.25 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for abossom_db
CREATE DATABASE IF NOT EXISTS `abossom_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `abossom_db`;

-- Dumping structure for table abossom_db.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table abossom_db.services: ~5 rows (approximately)
DELETE FROM `services`;
INSERT INTO `services` (`id`, `name`, `price`, `description`) VALUES
	(1, 'LAWN LOT\'S', 1000000, 'Our lawn lots provide a tranquil, landscaped setting, offering a peaceful resting place for your loved ones in a well-maintained environment. '),
	(2, 'APARTMENT-TYPE LOTS', 1000000, 'Our apartment-type lots offer a secure and elevated final resting place, thoughtfully designed for lasting dignity and peaceful remembrance. '),
	(3, 'FAMILY STATES', 1000000, 'Our family estates offer spacious, private areas that can accommodate generations, creating a serene and exclusive resting place for your family’s legacy. '),
	(4, 'INTERMENT', 1000000, 'Our interment services ensure a respectful and efficient burial process, handled with the utmost care and attention to detail, giving families peace of mind during difficult times. '),
	(5, 'CREMATION', 1000000, 'Our cremation services offer a respectful and environmentally conscious alternative, providing a dignified space for families to honor and remember their loved ones. ');

-- Dumping structure for table abossom_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'guest',
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `middle` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `suffix` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birth_date` date NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `relative_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table abossom_db.users: ~2 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `position`, `first_name`, `last_name`, `middle`, `gender`, `suffix`, `birth_date`, `address`, `relative_name`, `email`, `password`) VALUES
	(1, 'guest', 'Testing', 'Testing', 'e.', 'Male', 'N/A', '2024-09-24', 'Tseign', 'tesitng', 'odnes12@gmail.com', '$2y$10$YgiPJ8Dcv/w1aodRmE89SucLH1gv3QkRCZ0SvNKrESCmLdrdpBexG'),
	(2, 'guest', 'Testing', 'Testing', 'T', 'Male', 'N/A', '1994-08-30', 'Testing St. Testing City Testing', 'Testing D. Testing', 'odnes03@gmail.com', '$2y$10$q78UJXzfw4QTt0rXieZUDu5KCjKHJmJPS81YnJQ6wk9gtotSIz8bS');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
