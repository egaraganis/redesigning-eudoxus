CREATE DATABASE  IF NOT EXISTS `eudoxus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eudoxus`;
-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: eudoxus
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `AccessPoints`
--

DROP TABLE IF EXISTS `AccessPoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `Books`
--

DROP TABLE IF EXISTS `Books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Books` (
  `idBook` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `subtitle` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `situation` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `dimensions` varchar(45) NOT NULL,
  `firstYearPublished` int(11) NOT NULL,
  `pricetag` int(11) NOT NULL,
  `coverPage` varchar(256) DEFAULT NULL,
  `backPage` varchar(256) DEFAULT NULL,
  `contentArray` varchar(256) DEFAULT NULL,
  `exampleSnippet` varchar(256) DEFAULT NULL,
  `publisherId` int(11) NOT NULL,
  `lessonId` int(11) DEFAULT NULL,
  `accessPointId1` int(11) NOT NULL,
  `accessPointId2` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBook`),
  UNIQUE KEY `idBook_UNIQUE` (`idBook`),
  KEY `fk_Books_1_idx` (`publisherId`),
  KEY `fk_Books_2_idx` (`lessonId`),
  KEY `fk_Books_3_idx` (`accessPointId1`),
  KEY `fk_Books_4_idx` (`accessPointId2`),
  CONSTRAINT `fk_Books_1` FOREIGN KEY (`publisherId`) REFERENCES `Publishers` (`idPublisher`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Books_2` FOREIGN KEY (`lessonId`) REFERENCES `Lessons` (`idLesson`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Books_3` FOREIGN KEY (`accessPointId1`) REFERENCES `AccessPoints` (`idAccessPoint`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Books_4` FOREIGN KEY (`accessPointId2`) REFERENCES `AccessPoints` (`idAccessPoint`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Books`
--

LOCK TABLES `Books` WRITE;
/*!40000 ALTER TABLE `Books` DISABLE KEYS */;
/*!40000 ALTER TABLE `Books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departments`
--

DROP TABLE IF EXISTS `Departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Departments` (
  `idDepartment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `universityId` int(11) NOT NULL,
  PRIMARY KEY (`idDepartment`),
  UNIQUE KEY `idDepartments_UNIQUE` (`idDepartment`),
  KEY `fk_Departments_1_idx` (`universityId`),
  CONSTRAINT `fk_Departments_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departments`
--

LOCK TABLES `Departments` WRITE;
/*!40000 ALTER TABLE `Departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `Departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lessons`
--

DROP TABLE IF EXISTS `Lessons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lessons` (
  `idLesson` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `semesterId` int(11) NOT NULL,
  PRIMARY KEY (`idLesson`),
  UNIQUE KEY `idLesson_UNIQUE` (`idLesson`),
  KEY `fk_Lessons_1_idx` (`semesterId`),
  CONSTRAINT `fk_Lessons_1` FOREIGN KEY (`semesterId`) REFERENCES `Semesters` (`idSemester`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lessons`
--

LOCK TABLES `Lessons` WRITE;
/*!40000 ALTER TABLE `Lessons` DISABLE KEYS */;
/*!40000 ALTER TABLE `Lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notes`
--

DROP TABLE IF EXISTS `Notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Notes` (
  `idNote` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `content` varchar(256) NOT NULL,
  `coverPage` varchar(256) DEFAULT NULL,
  `noteProviderId` int(11) NOT NULL,
  `lessonId` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNote`),
  UNIQUE KEY `idNote_UNIQUE` (`idNote`),
  KEY `fk_Notes_1_idx` (`noteProviderId`),
  KEY `fk_Notes_2_idx` (`lessonId`),
  CONSTRAINT `fk_Notes_1` FOREIGN KEY (`noteProviderId`) REFERENCES `NotesProviders` (`idNotesProvider`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Notes_2` FOREIGN KEY (`lessonId`) REFERENCES `Lessons` (`idLesson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notes`
--

LOCK TABLES `Notes` WRITE;
/*!40000 ALTER TABLE `Notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NotesProviders`
--

DROP TABLE IF EXISTS `NotesProviders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `Semesters`
--

DROP TABLE IF EXISTS `Semesters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Semesters` (
  `idSemester` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `departmentId` int(11) NOT NULL,
  PRIMARY KEY (`idSemester`),
  UNIQUE KEY `idSemester_UNIQUE` (`idSemester`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_Semesters_1_idx` (`departmentId`),
  CONSTRAINT `fk_Semesters_1` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Semesters`
--

LOCK TABLES `Semesters` WRITE;
/*!40000 ALTER TABLE `Semesters` DISABLE KEYS */;
/*!40000 ALTER TABLE `Semesters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Students`
--

DROP TABLE IF EXISTS `Students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Students` (
  `idStudent` int(11) NOT NULL,
  `universityId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `numOfReceivedBooks` int(11) NOT NULL,
  `numOfRemainingBooks` int(11) NOT NULL,
  `booksPoints` int(11) NOT NULL,
  PRIMARY KEY (`idStudent`),
  UNIQUE KEY `idStudent_UNIQUE` (`idStudent`),
  KEY `fk_Students_1_idx` (`universityId`),
  KEY `fk_Students_2_idx` (`departmentId`),
  CONSTRAINT `fk_Student_Users` FOREIGN KEY (`idStudent`) REFERENCES `Users` (`iduser`),
  CONSTRAINT `fk_Students_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Students_2` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
-- Table structure for table `Universities`
--

DROP TABLE IF EXISTS `Universities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Universities` (
  `idUniversity` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`idUniversity`),
  UNIQUE KEY `idUniversity_UNIQUE` (`idUniversity`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Universities`
--

LOCK TABLES `Universities` WRITE;
/*!40000 ALTER TABLE `Universities` DISABLE KEYS */;
/*!40000 ALTER TABLE `Universities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserDepartments`
--

DROP TABLE IF EXISTS `UserDepartments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserDepartments` (
  `idUserDepartmnent` int(11) NOT NULL,
  `universityId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`idUserDepartmnent`),
  UNIQUE KEY `idDepartmentSecretary_UNIQUE` (`idUserDepartmnent`),
  KEY `fk_UserDepartments_1_idx` (`universityId`),
  KEY `fk_UserDepartments_2_idx` (`departmentId`),
  CONSTRAINT `fk_UserDepartment_User1` FOREIGN KEY (`idUserDepartmnent`) REFERENCES `Users` (`iduser`),
  CONSTRAINT `fk_UserDepartments_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_UserDepartments_2` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
/*!40101 SET character_set_client = utf8 */;
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

-- Dump completed on 2019-01-07 20:34:35
