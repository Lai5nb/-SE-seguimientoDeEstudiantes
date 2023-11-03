-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: se_seguimiento_de_estudiantes
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `periodo_has_carrera`
--

DROP TABLE IF EXISTS `periodo_has_carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periodo_has_carrera` (
  `Periodo_IdPeriodo` int NOT NULL,
  `Carrera_IdCarrera` int NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`Periodo_IdPeriodo`,`Carrera_IdCarrera`,`id`),
  KEY `fk_Periodo_has_Carrera_Carrera1_idx` (`Carrera_IdCarrera`),
  KEY `fk_Periodo_has_Carrera_Periodo1_idx` (`Periodo_IdPeriodo`),
  CONSTRAINT `fk_Periodo_has_Carrera_Carrera1` FOREIGN KEY (`Carrera_IdCarrera`) REFERENCES `carrera` (`IdCarrera`),
  CONSTRAINT `fk_Periodo_has_Carrera_Periodo1` FOREIGN KEY (`Periodo_IdPeriodo`) REFERENCES `periodo` (`IdPeriodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo_has_carrera`
--

LOCK TABLES `periodo_has_carrera` WRITE;
/*!40000 ALTER TABLE `periodo_has_carrera` DISABLE KEYS */;
INSERT INTO `periodo_has_carrera` VALUES (1,1,1);
/*!40000 ALTER TABLE `periodo_has_carrera` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-03  5:29:54
