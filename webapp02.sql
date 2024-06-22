-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2024 at 10:25 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp02`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `message` text NOT NULL,
  `user_id` int NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`city`,`country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `travel_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recenties`
--

DROP TABLE IF EXISTS `recenties`;
CREATE TABLE IF NOT EXISTS `recenties` (
  `user_id` int NOT NULL,
  `recentie` text NOT NULL,
  `score` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

DROP TABLE IF EXISTS `stay`;
CREATE TABLE IF NOT EXISTS `stay` (
  `stay_id` int NOT NULL AUTO_INCREMENT,
  `hotel` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `camping` varchar(255) NOT NULL,
  PRIMARY KEY (`stay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

DROP TABLE IF EXISTS `travel`;
CREATE TABLE IF NOT EXISTS `travel` (
  `travel_id` int NOT NULL AUTO_INCREMENT,
  `stay_id` int NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `to_country` varchar(255) NOT NULL,
  `from_city` varchar(255) NOT NULL,
  `from_country` varchar(255) NOT NULL,
  `cost` double NOT NULL,
  `date` date NOT NULL,
  `travel_time` varchar(50) DEFAULT NULL,
  `image_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`travel_id`),
  KEY `stay_id` (`stay_id`),
  KEY `to_city` (`to_city`),
  KEY `from_city` (`from_city`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travel_id`, `stay_id`, `to_city`, `to_country`, `from_city`, `from_country`, `cost`, `date`, `travel_time`, `image_url`) VALUES
(1, 101, 'Paris', 'France', 'Amsterdam', 'The Netherlands', 149.99, '2024-07-01', '1 hour and 10 minutes', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/15/6d/d6/paris.jpg?w=1400&h=1400&s=1'),
(2, 102, 'Tokyo', 'Japan', 'Amsterdam', 'The Netherlands', 1199.99, '2024-07-15', '11 hours and 30 minutes', 'https://media.nomadicmatt.com/2024/tokyothings.jpeg'),
(3, 103, 'Sydney', 'Australia', 'Amsterdam', 'The Netherlands', 1399.99, '2024-08-01', '22 hours and 0 minutes', 'https://www.pelago.co/img/destinations/sydney/hero-image.jpg'),
(4, 104, 'Rome', 'Italy', 'Amsterdam', 'The Netherlands', 199.99, '2024-08-20', '2 hours and 30 minutes', 'https://media.timeout.com/images/105211673/image.jpg'),
(5, 105, 'Dubai', 'UAE', 'Amsterdam', 'The Netherlands', 699.99, '2024-09-05', '6 hours and 45 minutes', 'https://octane.rent/wp-content/uploads/2023/03/The-Dubai-Marina-District.webp'),
(6, 106, 'Berlin', 'Germany', 'Amsterdam', 'The Netherlands', 99.99, '2024-09-15', '1 hour and 20 minutes', 'https://i.natgeofe.com/n/b234ec7d-a988-4b75-9e65-749ddcbea7a0/citylife_berlin_2B4H3T1_web_3x2.jpg'),
(7, 107, 'Bangkok', 'Thailand', 'Amsterdam', 'The Netherlands', 899.99, '2024-10-01', '11 hours and 0 minutes', 'https://media.istockphoto.com/id/483816132/nl/foto/bangkok-cityscape.jpg?s=612x612&w=0&k=20&c=Xy4UQMJW3izllbadkNquDv3N0pxzS1PhRqNZatn0r7k='),
(8, 108, 'Cape Town', 'South Africa', 'Amsterdam', 'The Netherlands', 999.99, '2024-10-10', '11 hours and 30 minutes', 'https://cdn.britannica.com/42/126842-050-0803BC41/Sea-Point-Cape-Town-SAf.jpg'),
(9, 109, 'Rio de Janeiro', 'Brazil', 'Amsterdam', 'The Netherlands', 1199.99, '2024-10-25', '12 hours and 0 minutes', 'https://cdn.britannica.com/54/183454-050-A602E4AE/Night-view-Rio-de-Janeiro.jpg'),
(10, 110, 'Moscow', 'Russia', 'Amsterdam', 'The Netherlands', 299.99, '2024-11-05', '3 hours and 30 minutes', 'https://www.planete-energies.com/sites/default/files/styles/1200x630/public/migrated_files/images/thumbnails/image/moscow.jpg?itok=lPt9jNWR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `first_name`, `last_name`, `email`, `password`, `admin`) VALUES
(1, 'elcoterwoert', 'Elco', 'Terwoert', 'elco.terwoert@test.com', 'test123', 1),
(2, 'niek', 'niek', 'brock', 'niekiscool@test.com', 'niek123', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
