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
-- Table structure for table `periodo_has_maestro`
--

DROP TABLE IF EXISTS `periodo_has_maestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periodo_has_maestro` (
  `Periodo_IdPeriodo` int NOT NULL,
  `Maestro_MatriculaMestro` int NOT NULL,
  `Id` int NOT NULL,
  PRIMARY KEY (`Periodo_IdPeriodo`,`Maestro_MatriculaMestro`,`Id`),
  KEY `fk_Periodo_has_Maestro_Maestro1_idx` (`Maestro_MatriculaMestro`),
  KEY `fk_Periodo_has_Maestro_Periodo1_idx` (`Periodo_IdPeriodo`),
  CONSTRAINT `fk_Periodo_has_Maestro_Maestro1` FOREIGN KEY (`Maestro_MatriculaMestro`) REFERENCES `maestro` (`MatriculaMestro`),
  CONSTRAINT `fk_Periodo_has_Maestro_Periodo1` FOREIGN KEY (`Periodo_IdPeriodo`) REFERENCES `periodo` (`IdPeriodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo_has_maestro`
--

LOCK TABLES `periodo_has_maestro` WRITE;
/*!40000 ALTER TABLE `periodo_has_maestro` DISABLE KEYS */;
INSERT INTO `periodo_has_maestro` VALUES (1,1578,1);
/*!40000 ALTER TABLE `periodo_has_maestro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-03  5:29:55
