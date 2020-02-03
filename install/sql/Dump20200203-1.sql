-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: infinite
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.16.04.1

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
-- Dumping data for table `ad_spaces`
--

LOCK TABLES `ad_spaces` WRITE;
/*!40000 ALTER TABLE `ad_spaces` DISABLE KEYS */;
INSERT INTO `ad_spaces` VALUES (1,'index_top',NULL,NULL,NULL,NULL),(2,'index_bottom',NULL,NULL,NULL,NULL),(3,'post_top',NULL,NULL,NULL,NULL),(4,'post_bottom',NULL,NULL,NULL,NULL),(5,'category_top',NULL,NULL,NULL,NULL),(6,'category_bottom',NULL,NULL,NULL,NULL),(7,'tag_top',NULL,NULL,NULL,NULL),(8,'tag_bottom',NULL,NULL,NULL,NULL),(9,'search_top',NULL,NULL,NULL,NULL),(10,'search_bottom',NULL,NULL,NULL,NULL),(11,'profile_top',NULL,NULL,NULL,NULL),(12,'profile_bottom',NULL,NULL,NULL,NULL),(13,'reading_list_top',NULL,NULL,NULL,NULL),(14,'reading_list_bottom',NULL,NULL,NULL,NULL),(15,'sidebar_top',NULL,NULL,NULL,NULL),(16,'sidebar_bottom',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ad_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,'Tin tức','tin-tuc','1','blog',0,1,2,'2020-01-31 17:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gallery_categories`
--

LOCK TABLES `gallery_categories` WRITE;
/*!40000 ALTER TABLE `gallery_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `general_settings`
--

LOCK TABLES `general_settings` WRITE;
/*!40000 ALTER TABLE `general_settings` DISABLE KEYS */;
INSERT INTO `general_settings` VALUES (1,1,'layout_1',1,'default',1,0,'uploads/logo/logo_5e3675b440818.png','uploads/logo/favicon_5e3692abc7f18.png','','smtp','','','','','Infinite','open_sans','roboto','verdana','',10,6,0,0,0,0,'','','','','','en','2017-07-06 00:11:07');
/*!40000 ALTER TABLE `general_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'uploads/images/image_750x_5e34540cf3656.jpg','uploads/images/image_750x415_5e34540d2272a.jpg','uploads/images/image_100x75_5e34540d3d7b0.jpg','uploads/images/image_650x433_5e34540d4346f.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Tiếng Việt','vi','vi','default','ltr',1,1);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (3,1,'Liên hệ','Trang liên hệ','contact','lien-he',0,NULL,4,1,0,1,1,0,'header',NULL,0,'2017-12-20 23:23:51'),(4,1,'Login','Login Page','login,infinite','login',0,NULL,4,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:24:51'),(5,1,'Register','Register Page','register,infinite','register',0,NULL,5,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:25:55'),(6,1,'Change Password','Change Password Page','change password,infinite','change-password',0,NULL,6,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:26:44'),(7,1,'Update Profile','Update Profile Page','update profile,infinite','profile-update',0,NULL,7,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:27:23'),(8,1,'Reading List','Reading List Page','reading list,infinite','reading-list',0,NULL,8,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:28:19'),(9,1,'Reset Password','Reset Password Page','reset password,infinite','reset-password',0,NULL,9,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:29:06'),(12,1,'Giới thiệu','giới thiệu công ty','About us','gioi-thieu',1,'',1,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:40:59'),(13,1,'Dự án','Dự án đã làm','projects','du-an',1,'',2,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:41:37'),(14,1,'Dịch vụ','Dịch vụ cung cấp','services','dich-vu',1,'',3,1,1,1,0,0,'header',NULL,0,'2020-02-01 04:42:24'),(15,1,'Mẫu chữ','Mẫu chữ','Mẫu chữ','mau-chu',1,'',3,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:43:09'),(16,1,'Tin tức','Trang tin tức','Tin tức','tin-tuc',1,'',5,1,1,1,1,0,'header',NULL,0,'2020-02-01 05:17:52');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `poll_votes`
--

LOCK TABLES `poll_votes` WRITE;
/*!40000 ALTER TABLE `poll_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `poll_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `polls`
--

LOCK TABLES `polls` WRITE;
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;
/*!40000 ALTER TABLE `polls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post_images`
--

LOCK TABLES `post_images` WRITE;
/*!40000 ALTER TABLE `post_images` DISABLE KEYS */;
INSERT INTO `post_images` VALUES (1,2,'uploads/images/image_750x_5e34540cf3656.jpg','2020-02-03 15:35:03');
/*!40000 ALTER TABLE `post_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'sdsdsd','sdsdsd','sd','<p>sdsdsd</p>\r\n','sd',1,1,0,'uploads/images/image_750x_5e34540cf3656.jpg','uploads/images/image_750x415_5e34540d2272a.jpg','uploads/images/image_100x75_5e34540d3d7b0.jpg','uploads/images/image_650x433_5e34540d4346f.jpg',0,0,0,0,'',0,1,1,'2020-02-03 14:11:58');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project_images`
--

LOCK TABLES `project_images` WRITE;
/*!40000 ALTER TABLE `project_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,1,'sghggsdfsdghdfgdf','sfsd','<p>sdsd</p>\r\n','',1,NULL,NULL,NULL,NULL,1,'2020-02-03 15:33:43'),(2,1,'jhfdfsdsd','sd','<p>sdsd</p>\r\n','sd',1,NULL,NULL,NULL,NULL,1,'2020-02-03 15:35:03'),(3,1,'jhfdfsdsdsdsd','sd','<p>sdsd</p>\r\n','sd',1,NULL,NULL,NULL,NULL,1,'2020-02-03 15:35:32');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reactions`
--

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` VALUES (1,1,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reading_lists`
--

LOCK TABLES `reading_lists` WRITE;
/*!40000 ALTER TABLE `reading_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `reading_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,1,'Tân Thái Dương','Tân Thái Dương - In ấn biển quảng cáo','Trang chủ','Tân Thái Dương - In ấn biển quảng cáo','Tân Thái Dương, printing, advertising, in biển quảng cáo','https://www.facebook.com/InAnQuangCao','https://twitter.com/','','','','','','Click Here To See More','','<p>Ch&uacute;ng t&ocirc;i ở đ&acirc;y v&igrave; doanh nghiệp của bạn, nếu c&ograve;n thắc mắc về sản phẩm dịch vụ của ch&uacute;ng t&ocirc;i h&atilde;y li&ecirc;n hệ để được tư vấn ho&agrave;n to&agrave;n miễn ph&iacute;</p>\r\n','Hà Nội - Việt Nam','inquangcaottd@gmail.com','0948998383','Copyright © 2018 Infinite - All Rights Reserved.','2018-07-12 04:15:40');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,1,'sd','sd','2020-02-03 14:11:58');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `typography`
--

LOCK TABLES `typography` WRITE;
/*!40000 ALTER TABLE `typography` DISABLE KEYS */;
/*!40000 ALTER TABLE `typography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hoaronal','hoaronal-5e343097dd0a8','hoa9x3@gmail.com','$2a$08$AyCgAT9hkst6ynbSJlkQd.y.H9.9XDXWDLIWje6vC.m7oEX0kArBy','admin',NULL,1,'','','','','','','','','','2020-01-31 13:50:15');
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

-- Dump completed on 2020-02-03 22:57:48
