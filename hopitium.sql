-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hopitium
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrasi`
--

DROP TABLE IF EXISTS `administrasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrasi` (
  `id_aministrasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  PRIMARY KEY (`id_aministrasi`),
  KEY `id_pasien` (`id_pasien`),
  KEY `id_petugas` (`id_petugas`),
  CONSTRAINT `administrasi_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas_administrasi` (`id_petugas`),
  CONSTRAINT `administrasi_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrasi`
--

LOCK TABLES `administrasi` WRITE;
/*!40000 ALTER TABLE `administrasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dapat_obat`
--

DROP TABLE IF EXISTS `dapat_obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dapat_obat` (
  `id_dapat` int(11) NOT NULL AUTO_INCREMENT,
  `id_obat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  PRIMARY KEY (`id_dapat`),
  KEY `id_obat` (`id_obat`),
  KEY `id_pasien` (`id_pasien`),
  CONSTRAINT `dapat_obat_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  CONSTRAINT `dapat_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dapat_obat`
--

LOCK TABLES `dapat_obat` WRITE;
/*!40000 ALTER TABLE `dapat_obat` DISABLE KEYS */;
/*!40000 ALTER TABLE `dapat_obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokter`
--

DROP TABLE IF EXISTS `dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(100) NOT NULL,
  `jenis_kelamin_dokter` varchar(20) NOT NULL,
  `spesialis` text NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokter`
--

LOCK TABLES `dokter` WRITE;
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kamar`
--

DROP TABLE IF EXISTS `kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(60) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kamar`
--

LOCK TABLES `kamar` WRITE;
/*!40000 ALTER TABLE `kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obat`
--

DROP TABLE IF EXISTS `obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(60) NOT NULL,
  `fungsi_obat` varchar(500) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obat`
--

LOCK TABLES `obat` WRITE;
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasien`
--

DROP TABLE IF EXISTS `pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pasien` int(11) NOT NULL,
  `tanggal_lahir_pasien` int(11) NOT NULL,
  `alamat_pasien` int(11) NOT NULL,
  `jenis_kelamin_pasien` int(11) NOT NULL,
  `no_telp_pasien` int(11) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasien`
--

LOCK TABLES `pasien` WRITE;
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perawat`
--

DROP TABLE IF EXISTS `perawat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perawat` (
  `id_perawat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perawat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perawat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perawat`
--

LOCK TABLES `perawat` WRITE;
/*!40000 ALTER TABLE `perawat` DISABLE KEYS */;
/*!40000 ALTER TABLE `perawat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periksa`
--

DROP TABLE IF EXISTS `periksa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periksa` (
  `id_periksa` int(11) NOT NULL AUTO_INCREMENT,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal_periksa` datetime NOT NULL,
  PRIMARY KEY (`id_periksa`),
  KEY `id_dokter` (`id_dokter`),
  KEY `id_pasien` (`id_pasien`),
  CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periksa`
--

LOCK TABLES `periksa` WRITE;
/*!40000 ALTER TABLE `periksa` DISABLE KEYS */;
/*!40000 ALTER TABLE `periksa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas_administrasi`
--

DROP TABLE IF EXISTS `petugas_administrasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas_administrasi` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_petugas` varchar(300) NOT NULL,
  `jenis_kelamit_petugas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas_administrasi`
--

LOCK TABLES `petugas_administrasi` WRITE;
/*!40000 ALTER TABLE `petugas_administrasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `petugas_administrasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rawat_inap`
--

DROP TABLE IF EXISTS `rawat_inap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rawat_inap` (
  `id_rawat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  PRIMARY KEY (`id_rawat`),
  UNIQUE KEY `id_pasien` (`id_pasien`),
  KEY `id_perawat` (`id_perawat`),
  KEY `id_kamar` (`id_kamar`),
  CONSTRAINT `rawat_inap_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  CONSTRAINT `rawat_inap_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  CONSTRAINT `rawat_inap_ibfk_3` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id_perawat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rawat_inap`
--

LOCK TABLES `rawat_inap` WRITE;
/*!40000 ALTER TABLE `rawat_inap` DISABLE KEYS */;
/*!40000 ALTER TABLE `rawat_inap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 12:32:51
