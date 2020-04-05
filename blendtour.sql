-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: localhost    Database: blendtour
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Aventura'),(2,'Cidades'),(3,'Gastronomia'),(4,'Histórico Cultural'),(5,'Natureza'),(6,'Vida Noturna');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencias`
--

DROP TABLE IF EXISTS `experiencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experiencias` (
  `id_experiencia` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `local` varchar(300) DEFAULT NULL,
  `imagem` varchar(500) DEFAULT NULL,
  `fk_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_experiencia`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencias`
--

LOCK TABLES `experiencias` WRITE;
/*!40000 ALTER TABLE `experiencias` DISABLE KEYS */;
INSERT INTO `experiencias` VALUES (1,'Rafting','Corredeiras, alta velocidade, adrenalina e aquele banho te esperam em Brotas-SP. Experimente esse circuito de rafting imperdível',178.5,'Brotas-SP','/Galeria/imageDB/Aventura/expadv2.png',1),(2,'Mountain Bike','Curta essa trilha off-road de Mountain Bike pelo Cerrado Brasileiro',195.5,'Goiás','/Galeria/imageDB/Aventura/expadv1.png',1),(3,'Paraglider','Passeios de paraglider do alto da Pedra Grande, em Atibaia - São Paulo',250,'Atibaia - SP','/Galeria/imageDB/Aventura/expadv3.png',1),(4,'Balonismo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',319,'Boituva-SP','/Galeria/imageDB/Aventura/expadv3.png',1),(5,'Asa Delta','Planar entre o céu azul e o mar transparente, faz da paisagem do Rio uma experiência emocionante',599.99,'Pedra da Gávea - Rio de Janeiro','/Galeria/imageDB/Aventura/asadelta.jpg',1),(6,'Rio de Janeiro','Praias, samba, calor, venha conhecer todos os encantos da cidade maravilhosa e tudo o que ela tem a oferecer',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid1.png',2),(7,'São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/saopaulo.jpg',2),(8,'Curitiba','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/curitiba.jpg',2),(9,'Salvador','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/salvador.png',2),(10,'Recife','Não perca essa oportunidade de se aventurar pelas praias do Nordeste brasileiro e conhecer a \"Veneza brasileira\"',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid2.png',2),(11,'Florianópolis','Um dos destinos de mais alto luxo no Brasil te espera de braços abertos',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(12,'Natal','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(13,'Fortaleza','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(14,'Culinária Típica','Que tal experimentar este prato que tem a cara do Brasil e é apreciado por milhões de pessoas no páis inteiro ?',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/feijoada.jpg',3),(15,'Doces Típicos','Para aqueles loucos por doces, que tal experimentar a sobremesa preferida dos brasileiros, o brigadeiro!',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast2.png',3),(16,'Mercado Municipal São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast2.png',3),(17,'Mercado Ver o Peso - Belém','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast1.png',3),(18,'Salgados','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast3.png',3),(19,'Bebidas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot1.png',3),(20,'Carnaval de Rua São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',80,'Bairro da Vila Madelena - São Paulo','/Galeria/imageDB/Vida Noturna/expnot1.png',4),(21,'Carnaval Rio de Janeiro','Caia no samba na Marquês de Sapucaí e viva esta festa de perto, aproveitando cada momento com toda alegria e descontração que esse evento pode oferecer',800,'Marquês de Sapucaí - Rio de Janeiro','/Galeria/imageDB/Historico Cultural/expcult1.png',4),(22,'Festa Junina Nordeste','Se divirta com brincadeiras, música típicas e muita comida boa, nessa que é uma das festas mais populares do Brasil',400,'Campina Grande - PB','/Galeria/imageDB/Historico Cultural/expcult2.png',4),(23,'Museus São Paulo','Conheça um pouco da história e cultura da maior metrópole da América Latina',250,'Ponto de Enconto: Av. Paulista, 1578 - Vão Livre','/Galeria/imageDB/Historico Cultural/teatro_municipal_SP_interno.jpg',4),(24,'Museus Rio de Janeiro','Moderníssimo museu inaugurado para os Jogos Olímpicos do Rio de Janeiro, trazendo uma experiência sensorial, a começar pelo seu belíssimo design',250,'Ponto de Enconto:','/storage/uploads/expcult3.png',4),(25,'Museu Inhotim - Belo Horizonte','Lorem Ipsum is simply dummy text of the printing and typesetting industry',250,'Ponto de Enconto: Rua B, 20 Fazenda Inhotim, Brumadinho','/Galeria/imageDB/Historico Cultural/expcult3.png',4),(26,'Foz do Iguaçú','Conheça as famosas Cataratas do Iguaçú, na tríplice fronteira entre Brasil, Argentina e Paraguai.',350,'Ponto de Enconto: BR 469, KM 18 - Em frente ao Parque das Cataratas','/Galeria/imageDB/Natureza/expnat1.png',5),(27,'Floresta Amazônica','Lorem Ipsum is simply dummy text of the printing and typesetting industry',950,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat2.png',5),(28,'Cachoeiras','Lorem Ipsum is simply dummy text of the printing and typesetting industry',650,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat3.png',5),(29,'Trilhas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',200,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat3.png',5),(30,'Bares e Casas Noturnas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot1.png',6),(31,'Vida Noturna São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto: Rua Augusta x Avenida Paulista','/Galeria/imageDB/Vida Noturna/expnot3.png',6),(32,'Vida Noturna Rio de Janeiro','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot2.png',6);
/*!40000 ALTER TABLE `experiencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pedido`
--

DROP TABLE IF EXISTS `item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_pedido` (
  `id_item_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id_pedido` int(11) NOT NULL,
  `produto_id_experiencia` int(11) DEFAULT NULL,
  `quantidade` int(3) DEFAULT NULL,
  `preco` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_item_pedido`),
  KEY `fk_pedido` (`pedido_id_pedido`),
  KEY `item_pedido_ibfk_2` (`produto_id_experiencia`),
  CONSTRAINT `item_pedido_ibfk_1` FOREIGN KEY (`pedido_id_pedido`) REFERENCES `pedido` (`id_pedido`),
  CONSTRAINT `item_pedido_ibfk_2` FOREIGN KEY (`produto_id_experiencia`) REFERENCES `experiencias` (`id_experiencia`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
INSERT INTO `item_pedido` VALUES (1,1,NULL,NULL,NULL),(2,11,27,2,950.00),(3,11,1,1,178.50),(4,12,2,1,195.50),(5,12,24,2,250.00),(6,13,3,1,250.00),(7,13,11,1,150.00),(8,13,19,2,150.00),(9,14,3,1,250.00),(10,14,11,1,150.00),(11,14,19,2,150.00),(12,15,3,1,250.00),(13,15,11,1,150.00),(14,15,19,2,150.00),(15,16,2,1,195.50),(16,16,24,2,250.00),(17,17,2,1,195.50),(18,17,24,2,250.00),(19,18,18,1,150.00),(20,18,22,2,400.00),(21,19,2,2,195.50),(22,20,10,2,150.00),(23,20,1,1,178.50),(24,21,18,2,150.00),(25,21,27,1,950.00),(26,22,18,1,150.00),(27,23,18,1,150.00),(28,24,18,1,150.00),(29,24,2,1,195.50),(30,25,18,1,150.00),(31,25,2,1,195.50),(32,26,18,1,150.00),(33,26,2,1,195.50),(34,27,1,2,178.50),(35,28,24,1,250.00);
/*!40000 ALTER TABLE `item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  `total` double(10,2) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `identify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'Reservado',1,NULL,NULL,NULL),(2,'started',1,682.50,'PAYID-LZ4RXVQ5DN4718057825090T','$2y$10$buyvucKqYemPzYHNcyvGe.n6qB9GOynRBQdEc6AQDYMHRKbyUJgu6'),(3,'approved',1,997.50,'PAYID-LZ5BCZI5HP62177GY560822U','$2y$10$vk/iHJFMM7QPgZ9dBMEWjO/8.N6XB1vYP98rDbpUcAs9DAhbfFLHS'),(4,'started',1,1995.00,'PAYID-LZ5CCCI4UU89391M1777064M','$2y$10$3GYiOMjU54etPvyQcy6VCO4pU/z4IcKRcHammQAmCaNtb1ssidYDC'),(6,'started',1,2182.43,'PAYID-LZ5CDAI7KN74021XP970342H','$2y$10$1mRHeX0GAl1ppGquwuho/OjsMpVrv9t1pQA1WFuSCXphHIdSu7yBm'),(7,'started',1,2182.43,'PAYID-LZ5CDJQ6CH98246WU487680V','$2y$10$sOJSIDwoNghGUu1mBmnLH./eb9JZ4Va4FvQ8stBI04q1QJZne8JAa'),(8,'started',1,2182.43,'PAYID-LZ5CE7I3UG72681GG2690649','$2y$10$7JeQPpcL2/4Ci0GZM75Mm.ovvS5ogFiaU0EHYb/DLfZjil2vDhKze'),(9,'started',1,2182.43,'PAYID-LZ5CFCY5KV38724CV522135A','$2y$10$Ofr2VEWck33kaB3iaOh.0ulvjJMur7adhg9MKWAQuEhONlxAqr/t6'),(10,'started',1,2182.43,'PAYID-LZ5CFTQ0U703058D5073551J','$2y$10$iAbSo5D2qO1l9lRC0uUQweINLSuQLWuoCRnYZG9G.EaUtl8s5TXp6'),(11,'approved',1,2182.43,'PAYID-LZ5CGMQ9RF65701L1053981H','$2y$10$o5ywUoRzalzDdXFp7E3eiOmu2z5xfHhlzk5kZlm7m03vAo99YR0jy'),(12,'approved',1,730.27,'PAYID-LZ5C2OI4J350618H9025651E','$2y$10$ct6Ofx0/RuD0vRdWVxgviutdxVj6ePFMvbEyViWu82amua3OCTQyW'),(13,'started',1,735.00,'PAYID-LZ5DC7Y9V03987632056313F','$2y$10$WkLUBNZ6p4ifIW4LlRK6DOJ1D3dZgK4LYI/3o.Yii4QbIy4WTxEeS'),(14,'started',1,735.00,'PAYID-LZ5DGFA6BW95075UY682371R','$2y$10$coUBNmy6S1uqYZsWFcbpiu8MDpHphMoRzLJHFiUdS8vqxzqds8LZS'),(15,'started',1,735.00,'PAYID-LZ5DLWY69C01419MA788141T','$2y$10$qyUE3gkHKpUDXraCWC3ed.Q5yXy6E6cdQp6ZoisOyvJ4yiFQKlYau'),(16,'started',1,730.27,'PAYID-LZ5DMSA1M08628201912434J','$2y$10$xZQnYcf/aUybTpaRLFo.8.rG6aww/rHuEFMY.wwyyIXiURwUWbBAy'),(17,'approved',1,730.27,'PAYID-LZ5DNIA54436724U97545523','$2y$10$UdolXTPTsEcIKRsEBDIEduldRKLIpWfU7lwTuh9p6UlZ3PD1.G71W'),(18,'approved',1,997.50,'PAYID-LZ5F6GI3CH85937LF7257305','$2y$10$8vgLAW.hIO4CBtf0PQKVPupN17xtgE4uPc/JMuJ.khEb7x9YBI.3.'),(19,'approved',1,410.55,'PAYID-LZ6AIKA88B21610XV8421826','$2y$10$GCMHWfswFczNulJHBYYOxuv/vCsCA4h3tQlOrUA4qXU/Q58DViPki'),(20,'approved',1,502.43,'PAYID-LZ6AZWA62P788515B263701F','$2y$10$4Tn3vdgT8pEAKrCAB.j6TeB8wyFtF4vAEsyr8IZYB.auPMR.prRt2'),(21,'approved',1,1312.50,'PAYID-LZ6TIIY86H88411WV232692W','$2y$10$DANDcjgw3cXoNjMvt5DoIOpYPujQ5RZOc4V750x8EVCb/oJ/j4ZDy'),(22,'approved',1,157.50,'PAYID-LZ7D4LQ9BA16401VJ123433B','$2y$10$sFN5aa4gwdz/h3g/IhbT6.nUeeMcJ44y5oB9eaLXhfMj18X4AoGQW'),(23,'started',1,157.50,'PAYID-LZ7D6PA7VY68056MK3420444','$2y$10$tSZvCN3FpA.OoMqN3aksS.a5gOd6lU3AJXyMnDf6TAyKDgIcyjU8a'),(24,'started',1,362.77,'PAYID-LZ7EEWI49U59480DV6713354','$2y$10$HWWbAcz9/gnUr8y6T2NfFeHoUbeMT429VgUOJi.UEAxVshLO2u9UG'),(25,'started',1,362.77,'PAYID-LZ7EFAQ6JN8135526665601V','$2y$10$opvFIbeM1RpM7xpWKbvg0ezuCdgav0w/YW.9nNzLfByLtweUT1iHW'),(26,'approved',1,362.77,'PAYID-LZ7EF4Q5GJ86382JU845061C','$2y$10$uo9I21uUumRreuodZKdjZuwkEHd6vHkYA4zNNTG6A5Ir69u1KUF6i'),(27,'started',1,374.85,'PAYID-LZ7EPKY6BD40311L6840911E','$2y$10$Meccc1Scih3BpVIQeRP8heRToEGftySwvn.xQSb2gq3CH9tTkrySi'),(28,'started',1,262.50,'PAYID-L2ARS5I81371451XF961250A','$2y$10$Hjs3vTZryzXEzPh11lcuJe99hHRTVt5vcmXouFiYOhYDjuDkeYLhK');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefoneUm` varchar(11) DEFAULT NULL,
  `telefoneDois` varchar(11) DEFAULT NULL,
  `aventura` tinyint(1) DEFAULT NULL,
  `cidades` tinyint(1) DEFAULT NULL,
  `gastronomia` tinyint(1) DEFAULT NULL,
  `historico` tinyint(1) DEFAULT NULL,
  `natureza` tinyint(1) DEFAULT NULL,
  `noturna` tinyint(1) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Douglas Gonçalves','douglas@mail.com','$2y$10$AmLVrxUiMjMZa4yGg5D.buKmmgjzJui6mFo8HdEgNHwKUUaLqTUY6','11111111111','1987-06-14','M','11111111111','11111111111',NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/doug.png','https://www.linkedin.com/in/douglas-gonçalves-4161591a6/'),(2,'Diego Ramos','diego@mail.com','123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/diego.png','https://www.linkedin.com/in/diego-lima-ramos/'),(3,'Dirceu Santana','dirceu@mail.com','123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/dirceu.png','https://www.linkedin.com/in/dirceusantana/'),(4,'Mario Angelozzi','mario@mail.com','123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/mario.png','https://www.linkedin.com/in/mario-angelozzi-a16136/'),(5,'Carina Costa','carina@mail.com','123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/carina.png','https://www.linkedin.com/in/carina-costa-a3772218/'),(6,'Wagner Ricardo','wagner@mail.com','123123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/Galeria/imageDB/Equipe/wagner.png','https://www.linkedin.com/in/wagner-ricardo-de-carvalho-47083238/'),(7,'Teste','testando@mail.com','$2y$10$SKe.I2v0Uwet.vtk0OaQK.ObshCcmqxz6BKUuU01olVLLIYg6siti','11111111111','1951-01-11','M','1111111111','11111111',0,0,0,1,0,0,NULL,NULL),(8,'Ze da Silva','zezinho@mail.com','$2y$10$ZjVrPPN9yEnLxXj.Tw1uLeYPIMcZ6b1M4azxDbImstfqFZrmuN8Ce','11111111111','1955-01-11','M','11111111111','11111111111',0,0,1,0,1,0,'/storage/uploads/38B57CEE-69F2-471F-9066-FEAD59C65BCC_1_201_a.jpeg',NULL),(9,'Doug teste','doug.goncalvesf@gmail.com','$2y$10$GYxhpZhbUcsSULnTs0qNLuFtdFlkO759CvLslHaOUfbxDIdZZ5nxC','11111111111','1987-06-14','M','11111111111','11111111111',0,0,1,1,1,0,NULL,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-04 18:19:25
