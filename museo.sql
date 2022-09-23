-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: new_project
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `atraccion`
--

DROP TABLE IF EXISTS `atraccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atraccion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(600) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `museo` varchar(130) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atraccion`
--

LOCK TABLES `atraccion` WRITE;
/*!40000 ALTER TABLE `atraccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `atraccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `Curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('1A'),('1B'),('1C'),('2A'),('2B'),('2C'),('3A'),('3B'),('3C'),('4M'),('4E'),('4P'),('5M'),('5E'),('5P'),('6M'),('6P'),('6E'),('7M'),('7E'),('7P');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elemento`
--

DROP TABLE IF EXISTS `elemento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elemento` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `imagen` varchar(256) NOT NULL,
  `stock` int(11) NOT NULL,
  `faltantes` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento`
--

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;
INSERT INTO `elemento` VALUES (17,'Destornillador','./imagenes_elementos/destornillador.png',15,9),(18,'Calibre','./imagenes_elementos/calibre.png',7,6),(19,'Sierra','./imagenes_elementos/sierra.png',14,1),(20,'Martillo','./imagenes_elementos/Martillo.png',13,12),(21,'123','./imagenes_elementos/index_pañol.png',0,0);
/*!40000 ALTER TABLE `elemento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `museo`
--

DROP TABLE IF EXISTS `museo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `museo` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(1200) NOT NULL,
  `imagen` varchar(600) NOT NULL,
  `ubicacion` varchar(600) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `museo`
--

LOCK TABLES `museo` WRITE;
/*!40000 ALTER TABLE `museo` DISABLE KEYS */;
INSERT INTO `museo` VALUES (1,'Museo123123','asdnasjkdnasji dnasjdn asnd kiasnd kiasnd jsadn kiasnd asj ','./imagenes_elementos/MER_DDBB.jpeg',''),(2,'Museo Artes','Terrible facha tiene este 6','./imagenes_elementos/index_pañol.png',''),(3,'adsasd','swe','./imagenes_elementos/MER_DDBB.jpeg',''),(4,'123','123','./imagenes_elementos/MER_DDBB.jpeg','123');
/*!40000 ALTER TABLE `museo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('Gino','1234','a@b.c'),('a','a','a@b.comco');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `elemento` varchar(60) NOT NULL,
  `fecha_generacion` datetime DEFAULT current_timestamp(),
  `nombre` varchar(60) DEFAULT NULL,
  `status` varchar(60) DEFAULT 'PENDING',
  `pañolero` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) NOT NULL,
  `fecha_devolucion` varchar(60) DEFAULT NULL,
  `fecha_estimada_devolucion` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (64,'1B',3,'Martillo','2022-08-26 01:06:04','Tomas','DEVUELTO','Gino','Shelby','31/08/22 01:04',''),(65,'4E',1,'Sierra','2022-08-26 01:06:28','Peepe','DEVUELTO','Gino','Juanes','01/09/22 11:22',''),(66,'4P',1,'Martillo','2022-08-26 01:06:39','Martillo','DEVUELTO','Gino','assasa','01/09/22 11:22',''),(67,'2B',2,'Calibre','2022-08-31 13:00:52','Javi','DEVUELTO','Gino','Santolla','01/09/22 11:22',''),(68,'4E',2,'Martillo','2022-08-31 13:01:08','Roro','DEVUELTO','Gino','Pirrorro','01/09/22 11:22',''),(69,'7E',2,'Martillo','2022-08-31 13:01:30','Insta','DEVUELTO','Gino','Burguer','31/08/22 01:04',''),(70,'4E',1,'Martillo','2022-08-31 13:05:31','Insta','DEVUELTO','Gino','Nashe','31/08/22 01:06',''),(71,'3B',1,'Destornillador','2022-08-31 13:05:51','Euge','DEVUELTO','Gino','Oller','01/09/22 11:22',''),(72,'4M',2,'Calibre','2022-08-31 13:06:07','Peter','DEVUELTO','Gino','Oller','01/09/22 11:22',''),(73,'5E',3,'Calibre','2022-09-01 21:41:58','1','DEVUELTO','Gino','1','01/09/22 11:22',''),(74,'5M',12,'Destornillador','2022-09-01 21:43:15','no guarda','DEVUELTO','Gino','1','01/09/22 11:22',''),(75,'5M',2,'Destornillador','2022-09-01 21:44:58','12','DEVUELTO','Gino','12','01/09/22 11:22',''),(76,'4M',1,'Destornillador','2022-09-01 23:23:25','123','DEVUELTO','Gino','123','02/09/22 01:03',''),(77,'1A',7,'Destornillador','2022-09-02 13:03:52','Fabri','DEVUELTO','Gino','Spadoni','02/09/22 01:25',''),(78,'1C',1,'Destornillador','2022-09-02 13:04:02','Pepe','DEVUELTO','Gino','Ocote','02/09/22 01:13',''),(79,'4P',2,'Destornillador','2022-09-02 13:04:12','Gino','PENDING','Gino','Spadoni',NULL,''),(80,'2A',5,'Destornillador','2022-09-02 13:04:42','Gino','PENDING','Gino','Speroni',NULL,''),(81,'4P',12,'Martillo','2022-09-02 13:09:43','Gino','PENDING','Gino','Spadoni',NULL,''),(82,'5E',1,'Sierra','2022-09-02 13:09:57','Gino','PENDING','Gino','Spadoni',NULL,''),(83,'5M',4,'Calibre','2022-09-02 13:16:40','123','PENDING','Gino','123',NULL,''),(84,'5P',1,'Calibre','2022-09-02 13:40:12','12','PENDING','Gino','312',NULL,''),(85,'5M',1,'Calibre','2022-09-02 13:46:14','12','PENDING','Gino','1212',NULL,''),(86,'5M',1,'Destornillador','2022-09-02 14:50:31','1','PENDING','Gino','1',NULL,''),(87,'7M',1,'Destornillador','2022-09-02 15:01:04','Gino','PENDING','Gino','Spadoni',NULL,'16:03');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-22 20:07:52
