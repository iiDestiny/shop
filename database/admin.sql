-- MySQL dump 10.13  Distrib 5.7.23, for osx10.13 (x86_64)
--
-- Host: localhost    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-09-14 07:42:11'),(2,0,2,'系统管理','fa-tasks',NULL,NULL,'2018-09-14 07:43:01'),(3,2,3,'管理员','fa-users','auth/users',NULL,'2018-09-14 07:43:24'),(4,2,4,'角色','fa-user','auth/roles',NULL,'2018-09-14 07:43:39'),(5,2,5,'权限','fa-ban','auth/permissions',NULL,'2018-09-14 07:43:47'),(6,2,6,'菜单','fa-bars','auth/menu',NULL,'2018-09-14 07:43:57'),(7,2,7,'操作日志','fa-history','auth/logs',NULL,'2018-09-14 07:44:06'),(8,0,8,'用户管理','fa-user','/users','2018-09-14 07:49:56','2018-09-14 09:00:06'),(9,0,9,'商品管理','fa-cubes','/products','2018-09-14 08:59:54','2018-09-14 09:00:06'),(10,0,0,'订单管理','fa-rmb','orders','2018-09-19 07:36:49','2018-09-19 07:36:49'),(11,0,0,'优惠券管理','fa-tags','/coupon_codes','2018-09-26 05:21:11','2018-09-26 05:21:11');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2018-09-14 08:04:11','2018-09-14 08:04:11'),(7,'商品管理','products','','/products*','2018-09-26 06:09:03','2018-09-26 06:09:03'),(8,'订单管理','orders','','/orders*','2018-09-26 06:09:16','2018-09-26 06:09:16'),(9,'优惠券管理','coupon_codes','','/coupon_codes*','2018-09-26 06:09:40','2018-09-26 06:09:40');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-09-14 07:37:14','2018-09-14 07:37:14'),(2,'运营','operator','2018-09-14 08:05:12','2018-09-14 08:05:12');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$DGwfzpRCsaC/vHECbQea4OPVUcLIpyd2LgG1dvPHex32.HHnY3wL6','Administrator',NULL,'sEAFhOZLK2EZjw0Sjnx4Wk4urTYvNYxHuWRGXF7hSSdnBcL13YCF8iIOnZDr','2018-09-14 07:37:14','2018-09-14 07:37:14'),(2,'operator','$2y$10$tPh3vcRZOVTrhNKjAqLnEO5neDEerScPvpVYbdZeB3UE4zOeY5AU6','运营',NULL,'Tnznu1viS5Y63K2MWFdy6CPb9el2g3UOh2Ho8LrkG1KzBF8yPX3ejr3SS9Au','2018-09-14 08:08:11','2018-09-14 08:08:11');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-26 14:22:46
