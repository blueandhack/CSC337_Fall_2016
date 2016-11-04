-- MySQL dump 10.13  Distrib 5.6.28, for osx10.9 (x86_64)
--
-- Host: localhost    Database: YujiaLin
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Current Database: `YujiaLin`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `YujiaLin` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `YujiaLin`;

--
-- Table structure for table `csc337`
--

DROP TABLE IF EXISTS `csc337`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `csc337` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Grade` int(11) DEFAULT NULL,
  `Letter` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `csc337`
--

LOCK TABLES `csc337` WRITE;
/*!40000 ALTER TABLE `csc337` DISABLE KEYS */;
INSERT INTO `csc337` VALUES (1,'Ana',89,'B'),(2,'Yoga',99,'A'),(3,'Lee',82,'B'),(4,'Mike',79,'C'),(5,'Candy',92,'A'),(6,'Thomas',74,'C'),(7,'Chris',100,'A'),(8,'Ani',60,'D'),(9,'CC',55,'E');
/*!40000 ALTER TABLE `csc337` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (9,'Rick',23,90),(1,'Yoga',21,90),(2,'Mike',23,80),(3,'Lee',24,90),(4,'Candy',25,70),(5,'Sun',26,80),(6,'Moon',27,60),(7,'Lunar',28,50),(8,'Ana',22,70);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-03 18:43:10
