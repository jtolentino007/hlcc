CREATE DATABASE  IF NOT EXISTS `hlcc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hlcc`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: hlcc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(55) DEFAULT NULL,
  `group_description` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(55) DEFAULT NULL,
  `mname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0',
  `school` int(11) DEFAULT '0',
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(55) DEFAULT NULL,
  `school_description` varchar(120) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitors` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_fname` varchar(55) DEFAULT NULL,
  `visitor_mname` varchar(55) DEFAULT NULL,
  `visitor_lname` varchar(55) DEFAULT NULL,
  `visitor_address` varchar(120) DEFAULT NULL,
  `visitor_contact_no` varchar(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-05  9:35:48
