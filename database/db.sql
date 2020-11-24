-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: db_optehub
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Adesão','Cadastro completo de pessoas físicas e jurídicas, Pessoas Politicamente Expostas, Opções Tributárias. Geração de dados DPREV.'),(2,'Arrecadação','Contribuições por lote ou boletos, controle de autopatrocinados e BPDs, extratos de saldos, portabilidades de entrada. Contabilização automática.'),(3,'Benefícios','Controle de elegibilidade, extratos de desligamento, termos de opção, simulações de resgate e benefícios, concessões de benefícios BD e CD, portabilidades de saída.'),(4,'Folha de pagamento de benefícios','Processamento flexível, multi-datas, individual, em grupos ou geral. Antecipações, abonos, recálculos. Pensões alimentícias, múltiplas rubricas. Envio de arquivos bancários, relatórios. Contabilização automática. '),(5,'Empréstimos','Controle de qualquer modalidade de empréstimos. Renegociações. Contabilização automática.'),(6,'Investimentos','Importação de arquivos dos gestores, controle de saldos, geração de dados para DI. Contabilização automática.'),(7,'Tesouraria','Todos os pagamentos e recebimentos numa única tela. Controle dos impostos. Contabilização automática.'),(8,'Patrimônio','Quotização dos movimentos, evolução dos saldos, cálculo automático das quotas, calculo automático da alocação das rentabilidades para multi-perfis de investimentos. Quotas diárias ou mensais. Contabilização.'),(9,'Contabilidade','Balancetes, razões, diários, relatórios de encerramento de exercício. Contabilização modelada e programada. Múltiplo plano de contas, segregação por plano, perfil de investimentos, patrocinadora e centro de custo. Integração total com PREVIC.'),(10,'Folha de ativos','Administração completa da folha de funcionários da entidade nos mesmos moldes da folha de benefícios, respeitando as características especificas de uma folha administrativa.'),(11,'Autoatendimento','O participante acessa um modulo on-line exclusivo, com total segurança e informações em tempo real, onde ele tem acesso a dados cadastrais, extratos, simulações e segundas vias de boletos, demonstrativos de pagamento.\r\ne informes de rendimento.'),(12,'Comunicação','Planejamento de comunicação e execução de marketing digital também são etapas importantes para o sucesso do plano, aqui sua EFPC conta com uma comunicação acertiva e flexível.');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Claudio Pimentel','claudiopimentel1508@gmail.com','senha1508'),('Jorge','jorge@email','1234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_optehub'
--

--
-- Dumping routines for database 'db_optehub'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-24  1:53:12
