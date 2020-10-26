-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackgames
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'consoles','Playstation 5',5990,4600,'images/ps5.jpg'),(2,'consoles','Playstation 4',2990,2400,'images/ps4.jpg'),(3,'consoles','Xbox series X',5990,4990,'images/seriesX.jpg'),(4,'consoles','Xbox series S',3990,2990,'images/seriesS.jpg'),(5,'consoles','Xbox one',2990,2400,'images/one.jpg'),(6,'jogos','Demon Souls Ps5',399,349,'images/dsPs5.jpg'),(7,'jogos','Spider man PS5',399,349,'images/spPs5.jpg'),(8,'jogos','Sackboy Ps5',319,299,'images/scPs5.jpg'),(9,'jogos','Cyberpunk 2077 Ps4',299,249,'images/cyPs4.jpg'),(10,'jogos','Red dead redemption 2 Xbox one',199,149,'images/rd2Xbox.jpg'),(11,'jogos','Project cars 3 Xbox one',199,169,'images/pc3Xbox.jpg'),(12,'acessorios','Controle Xbox series',599,499,'images/controleXboxSeries.jpg'),(13,'acessorios','Controle Ps5',599,499,'images/controlePs5.jpg'),(14,'acessorios','headset Ps5',699,599,'images/headsetPs5.jpg'),(15,'pc','Pc gamer 16gb Gtx 1650',7499,6790,'images/pcgamer.jpg'),(16,'pc','Notebook gamer Asus 8gb Gtx 1050',5990,4990,'images/ngamer.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26  9:19:36
