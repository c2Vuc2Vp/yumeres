-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: yumeres
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` longblob NOT NULL,
  `img2` blob NOT NULL,
  `prix` int NOT NULL,
  `cat` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `stock` int NOT NULL,
  `livre` tinyint(1) NOT NULL DEFAULT '0',
  `descr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `list_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ind_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Informatique'),(2,'Accessoire'),(3,'Telephonie'),(4,'Electronique');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `tel_1` varchar(255) DEFAULT NULL,
  `tel_2` varchar(255) DEFAULT NULL,
  `active` enum('0','1') DEFAULT '0',
  `remember_token` varchar(255) DEFAULT '==',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Sensei','$2y$10$NABMoEBEH/y1BtLF9TfWIOlBewknAHSKeID/g35ELHnfzaR0fa/0m','Sensei@gmail.com','58591558','','1','Sensei@gmail.com==89f86e13048a5802943f601aa0b85b4c677f5c39','2021-01-04 22:02:44'),(2,'sen','$2y$10$mzb/QSJQ/FbNLXwftOiMCuaAyqGWOQjavycqjloPSAk912eF/gNB6','sen@gmail.com','58591558','','1','','2021-01-05 22:53:38');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marques` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sous_categories`
--

DROP TABLE IF EXISTS `sous_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sous_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `list_cat` varchar(255) NOT NULL,
  `id_categories` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ind_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_categories`
--

LOCK TABLES `sous_categories` WRITE;
/*!40000 ALTER TABLE `sous_categories` DISABLE KEYS */;
INSERT INTO `sous_categories` VALUES (1,'Ordinateur',1),(2,'Ordinateur bureau',1),(3,'Accessoire',1),(4,'Montre connectée',2),(5,'Power bank',2),(6,'Tablette',3),(7,'Smartphone',3),(8,'Telephone',3),(9,'Iphone',3),(10,'Television',4),(11,'Audio & Hifi',4),(12,'Accessoire TV',4);
/*!40000 ALTER TABLE `sous_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sous_categories_infor`
--

DROP TABLE IF EXISTS `sous_categories_infor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sous_categories_infor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `list_cat` varchar(255) NOT NULL,
  `id_sous_categories` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_categories_infor`
--

LOCK TABLES `sous_categories_infor` WRITE;
/*!40000 ALTER TABLE `sous_categories_infor` DISABLE KEYS */;
INSERT INTO `sous_categories_infor` VALUES (1,'Vivobook',1),(2,'Macbook',1),(3,'Moniteur & Ecran',2),(4,'Unite centrale',2),(5,'Stockage de donnees',3),(6,'Imprimante & Scanner',3);
/*!40000 ALTER TABLE `sous_categories_infor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-06 23:11:14
