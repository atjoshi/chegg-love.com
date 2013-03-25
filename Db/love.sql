-- MySQL dump 10.13  Distrib 5.1.44, for apple-darwin8.11.1 (i386)
--
-- Host: 127.0.0.1    Database: love
-- ------------------------------------------------------
-- Server version	5.1.44

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
-- Table structure for table `brand_charities`
--

DROP TABLE IF EXISTS `brand_charities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_charities` (
  `brand_charity_id` varchar(38) NOT NULL,
  `brand_user_id` varchar(38) DEFAULT NULL,
  `charity_id` varchar(38) DEFAULT NULL COMMENT 'this list contains charities supported by brands',
  `is_active` binary(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brand_charity_id`),
  UNIQUE KEY `brand_charity_id_UNIQUE` (`brand_charity_id`),
  KEY `ix_brand_user_id` (`brand_user_id`),
  KEY `ix_charity_id` (`charity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_charities`
--

LOCK TABLES `brand_charities` WRITE;
/*!40000 ALTER TABLE `brand_charities` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand_charities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `celebrity_charities`
--

DROP TABLE IF EXISTS `celebrity_charities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `celebrity_charities` (
  `celebrity_charity_id` varchar(38) NOT NULL,
  `celebrity_user_id` varchar(38) DEFAULT NULL,
  `charity_id` varchar(38) DEFAULT NULL,
  `is_active` binary(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`celebrity_charity_id`),
  UNIQUE KEY `celebrity_charity_id_UNIQUE` (`celebrity_charity_id`),
  KEY `ix_celebrity_user_id` (`celebrity_user_id`),
  KEY `ix_charity_id` (`charity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `celebrity_charities`
--

LOCK TABLES `celebrity_charities` WRITE;
/*!40000 ALTER TABLE `celebrity_charities` DISABLE KEYS */;
/*!40000 ALTER TABLE `celebrity_charities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `charities`
--

DROP TABLE IF EXISTS `charities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charities` (
  `charity_id` varchar(36) NOT NULL,
  `charity_name` varchar(64) DEFAULT NULL,
  `charity_metadata` text,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`charity_id`),
  UNIQUE KEY `charity_id_UNIQUE` (`charity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charities`
--

LOCK TABLES `charities` WRITE;
/*!40000 ALTER TABLE `charities` DISABLE KEYS */;
/*!40000 ALTER TABLE `charities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_charity`
--

DROP TABLE IF EXISTS `user_charity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_charity` (
  `user_charity_id` varchar(36) NOT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `charity_id` varchar(36) DEFAULT NULL,
  `user_loved_item_id` varchar(38) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_charity_id`),
  KEY `ix_user_id` (`user_id`),
  KEY `ix_charity_id` (`charity_id`),
  KEY `ix_created_date` (`created_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_charity`
--

LOCK TABLES `user_charity` WRITE;
/*!40000 ALTER TABLE `user_charity` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_charity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_loved_items`
--

DROP TABLE IF EXISTS `user_loved_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_loved_items` (
  `user_loved_item_id` varchar(38) NOT NULL,
  `user_id` varchar(38) DEFAULT NULL,
  `loved_item_user_id` varchar(38) DEFAULT NULL,
  `is_active` binary(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_loved_item_id`),
  UNIQUE KEY `user_loved_item_id_UNIQUE` (`user_loved_item_id`),
  KEY `ix_user_id` (`user_id`),
  KEY `ix_loved_item_user_id` (`loved_item_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_loved_items`
--

LOCK TABLES `user_loved_items` WRITE;
/*!40000 ALTER TABLE `user_loved_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_loved_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` varchar(40) NOT NULL,
  `login_email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `user_category` varchar(32) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  KEY `ix_login_email` (`login_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-24 22:49:11
