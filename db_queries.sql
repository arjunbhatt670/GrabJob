-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: jobportal
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `adm_id` int NOT NULL AUTO_INCREMENT,
  `adm_name` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (4,'qwerty','$2y$10$Ovw6Q3J7EeFPpn2Q3ZS/Ie3NPFT/uqkD7fzIxuY.YvGz84TNXDb6C'),(5,'ljk','$2y$10$y7azDCfXTOnaHzUFTHrFpec1byLiaNU3nsg2Xm5Wmz5HzWOEIV2Ba'),(6,'sdxfcvbn','$2y$10$N6ky6MaVd/tWp4RMOGmGPekHp3V2eCaG5kxyd3WS8jWnzpGoM0zyS'),(7,'123','$2y$10$SxkTVcTUHYF8yMefnOcQ1e3wtlqvDjIFDJX4piNH8JX4yWWbs1u9S');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobseeker`
--

DROP TABLE IF EXISTS `jobseeker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobseeker` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `log_id` int DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `sd` varchar(255) DEFAULT NULL,
  `emp_comp` varchar(255) DEFAULT NULL,
  `ctc` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `log_id` (`log_id`),
  CONSTRAINT `fk_login` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobseeker`
--

LOCK TABLES `jobseeker` WRITE;
/*!40000 ALTER TABLE `jobseeker` DISABLE KEYS */;
INSERT INTO `jobseeker` VALUES (7,14,'Akshay V K','7894561231',NULL,'Akshay V K7.jpg',NULL,NULL,NULL,NULL,NULL),(8,20,'Sreelal C','8943202726','Sreelal C8.docx','Sreelal C8.JPG',NULL,NULL,NULL,NULL,NULL),(9,21,'abc','1234567890',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,22,'jishnu k s','9526919061',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,24,'as','9879789456','as11.docx','as11.JPG','2020/12/06','2020/12/06','dfgh','Rs 4500','7 above'),(12,35,'Arjun bhatt','9105752709',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,38,'Arjun bhatt','9105752709',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,43,'asdfg','9999999999',NULL,'asdfg15.png',NULL,NULL,NULL,NULL,NULL),(16,44,'q','9999999999','q16.pdf',NULL,'2020/12/06','2020/12/01','xdcfbvnb','Rs 25000','3'),(17,45,'Arjun Bhatt','9105752709','Arjun Bhatt17.pdf','Arjun Bhatt17.jpg',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `jobseeker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `email` (`email`),
  KEY `log_id` (`log_id`),
  KEY `log_id_2` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (14,'akshay@gmail.com','$2y$10$3/cBmurjZzBYUkaLYE.Y..skkTdBT/YVCZb51Q3yWx73xd.Eyr13e'),(18,'info@infosys.com','$2y$10$/TP7ishP6SRCroPNfWcVqO1V0mMH47X.Qsft1u/Ed9xFtmietk2ga'),(20,'sreelal.c@live.com','$2y$10$MfycE3o6lgrM92f5sB8kPu7c38XQkT6FeL5YF3pgx/MM/Jy12xM5i'),(21,'abc@gmail.com','$2y$10$ZWYhKrFT9B9m0CaysgRy5e1XMZ/e130v0LGkqw4QpkXbJ3WIV.YYe'),(22,'jishnnuks@live.com','$2y$10$VKC/bSdNBZWJ6PrOwnJ6xezAj1aq5VioW9YjFUsjxnAJHUkZHRWBq'),(23,'info@microsoft.com','$2y$10$q.xafcSTYUoKtz2FIhrf7OX1x0weMZRzY3beiqoO2NGe0PUKJlzga'),(24,'arjunbhatt670@gmail.com','$2y$10$fvGdcQNxkeMwzlPVEcews.2RWCzVAfAnbY.TuT87mNviFmCx.fBGe'),(30,'asd@123.com','$2y$10$jT9IyHAFukAnFnR3/9QZC.HpkPm/zAQyK0SW5wGIiNUMKoVb36j5i'),(34,'p@1.com','$2y$10$ekYHAILyg5OHFBGnvrurJeLCzFoUsIlcaXP2FkynxUD2FjwGiuafC'),(35,'arjunbhatt670@gmal.com','$2y$10$AWI7ne7hZwPFuEd0NqMJwO2cOC60TwEUue5.x58847DW..DGJIt6a'),(38,'awe@as.com','$2y$10$i8KiRNhQuqHQ.7/DFVwZA.pSW8HotQNTOoUvgpqFLxQW88AvQsuYC'),(43,'abc456@gmail.com','$2y$10$VRF61Bj3D30znWW1HTeNVuYaV/2zdkLIoi6oSzqKFbIM0vZooXtUi'),(44,'qwe@123.com','$2y$10$fhMwRs4tpJPi01sme0Rst.ZfBT/xfhbENEaIe.8aK4YWu6VIP8f.2'),(45,'arjun.1822cs1040@kiet.edu','$2y$10$hc8onlmb9PvZa6pKYOc85ujvyOm/w.fHHYZXX9Q47gRfwuOPU7YUC');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-23 22:42:27
