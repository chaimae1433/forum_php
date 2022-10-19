CREATE DATABASE  IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `forum`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: forum
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_auteur` int DEFAULT NULL,
  `pseudo_auteur` varchar(45) DEFAULT NULL,
  `id_question` int DEFAULT NULL,
  `contenu` longtext,
  `date_publication` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,2,'user2',1,'wow impressive<br />\r\n',NULL),(2,2,'user2',2,'je suis une reponse',NULL),(3,2,'user2',2,'heyyyy','11/01/2022'),(4,2,'user2',2,'je suis une autre reponse','12/01/2022');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offree`
--

DROP TABLE IF EXISTS `offree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offree` (
  `id_offre` int NOT NULL,
  `title` varchar(145) DEFAULT NULL,
  `description` longtext,
  `ville` varchar(45) DEFAULT NULL,
  `id_auteur` int DEFAULT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `fk_offre_idx` (`id_auteur`),
  CONSTRAINT `fk_offre` FOREIGN KEY (`id_auteur`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offree`
--

LOCK TABLES `offree` WRITE;
/*!40000 ALTER TABLE `offree` DISABLE KEYS */;
INSERT INTO `offree` VALUES (1,'offre de stage','Profil recherchu00e9 :<br />\r\nIssu(e) du2019une formation supu00e9rieure Bac +2/+5 fraichement diplu00f4mu00e9<br />\r\nPassion pour le digital et les nouvelles technologies<br />\r\nEnthousiasme pour ru00e9soudre les problu00e8mes<br />\r\nEsprit d\'initiative, forte ru00e9activitu00e9 et autonomie.<br />\r\nDynamique, polyvalent et curieux<br />\r\nBonnes capacitu00e9s d\'analyse, de synthu00e8se, d\'u00e9coute<br />\r\nCompu00e9tences Techniques :<br />\r\nUne bonne maitrise en : PHP, JS, CSS 3, HTML 5, MySQL et JQuery.<br />\r\nLangues :<br />\r\nUne bonne aisance de communication en franu00e7ais<br />\r\nUn bon niveau en anglais<br />\r\nDuru00e9e du stage :<br />\r\nMinimum 3 mois<br />\r\nType de contrat : Stage ','tanger',1);
/*!40000 ALTER TABLE `offree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` tinytext,
  `description` mediumtext,
  `contenu` mediumtext,
  `id_auteur` int DEFAULT NULL,
  `pseudo_auteur` varchar(45) DEFAULT NULL,
  `date_publication` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'1ere qst','c\'est la premiere qst1','voila le contenu de la qst',2,'user2','09/01/2022');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `mdp` tinytext,
  `email` varchar(40) DEFAULT NULL,
  `description` longtext,
  `pays` longtext,
  `filiere` varchar(30) DEFAULT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `compte_linkedIen` varchar(30) DEFAULT NULL,
  `num_tel` varchar(20) DEFAULT NULL,
  `date_naissance` varchar(20) DEFAULT NULL,
  `ville` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user1','hssassa','naila','naila',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'user2','nom1','prenom1','$2y$10$zsiwWhoUM85sMwg64tqWVOjKu404zOPNR4OPqP7mqHYFkqPzpoIxW',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'naila.hssassa','hssassa','naila','$2y$10$Cxfb1b.leAC4KXXVEI4TUeo3eIkuaKyrig65cHfEnQTebgNbu4vL2','naila.hssassa@gmail.com','ingenieur en system d\'information','','','','naila.hs','0665365360','',''),(6,'chaimae.ghazi','ghazi','chaimae','$2y$10$/NUsb/7FuziNpoQv5qTmnOjKQKVvWdCPvcmja/BdTGIKZPR0WJJTe','ghazichaymae@gmail.com','etudiante en genie informatique','','ginf2','','chaimae-ghazi','0614446701','2000-04-04','tanger');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-12 18:37:24
