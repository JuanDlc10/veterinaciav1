-- MariaDB dump 10.19  Distrib 10.6.9-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Veterinaria
-- ------------------------------------------------------
-- Server version	10.6.9-MariaDB-1

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
-- Table structure for table `t_cat_rol`
--

DROP TABLE IF EXISTS `t_cat_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_cat_rol` (
  `id_cat_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cat_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_rol`
--

LOCK TABLES `t_cat_rol` WRITE;
/*!40000 ALTER TABLE `t_cat_rol` DISABLE KEYS */;
INSERT INTO `t_cat_rol` VALUES (1,'admin'),(2,'veterinario'),(3,'cliente');
/*!40000 ALTER TABLE `t_cat_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_desparasitacion`
--

DROP TABLE IF EXISTS `t_desparasitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_desparasitacion` (
  `id_desparasitacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_mascota` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_desparasitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_desparasitacion`
--

LOCK TABLES `t_desparasitacion` WRITE;
/*!40000 ALTER TABLE `t_desparasitacion` DISABLE KEYS */;
INSERT INTO `t_desparasitacion` VALUES (1,1,1,'2022-11-24'),(4,5,1,'2022-12-08'),(5,5,NULL,'2022-12-08');
/*!40000 ALTER TABLE `t_desparasitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_mascota`
--

DROP TABLE IF EXISTS `t_mascota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_mascota` (
  `id_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `tamanio` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`id_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_mascota`
--

LOCK TABLES `t_mascota` WRITE;
/*!40000 ALTER TABLE `t_mascota` DISABLE KEYS */;
INSERT INTO `t_mascota` VALUES (1,1,'perro','roko','2022-03-10','Pastor Aleman','grande','macho','El perro se encuentra saludable');
/*!40000 ALTER TABLE `t_mascota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_persona`
--

DROP TABLE IF EXISTS `t_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_persona`
--

LOCK TABLES `t_persona` WRITE;
/*!40000 ALTER TABLE `t_persona` DISABLE KEYS */;
INSERT INTO `t_persona` VALUES (1,'juan','de la cruz','cruz','5612994015'),(10,'eduardo','De la cruz','Cruz','5535141320');
/*!40000 ALTER TABLE `t_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat_rol` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuario`
--

LOCK TABLES `t_usuario` WRITE;
/*!40000 ALTER TABLE `t_usuario` DISABLE KEYS */;
INSERT INTO `t_usuario` VALUES (1,1,1,'juan_18@live.com.mx','6c7ca345f63f835cb353ff15bd6c5e052ec08e7a'),(7,3,2,'eduardo@gmail.com','40bd001563085fc35165329ea1ff5c5ecbdbbeef');
/*!40000 ALTER TABLE `t_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_vacunas`
--

DROP TABLE IF EXISTS `t_vacunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_vacunas` (
  `id_vacuna` int(11) NOT NULL AUTO_INCREMENT,
  `id_mascota` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_vacuna`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_vacunas`
--

LOCK TABLES `t_vacunas` WRITE;
/*!40000 ALTER TABLE `t_vacunas` DISABLE KEYS */;
INSERT INTO `t_vacunas` VALUES (1,1,1,'distemper','2022-11-27');
/*!40000 ALTER TABLE `t_vacunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_desparasitacion`
--

DROP TABLE IF EXISTS `v_desparasitacion`;
/*!50001 DROP VIEW IF EXISTS `v_desparasitacion`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_desparasitacion` AS SELECT
 1 AS `idDesparasitacion`,
  1 AS `idMascota`,
  1 AS `idUsuario`,
  1 AS `nombreMascota`,
  1 AS `tipo`,
  1 AS `fecha`,
  1 AS `nombrePersona`,
  1 AS `nombreUsuario` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_mascota`
--

DROP TABLE IF EXISTS `v_mascota`;
/*!50001 DROP VIEW IF EXISTS `v_mascota`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_mascota` AS SELECT
 1 AS `idMascota`,
  1 AS `idPersona`,
  1 AS `nombrePersona`,
  1 AS `tipo`,
  1 AS `nombreMascota`,
  1 AS `fechaNac`,
  1 AS `raza`,
  1 AS `tamanio`,
  1 AS `sexo`,
  1 AS `descripcion` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_usuarios`
--

DROP TABLE IF EXISTS `v_usuarios`;
/*!50001 DROP VIEW IF EXISTS `v_usuarios`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_usuarios` AS SELECT
 1 AS `idUsuario`,
  1 AS `paterno`,
  1 AS `materno`,
  1 AS `nombrePersona`,
  1 AS `nombreUsuario`,
  1 AS `nombreRol` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_vacunas`
--

DROP TABLE IF EXISTS `v_vacunas`;
/*!50001 DROP VIEW IF EXISTS `v_vacunas`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_vacunas` AS SELECT
 1 AS `idVacuna`,
  1 AS `idMascota`,
  1 AS `idUsuario`,
  1 AS `tipo`,
  1 AS `nombreMascota`,
  1 AS `nombre`,
  1 AS `fecha`,
  1 AS `nombrePersona`,
  1 AS `nombreUsuario` */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_desparasitacion`
--

/*!50001 DROP VIEW IF EXISTS `v_desparasitacion`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`juan`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_desparasitacion` AS select `desparasitacion`.`id_desparasitacion` AS `idDesparasitacion`,`mascota`.`id_mascota` AS `idMascota`,`usuario`.`id_usuario` AS `idUsuario`,`mascota`.`nombre` AS `nombreMascota`,`mascota`.`tipo` AS `tipo`,`desparasitacion`.`fecha` AS `fecha`,(select concat(`persona`.`paterno`,' ',`persona`.`materno`,' ',`persona`.`nombre`) from `t_persona` `persona` where `persona`.`id_persona` = `mascota`.`id_persona`) AS `nombrePersona`,concat(`persona`.`paterno`,' ',`persona`.`materno`,' ',`persona`.`nombre`) AS `nombreUsuario` from (((`t_desparasitacion` `desparasitacion` join `t_usuario` `usuario` on(`usuario`.`id_usuario` = `desparasitacion`.`id_usuario`)) join `t_mascota` `mascota` on(`mascota`.`id_mascota` = `desparasitacion`.`id_mascota`)) join `t_persona` `persona` on(`usuario`.`id_persona` = `persona`.`id_persona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_mascota`
--

/*!50001 DROP VIEW IF EXISTS `v_mascota`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`juan`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_mascota` AS select `mascota`.`id_mascota` AS `idMascota`,`persona`.`id_persona` AS `idPersona`,concat(`persona`.`paterno`,' ',`persona`.`materno`,' ',`persona`.`nombre`) AS `nombrePersona`,`mascota`.`tipo` AS `tipo`,`mascota`.`nombre` AS `nombreMascota`,`mascota`.`fecha_nacimiento` AS `fechaNac`,`mascota`.`raza` AS `raza`,`mascota`.`tamanio` AS `tamanio`,`mascota`.`sexo` AS `sexo`,`mascota`.`descripcion` AS `descripcion` from (`t_mascota` `mascota` join `t_persona` `persona` on(`persona`.`id_persona` = `mascota`.`id_persona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_usuarios`
--

/*!50001 DROP VIEW IF EXISTS `v_usuarios`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`juan`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_usuarios` AS select `user`.`id_usuario` AS `idUsuario`,`persona`.`paterno` AS `paterno`,`persona`.`materno` AS `materno`,`persona`.`nombre` AS `nombrePersona`,`user`.`email` AS `nombreUsuario`,`cat`.`nombre` AS `nombreRol` from ((`t_usuario` `user` join `t_cat_rol` `cat` on(`user`.`id_cat_rol` = `cat`.`id_cat_rol`)) join `t_persona` `persona` on(`persona`.`id_persona` = `user`.`id_persona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_vacunas`
--

/*!50001 DROP VIEW IF EXISTS `v_vacunas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`juan`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_vacunas` AS select `vacunas`.`id_vacuna` AS `idVacuna`,`mascota`.`id_mascota` AS `idMascota`,`usuario`.`id_usuario` AS `idUsuario`,`mascota`.`tipo` AS `tipo`,`mascota`.`nombre` AS `nombreMascota`,`vacunas`.`nombre` AS `nombre`,`vacunas`.`fecha` AS `fecha`,(select concat(`persona`.`paterno`,' ',`persona`.`materno`,' ',`persona`.`nombre`) from `t_persona` `persona` where `persona`.`id_persona` = `mascota`.`id_persona`) AS `nombrePersona`,concat(`persona`.`paterno`,' ',`persona`.`materno`,' ',`persona`.`nombre`) AS `nombreUsuario` from (((`t_vacunas` `vacunas` join `t_usuario` `usuario` on(`usuario`.`id_usuario` = `vacunas`.`id_usuario`)) join `t_mascota` `mascota` on(`mascota`.`id_mascota` = `vacunas`.`id_mascota`)) join `t_persona` `persona` on(`usuario`.`id_persona` = `persona`.`id_persona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-15 15:04:28
