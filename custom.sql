-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: custom
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1 

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
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS auth;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE auth (
  FIRST_NAME  VARCHAR(40) NOT NULL,
  LAST_NAME  VARCHAR(40),
  ZIP_CODE INT,  
  EMAIL VARCHAR(40),
  PRIMARY KEY (FIRST_NAME, LAST_NAME),
  UNIQUE KEY (FIRST_NAME)
  )
--
-- Dumping data for table `auth`
--

LOCK TABLES auth WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES (1,'test','123456','FF:FF:FF:FF:FF:FF','00:11:22:33:44:55','Guest','2014-04-22 15:07:06','http//www.google.com');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connections`
--

DROP TABLE IF EXISTS connections;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE connections 
(
  FIRST_NAME  VARCHAR(40) NOT NULL,
  PRIMARY KEY (FIRST_NAME, LAST_NAME),
  UNIQUE KEY (FIRST_NAME)
) 
ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connections`
--

LOCK TABLES connections WRITE;
/*!40000 ALTER TABLE connections DISABLE KEYS */;
INSERT INTO connections VALUES (1,ff:ff:ff:ff:ff:ff, Center 'for' Disaster 'and' Humanitarian Assistance Medicine, igalope@cdham.com ,90210,0, 11:22:33:44:55:66,  Guest ,2014-04-17 15:46:31 , http://www.google.com/);
/*!40000 ALTER TABLE connections ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-02 12:12:07
CREATE TABLE auth (   
	FIRST_NAME  VARCHAR(40) NOT NULL,   
    LAST_NAME  VARCHAR(40),  
    ZIP_CODE INT,    
    EMAIL VARCHAR(40)   
    PRIMARY KEY (FIRST_NAME, LAST_NAME), 
    UNIQUE KEY (FIRST_NAME) 
    ) 
ENGINE=InnoDB 
AUTO_INCREMENT=2 
DEFAULT CHARSET=latin1
