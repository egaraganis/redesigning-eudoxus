Terminal close -- exit!
trib 8.0.13, for Linux (x86_64)
--
-- Host: localhost    Database: eudoxus
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `AccessPoints`
--

DROP TABLE IF EXISTS `AccessPoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `AccessPoints` (
  `idAccessPoint` int(11) NOT NULL,
  `brandName` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `address` varchar(64) NOT NULL,
  `map` varchar(512) NOT NULL,
  PRIMARY KEY (`idAccessPoint`),
  UNIQUE KEY `idAccessPoint_UNIQUE` (`idAccessPoint`),
  CONSTRAINT `fk_AccessPoint_User1` FOREIGN KEY (`idAccessPoint`) REFERENCES `Users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AccessPoints`
--

LOCK TABLES `AccessPoints` WRITE;
/*!40000 ALTER TABLE `AccessPoints` DISABLE KEYS */;
/*!40000 ALTER TABLE `AccessPoints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Announcements`
--

DROP TABLE IF EXISTS `Announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Announcements` (
  `idAnnouncement` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) DEFAULT NULL,
  `date` varchar(45) NOT NULL,
  PRIMARY KEY (`idAnnouncement`),
  UNIQUE KEY `idAnnouncement_UNIQUE` (`idAnnouncement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Announcements`
--

LOCK TABLES `Announcements` WRITE;
/*!40000 ALTER TABLE `Announcements` DISABLE KEYS */;
INSERT INTO `Announcements` VALUES (1,'Kostakis','Kostaki eisai para ma para poly hontros','07-01-2019'),(2,'Orestis','Den xereis mpasket vlaka parata to','08-01-2019'),(3,'Vaggos','Mathe orthografia epitelous','07-01-2019');
/*!40000 ALTER TABLE `Announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NotesProviders`
--

DROP TABLE IF EXISTS `NotesProviders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `NotesProviders` (
  `idNotesProvider` int(11) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `numOfNotes` int(11) NOT NULL,
  PRIMARY KEY (`idNotesProvider`),
  UNIQUE KEY `idNotesProvider_UNIQUE` (`idNotesProvider`),
  CONSTRAINT `fk_NotesProvider_User1` FOREIGN KEY (`idNotesProvider`) REFERENCES `Users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NotesProviders`
--

LOCK TABLES `NotesProviders` WRITE;
/*!40000 ALTER TABLE `NotesProviders` DISABLE KEYS */;
/*!40000 ALTER TABLE `NotesProviders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Publishers`
--

DROP TABLE IF EXISTS `Publishers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Publishers` (
  `idPublisher` int(11) NOT NULL,
  `brandName` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `website` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idPublisher`),
  UNIQUE KEY `idPublisher_UNIQUE` (`idPublisher`),
  CONSTRAINT `fk_Publisher_Users1` FOREIGN KEY (`idPublisher`) REFERENCES `Users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Publishers`
--

LOCK TABLES `Publishers` WRITE;
/*!40000 ALTER TABLE `Publishers` DISABLE KEYS */;
/*!40000 ALTER TABLE `Publishers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Students`
--

DROP TABLE IF EXISTS `Students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Students` (
  `idStudent` int(11) NOT NULL,
  `university` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `numOfReceivedBooks` int(11) NOT NULL,
  `numOfRemainingBooks` int(11) NOT NULL,
  `booksPoints` int(11) NOT NULL,
  PRIMARY KEY (`idStudent`),
  UNIQUE KEY `idStudent_UNIQUE` (`idStudent`),
  CONSTRAINT `fk_Student_Users` FOREIGN KEY (`idStudent`) REFERENCES `Users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Students`
--

LOCK TABLES `Students` WRITE;
/*!40000 ALTER TABLE `Students` DISABLE KEYS */;
/*!40000 ALTER TABLE `Students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserDepartments`
--

DROP TABLE IF EXISTS `UserDepartments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `UserDepartments` (
  `idUserDepartmnent` int(11) NOT NULL,
  `universityId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`idUserDepartmnent`),
  UNIQUE KEY `idDepartmentSecretary_UNIQUE` (`idUserDepartmnent`),
  CONSTRAINT `fk_UserDepartment_User1` FOREIGN KEY (`idUserDepartmnent`) REFERENCES `Users` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserDepartments`
--

LOCK TABLES `UserDepartments` WRITE;
/*!40000 ALTER TABLE `UserDepartments` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserDepartments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `idUsers_UNIQUE` (`idUser`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-07 17:59:22
