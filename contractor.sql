-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: contractor
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `Surname` char(15) NOT NULL,
  `Forename` char(15) NOT NULL,
  `Address1` char(15) NOT NULL,
  `Address2` char(15) DEFAULT NULL,
  `Town` char(15) NOT NULL,
  `County` char(8) DEFAULT NULL,
  `Email` char(25) NOT NULL,
  `Telephone` char(10) NOT NULL,
  `Password` char(16) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Hayes','Sean','','na','Milltown','Kerry','','0',''),(3,'Reilly','Hayes','Lyre','','Milltown','Kerry','','0',''),(4,'Hayes','Sean','abc123','','Milltown','Kerry','sean@gmail.com','861615217','abc123'),(18,'Reilly','John','Killtalagh','','','Kerry','johnflynn@gmail.com','0669765541','hello1'),(19,'Graeme','Frank','world','Lower Street','Killarney','Kerry','fg@yahoo.com','98765432','world'),(20,'','','','','','','','',''),(24,'','John','Colbane','Fossa','Killarney','Kerry','jdineen','12345678','helloworld');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materials` (
  `MaterialId` int(11) NOT NULL AUTO_INCREMENT,
  `Material` char(9) NOT NULL,
  `PriceTon` decimal(4,2) NOT NULL,
  `Tons` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`MaterialId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,'Limestone',15.00,9919.99),(2,'Sand',12.55,5292.50),(3,'Gravel',13.45,8428.00);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL AUTO_INCREMENT,
  `Tons` decimal(4,2) NOT NULL,
  `TotalCost` decimal(4,2) NOT NULL,
  `Type` char(9) NOT NULL,
  `Date` date NOT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderId`),
  KEY `CustomerId` (`CustomerId`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customers` (`CustomerId`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,20.00,99.99,'gravel','2003-04-12',4),(17,8.25,99.99,'','0000-00-00',NULL),(29,0.25,3.75,'limestone','2012-09-04',NULL),(31,20.00,99.99,'sand','2014-11-12',4),(32,3.00,0.00,'gravel','2014-12-17',4),(33,3.00,0.00,'gravel','2014-12-17',4),(34,3.00,40.35,'gravel','2014-12-17',4),(35,3.00,40.35,'gravel','2014-05-06',4),(36,7.50,99.99,'gravel','2014-05-06',1),(37,28.00,99.99,'gravel','0000-00-00',4),(38,28.00,99.99,'gravel','0000-00-00',4),(39,12.00,99.99,'limestone','0000-00-00',1),(40,6.00,90.00,'limestone','2014-05-06',1),(41,3.00,45.00,'limestone','2014-05-06',1),(42,3.00,45.00,'limestone','2014-05-06',1),(43,0.50,6.28,'sand','2014-05-06',3),(44,66.00,99.99,'gravel','2014-05-06',3),(45,66.00,99.99,'gravel','2014-05-06',3),(46,66.00,99.99,'gravel','2014-05-06',3),(47,66.00,99.99,'sand','2014-05-06',1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-17 20:54:42
