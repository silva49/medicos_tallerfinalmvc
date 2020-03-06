-- MySQL dump 10.12
--
-- Host: localhost    Database: bdhospital
-- ------------------------------------------------------
-- Server version	6.0.0-alpha-community-nt-debug

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
-- Table structure for table `tblgenero`
--

DROP TABLE IF EXISTS `tblgenero`;
CREATE TABLE `tblgenero` (
  `idgenero` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idgenero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgenero`
--

LOCK TABLES `tblgenero` WRITE;
/*!40000 ALTER TABLE `tblgenero` DISABLE KEYS */;
INSERT INTO `tblgenero` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `tblgenero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhistorias`
--

DROP TABLE IF EXISTS `tblhistorias`;
CREATE TABLE `tblhistorias` (
  `idhistoria` int(10) NOT NULL,
  `paciente` int(20) NOT NULL,
  `medico` int(20) NOT NULL,
  `observacion` text NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idhistoria`),
  KEY `paciente` (`paciente`),
  KEY `medico` (`medico`),
  CONSTRAINT `tblhistorias_ibfk_2` FOREIGN KEY (`medico`) REFERENCES `tblmedicos` (`numerodocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tblhistorias_ibfk_1` FOREIGN KEY (`paciente`) REFERENCES `tblpacientes` (`numerodocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhistorias`
--

LOCK TABLES `tblhistorias` WRITE;
/*!40000 ALTER TABLE `tblhistorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblhistorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmedicos`
--

DROP TABLE IF EXISTS `tblmedicos`;
CREATE TABLE `tblmedicos` (
  `numerodocumento` int(20) NOT NULL,
  `tipodoc` int(3) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`numerodocumento`),
  KEY `tipodoc` (`tipodoc`),
  CONSTRAINT `tblmedicos_ibfk_1` FOREIGN KEY (`tipodoc`) REFERENCES `tbltipodocumento` (`idtipodoc`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicos`
--

LOCK TABLES `tblmedicos` WRITE;
/*!40000 ALTER TABLE `tblmedicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblmedicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpacientes`
--

DROP TABLE IF EXISTS `tblpacientes`;
CREATE TABLE `tblpacientes` (
  `numerodocumento` int(20) NOT NULL,
  `tipodoc` int(3) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` int(3) NOT NULL,
  `edad` int(3) DEFAULT NULL,
  PRIMARY KEY (`numerodocumento`),
  KEY `tipodoc` (`tipodoc`),
  KEY `genero` (`genero`),
  CONSTRAINT `tblpacientes_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `tblgenero` (`idgenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tblpacientes_ibfk_1` FOREIGN KEY (`tipodoc`) REFERENCES `tbltipodocumento` (`idtipodoc`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpacientes`
--

LOCK TABLES `tblpacientes` WRITE;
/*!40000 ALTER TABLE `tblpacientes` DISABLE KEYS */;
INSERT INTO `tblpacientes` VALUES (1017213395,1,'victor','Echavarria',1,26);
/*!40000 ALTER TABLE `tblpacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltipodocumento`
--

DROP TABLE IF EXISTS `tbltipodocumento`;
CREATE TABLE `tbltipodocumento` (
  `idtipodoc` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idtipodoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltipodocumento`
--

LOCK TABLES `tbltipodocumento` WRITE;
/*!40000 ALTER TABLE `tbltipodocumento` DISABLE KEYS */;
INSERT INTO `tbltipodocumento` VALUES (1,'CC'),(2,'T.I'),(3,'NIT');
/*!40000 ALTER TABLE `tbltipodocumento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-01 20:33:41
