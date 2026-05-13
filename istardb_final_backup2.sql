-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: istardb
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `concerts_tbl`
--

DROP TABLE IF EXISTS `concerts_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concerts_tbl` (
  `concert_id` int(11) NOT NULL AUTO_INCREMENT,
  `concert_title` varchar(50) NOT NULL,
  `concert_artist` varchar(50) NOT NULL,
  `ticket_cost` int(11) NOT NULL,
  `concert_date` datetime DEFAULT NULL,
  `png_src` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`concert_id`),
  UNIQUE KEY `concert_title` (`concert_title`),
  UNIQUE KEY `concert_artist` (`concert_artist`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concerts_tbl`
--

LOCK TABLES `concerts_tbl` WRITE;
/*!40000 ALTER TABLE `concerts_tbl` DISABLE KEYS */;
INSERT INTO `concerts_tbl` VALUES (1,'Sabrina - LOVE','Sabrina Carpenter',2000,'2026-06-20 20:00:00','../assets/sabrina-logo.jpg'),(2,'The Eras Tour','Taylor Swift',5000,'2026-06-15 19:00:00','../assets/taylor-logo.jpg'),(3,'Bebe Rexha - Best F*n Night of Life Tour','Bebe Rexha',6000,'2026-12-20 20:00:00','../assets/bebe-rexha-logo.jpg');
/*!40000 ALTER TABLE `concerts_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_tbl`
--

DROP TABLE IF EXISTS `orders_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_tbl` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_user_id` (`user_id`),
  KEY `fk_concert_id` (`concert_id`),
  CONSTRAINT `fk_concert_id` FOREIGN KEY (`concert_id`) REFERENCES `concerts_tbl` (`concert_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users_tbl` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_tbl`
--

LOCK TABLES `orders_tbl` WRITE;
/*!40000 ALTER TABLE `orders_tbl` DISABLE KEYS */;
INSERT INTO `orders_tbl` VALUES (2,0,1,4),(3,1,1,1),(4,1,1,1),(5,1,2,1),(6,1,2,1),(7,1,2,1),(8,1,1,1),(9,1,1,5),(10,1,1,1),(11,1,2,1),(12,1,1,1);
/*!40000 ALTER TABLE `orders_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(60) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_tbl`
--

LOCK TABLES `users_tbl` WRITE;
/*!40000 ALTER TABLE `users_tbl` DISABLE KEYS */;
INSERT INTO `users_tbl` VALUES (1,'youthinkyoucan@gmail.com','deanpogi123','Gas','Florentino Dean','1924-12-15','09298705204','New York','Kenway Street 1056','user'),(2,'myadmin@gmail.com','theadminishere','Admin','Administrator','2005-05-13','09918458257','Admin','Admin Street 10173','admin');
/*!40000 ALTER TABLE `users_tbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-13 13:50:25
