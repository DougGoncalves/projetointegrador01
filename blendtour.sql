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
INSERT INTO `experiencias` VALUES (1,'Rafting','Corredeiras, alta velocidade, adrenalina e aquele banho te esperam em Brotas-SP. Experimente esse circuito de rafting imperdível',178,'Brotas-SP','/Galeria/imageDB/Aventura/expadv2.png',1),(2,'Mountain Bike','Curta essa trilha off-road de Mountain Bike pelo Cerrado Brasileiro',195.5,'Goiás','/Galeria/imageDB/Aventura/expadv1.png',1),(3,'Paraglider','Passeios de paraglider do alto da Pedra Grande, em Atibaia - São Paulo',250,'Atibaia - SP','/Galeria/imageDB/Aventura/expadv3.png',1),(4,'Balonismo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',319,'Boituva-SP','/Galeria/imageDB/Aventura/expadv3.png',1),(5,'Asa Delta','Planar entre o céu azul e o mar transparente, faz da paisagem do Rio uma experiência emocionante',599.99,'Pedra da Gávea - Rio de Janeiro','/Galeria/imageDB/Aventura/asadelta.jpg',1),(6,'Rio de Janeiro','Praias, samba, calor, venha conhecer todos os encantos da cidade maravilhosa e tudo o que ela tem a oferecer',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid1.png',2),(7,'São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/saopaulo.jpg',2),(8,'Curitiba','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/curitiba.jpg',2),(9,'Salvador','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/salvador.png',2),(10,'Recife','Não perca essa oportunidade de se aventurar pelas praias do Nordeste brasileiro e conhecer a \"Veneza brasileira\"',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid2.png',2),(11,'Florianópolis','Um dos destinos de mais alto luxo no Brasil te espera de braços abertos',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(12,'Natal','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(13,'Fortaleza','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Cidades/expcid3.png',2),(14,'Culinária Típica','Que tal experimentar este prato que tem a cara do Brasil e é apreciado por milhões de pessoas no páis inteiro ?',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/feijoada.jpg',3),(15,'Doces Típicos','Para aqueles loucos por doces, que tal experimentar a sobremesa preferida dos brasileiros, o brigadeiro!',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast2.png',3),(16,'Mercado Municipal São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast2.png',3),(17,'Mercado Ver o Peso - Belém','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast1.png',3),(18,'Salgados','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Gastronomia/expgast3.png',3),(19,'Bebidas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',150,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot1.png',3),(20,'Carnaval de Rua São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',80,'Bairro da Vila Madelena - São Paulo','/Galeria/imageDB/Vida Noturna/expnot1.png',4),(21,'Carnaval Rio de Janeiro','Caia no samba na Marquês de Sapucaí e viva esta festa de perto, aproveitando cada momento com toda alegria e descontração que esse evento pode oferecer',800,'Marquês de Sapucaí - Rio de Janeiro','/Galeria/imageDB/Historico Cultural/expcult1.png',4),(22,'Festa Junina Nordeste','Se divirta com brincadeiras, música típicas e muita comida boa, nessa que é uma das festas mais populares do Brasil',400,'Campina Grande - PB','/Galeria/imageDB/Historico Cultural/expcult2.png',4),(23,'Museus São Paulo','Conheça um pouco da história e cultura da maior metrópole da América Latina',250,'Ponto de Enconto: Av. Paulista, 1578 - Vão Livre','/Galeria/imageDB/Historico Cultural/teatro_municipal_SP_interno.jpg',4),(24,'Museus Rio de Janeiro','Moderníssimo museu inaugurado para os Jogos Olímpicos do Rio de Janeiro, trazendo uma experiência sensorial, a começar pelo seu belíssimo design',250,'Ponto de Enconto:','/Galeria/imageDB/Historico Cultural/relacionadosprod.png',4),(25,'Museu Inhotim - Belo Horizonte','Lorem Ipsum is simply dummy text of the printing and typesetting industry',250,'Ponto de Enconto: Rua B, 20 Fazenda Inhotim, Brumadinho','/Galeria/imageDB/Historico Cultural/expcult3.png',4),(26,'Foz do Iguaçú','Conheça as famosas Cataratas do Iguaçú, na tríplice fronteira entre Brasil, Argentina e Paraguai.',350,'Ponto de Enconto: BR 469, KM 18 - Em frente ao Parque das Cataratas','/Galeria/imageDB/Natureza/expnat1.png',5),(27,'Floresta Amazônica','Lorem Ipsum is simply dummy text of the printing and typesetting industry',950,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat2.png',5),(28,'Cachoeiras','Lorem Ipsum is simply dummy text of the printing and typesetting industry',650,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat3.png',5),(29,'Trilhas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',200,'Ponto de Enconto:','/Galeria/imageDB/Natureza/expnat3.png',5),(30,'Bares e Casas Noturnas','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot1.png',6),(31,'Vida Noturna São Paulo','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto: Rua Augusta x Avenida Paulista','/Galeria/imageDB/Vida Noturna/expnot3.png',6),(32,'Vida Noturna Rio de Janeiro','Lorem Ipsum is simply dummy text of the printing and typesetting industry',300,'Ponto de Enconto:','/Galeria/imageDB/Vida Noturna/expnot2.png',6);
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
  `fk_pedido` int(11) NOT NULL,
  PRIMARY KEY (`id_item_pedido`),
  KEY `fk_pedido` (`fk_pedido`),
  CONSTRAINT `item_pedido_ibfk_1` FOREIGN KEY (`fk_pedido`) REFERENCES `pedido` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
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
  PRIMARY KEY (`id_pedido`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
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
  PRIMARY KEY (`id_usuario`),
   UNIQUE (`email`, `cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'douglas','douglas@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null),(2,'diego','diego@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null),(3,'dirceu','dirceu@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null),(4,'mario','mario@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null),(5,'carina','carina@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null),(6,'wagner','wagner@mail.com','123123',null,null,null,null,null,null,null,null,null,null,null);
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

-- Dump completed on 2020-03-06 21:45:17