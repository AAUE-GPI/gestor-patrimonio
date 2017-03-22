-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: reitor
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `calendario`
--

DROP TABLE IF EXISTS `calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendario` (
  `jornada` int(11) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `hora` text,
  `local` text,
  `equipas` text,
  `resultado` text,
  `grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendario`
--

LOCK TABLES `calendario` WRITE;
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
INSERT INTO `calendario` VALUES (1,2,'dfsd','fssfd','fdsdfsfd0','cona',NULL),(4,2,'dfsd','fssfd','fdsdfsfd0','cona',NULL),(3,4,'dfsd','fssfd','fdsdfsfd0','cona',NULL),(1,3,'dfsd','fssfd','fdsdfsfd0','cona',NULL),(5,6,'dfsd','fssfd','fdsdfsfd0','cona',NULL),(5,6,'dfsd','FUSCO GAY','NUNO GAY','cona',NULL),(1,2,'dfsd','fssfd','fdsdfsfd0','cona',1),(1,2,'dfsd','fssfd','fdsdfsfd0','cona',1),(1,2,'dfsd','fssfd','fdsdfsfd0','cona',3),(1,2,'dfsd','fssfd','fdsdfsfd0','cona',2),(1,2,'dfsd','fssfd','Grupo A','cona',1),(1,2,'dfsd','fssfd','Grupo B','cona',2),(1,2,'dfsd','fssfd','Grupo C','cona',3),(1,2,'dfsd','fssfd','Grupo D','cona',4);
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipas`
--

DROP TABLE IF EXISTS `equipas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text,
  `pontos` int(11) DEFAULT NULL,
  `jr` int(11) DEFAULT NULL,
  `gm` int(11) DEFAULT NULL,
  `gs` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipas`
--

LOCK TABLES `equipas` WRITE;
/*!40000 ALTER TABLE `equipas` DISABLE KEYS */;
INSERT INTO `equipas` VALUES (1,'62 TEAM',25,1,5,3,NULL),(2,'69 TEAM',4,1,6,2,NULL),(3,'69 TEAM',4,1,10,2,NULL);
/*!40000 ALTER TABLE `equipas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'Grupo A'),(2,'Grupo B'),(3,'Grupo C'),(4,'Grupo D');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-15 23:37:08
