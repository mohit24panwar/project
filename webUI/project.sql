-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `Airline_Data`
--

DROP TABLE IF EXISTS `Airline_Data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Airline_Data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Supplier_AirLine` varchar(200) NOT NULL,
  `File_Name` varchar(200) NOT NULL,
  `Received_On_Email` varchar(200) NOT NULL,
  `Supplier_GSTIN` varchar(200) NOT NULL,
  `Buyer_GSTIN` varchar(200) NOT NULL,
  `SAC_HSN_Code` varchar(200) NOT NULL,
  `Invoice_No` varchar(200) NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Ticket_No` varchar(200) NOT NULL,
  `Passenger_Name` varchar(200) DEFAULT NULL,
  `Date_Of_Supply` date DEFAULT NULL,
  `lace_Of_Supply` varchar(200) DEFAULT NULL,
  `Origin` varchar(200) DEFAULT NULL,
  `Destination` varchar(200) DEFAULT NULL,
  `Taxable_Value` varchar(200) NOT NULL,
  `Non_Taxable_Value` varchar(200) NOT NULL,
  `IGST_Rate` varchar(200) DEFAULT NULL,
  `IGST_Amt` varchar(200) DEFAULT NULL,
  `CGST_Rate` varchar(200) DEFAULT NULL,
  `CGST_Amt` varchar(200) DEFAULT NULL,
  `SGST_Rate` varchar(200) DEFAULT NULL,
  `SGST_Amt` varchar(200) DEFAULT NULL,
  `Total_GST` varchar(200) DEFAULT NULL,
  `Total_Invoice_Value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Airline_Data`
--

LOCK TABLES `Airline_Data` WRITE;
/*!40000 ALTER TABLE `Airline_Data` DISABLE KEYS */;
/*!40000 ALTER TABLE `Airline_Data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testAirline`
--

DROP TABLE IF EXISTS `testAirline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testAirline` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  `GSTN_Supplier` varchar(200) NOT NULL,
  `GSTN_Passenger` varchar(200) NOT NULL,
  `Invoice_No` varchar(200) NOT NULL,
  `Ticket_No` varchar(200) NOT NULL,
  `Date_of_Invoice` date DEFAULT NULL,
  `Airline` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testAirline`
--

LOCK TABLES `testAirline` WRITE;
/*!40000 ALTER TABLE `testAirline` DISABLE KEYS */;
INSERT INTO `testAirline` VALUES (17,'test.pdf','G223456TN','G687654321N','234567198','T32345678901','2018-12-12','AirFrance','Invoice'),(18,'rest.pdf','G323456TN','G787654321N','334567198','T62345678901','2018-10-12','AirIndia','Invoice'),(19,'mest.pdf','G423456TN','G387654321N','534567198','T72345678901','2018-11-12','AirFrance','Invoice'),(20,'gest.pdf','G623456TN','G487654321N','634567198','T82345678901','2018-09-12','AirIndia','Invoice'),(21,'fest.pdf','G523456TN','G587654321N','734567198','T02345678901','2018-07-12','AirFrance','Invoice'),(22,'nest.pdf','G723456TN','G287654321N','134567198','T52345678901','2018-04-12','AirIndia','Invoice'),(23,'hest.pdf','G923456TN','G387654321N','434567198','T32345678901','2018-05-12','AirFrance','Invoice'),(24,'kest.pdf','G823456TN','G187654321N','834567198','T22345678901','2018-06-12','AirIndia','Invoice');
/*!40000 ALTER TABLE `testAirline` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-19 15:17:31
