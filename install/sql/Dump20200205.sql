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
-- Table structure for table `ad_spaces`
--

DROP TABLE IF EXISTS `ad_spaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ad_spaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_space` text,
  `ad_code_728` text,
  `ad_code_468` text,
  `ad_code_300` text,
  `ad_code_234` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ad_spaces`
--

LOCK TABLES `ad_spaces` WRITE;
/*!40000 ALTER TABLE `ad_spaces` DISABLE KEYS */;
INSERT INTO `ad_spaces` VALUES (1,'index_top',NULL,NULL,NULL,NULL),(2,'index_bottom',NULL,NULL,NULL,NULL),(3,'post_top',NULL,NULL,NULL,NULL),(4,'post_bottom',NULL,NULL,NULL,NULL),(5,'category_top',NULL,NULL,NULL,NULL),(6,'category_bottom',NULL,NULL,NULL,NULL),(7,'tag_top',NULL,NULL,NULL,NULL),(8,'tag_bottom',NULL,NULL,NULL,NULL),(9,'search_top',NULL,NULL,NULL,NULL),(10,'search_bottom',NULL,NULL,NULL,NULL),(11,'profile_top',NULL,NULL,NULL,NULL),(12,'profile_bottom',NULL,NULL,NULL,NULL),(13,'reading_list_top',NULL,NULL,NULL,NULL),(14,'reading_list_bottom',NULL,NULL,NULL,NULL),(15,'sidebar_top',NULL,NULL,NULL,NULL),(16,'sidebar_bottom',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ad_spaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `category_order` int(11) DEFAULT NULL,
  `show_on_menu` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,'Tin tức','tin-tuc','1','blog',0,1,2,'2020-01-31 17:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `service_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (2,'Doan Hoa','doan.quang.hoa@sun-asterisk.com','Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí\r\n\r\n,','2020-02-03 17:14:06'),(3,'Doan Hoa','hoa9x3@gmail.com','Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ để được tư vấn hoàn toàn miễn phí ,Chúng tôi ở đây vì doanh nghiệp của bạn, nếu còn thắc mắc về sản phẩm dịch vụ của chúng tôi hãy liên hệ đ','2020-02-03 17:14:29');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_categories`
--

DROP TABLE IF EXISTS `gallery_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_categories`
--

LOCK TABLES `gallery_categories` WRITE;
/*!40000 ALTER TABLE `gallery_categories` DISABLE KEYS */;
INSERT INTO `gallery_categories` VALUES (1,1,'Dự án','2020-02-04 16:00:55');
/*!40000 ALTER TABLE `gallery_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_settings`
--

DROP TABLE IF EXISTS `general_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_lang` int(11) NOT NULL DEFAULT '1',
  `layout` varchar(100) DEFAULT 'layout_1',
  `slider_active` int(11) DEFAULT '1',
  `site_color` varchar(100) DEFAULT 'default',
  `show_pageviews` int(11) DEFAULT '1',
  `show_rss` int(11) DEFAULT '1',
  `logo_path` varchar(255) DEFAULT NULL,
  `favicon_path` varchar(255) DEFAULT NULL,
  `google_analytics` text,
  `mail_protocol` varchar(100) DEFAULT 'smtp',
  `mail_host` varchar(255) DEFAULT NULL,
  `mail_port` varchar(255) DEFAULT '587',
  `mail_username` varchar(255) DEFAULT NULL,
  `mail_password` varchar(255) DEFAULT NULL,
  `mail_title` varchar(255) DEFAULT NULL,
  `primary_font` varchar(255) DEFAULT 'open_sans',
  `secondary_font` varchar(255) DEFAULT 'roboto',
  `tertiary_font` varchar(255) DEFAULT 'verdana',
  `facebook_comment` text,
  `pagination_per_page` int(11) DEFAULT '6',
  `menu_limit` int(11) DEFAULT '5',
  `multilingual_system` int(11) DEFAULT '1',
  `registration_system` int(11) DEFAULT '1',
  `comment_system` int(11) DEFAULT '1',
  `emoji_reactions` int(11) DEFAULT '1',
  `head_code` text,
  `inf_key` varchar(500) NOT NULL,
  `purchase_code` varchar(500) NOT NULL,
  `recaptcha_site_key` varchar(500) DEFAULT NULL,
  `recaptcha_secret_key` varchar(500) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_settings`
--

LOCK TABLES `general_settings` WRITE;
/*!40000 ALTER TABLE `general_settings` DISABLE KEYS */;
INSERT INTO `general_settings` VALUES (1,1,'layout_1',1,'default',1,0,'uploads/logo/logo_5e3675b440818.png','uploads/logo/favicon_5e3692abc7f18.png','','smtp','','','','','Infinite','open_sans','roboto','verdana','',10,6,0,0,0,0,'','','','','','en','2017-07-06 00:11:07');
/*!40000 ALTER TABLE `general_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_big` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (2,'uploads/images/image_750x_5e384e3404470.jpg','uploads/images/image_750x415_5e384e34235a8.jpg','uploads/images/image_100x75_5e384e343cce1.jpg','uploads/images/image_650x433_5e384e3441cb0.jpg'),(3,'uploads/images/image_750x_5e399951aed04.jpg','uploads/images/image_750x415_5e399951cc151.jpg','uploads/images/image_100x75_5e399951ec782.jpg','uploads/images/image_650x433_5e39995200d60.jpg'),(4,'uploads/images/image_750x_5e39a4732eb4f.jpg','uploads/images/image_750x415_5e39a47357ebe.jpg','uploads/images/image_100x75_5e39a47378741.jpg','uploads/images/image_650x433_5e39a473823c5.jpg'),(6,'uploads/images/image_750x_5e39a4a62dbb3.jpg','uploads/images/image_750x415_5e39a4a654f2c.jpg','uploads/images/image_100x75_5e39a4a671d96.jpg','uploads/images/image_650x433_5e39a4a6789bd.jpg'),(7,'uploads/images/image_750x_5e39a4a8bb3d1.jpg','uploads/images/image_750x415_5e39a4a8dd0e9.jpg','uploads/images/image_100x75_5e39a4a902296.jpg','uploads/images/image_650x433_5e39a4a906cb1.jpg'),(8,'uploads/images/image_750x_5e39a4ab0db66.jpg','uploads/images/image_750x415_5e39a4ab33486.jpg','uploads/images/image_100x75_5e39a4ab4eb38.jpg','uploads/images/image_650x433_5e39a4ab5557c.jpg'),(9,'uploads/images/image_750x_5e39a4ad7e3d3.jpg','uploads/images/image_750x415_5e39a4ada6ad2.jpg','uploads/images/image_100x75_5e39a4adc5daa.jpg','uploads/images/image_650x433_5e39a4add0ed0.jpg'),(10,'uploads/images/image_750x_5e39a4afe2d4a.jpg','uploads/images/image_750x415_5e39a4b012f62.jpg','uploads/images/image_100x75_5e39a4b0333bf.jpg','uploads/images/image_650x433_5e39a4b03b5e1.jpg'),(11,'uploads/images/image_750x_5e39a4b2dac6a.jpg','uploads/images/image_750x415_5e39a4b3102f1.jpg','uploads/images/image_100x75_5e39a4b32a53f.jpg','uploads/images/image_650x433_5e39a4b32f6ee.jpg'),(12,'uploads/images/image_750x_5e39a4b8676b8.jpg','uploads/images/image_750x415_5e39a4b8914a0.jpg','uploads/images/image_100x75_5e39a4b8b4705.jpg','uploads/images/image_650x433_5e39a4b8bb839.jpg'),(13,'uploads/images/image_750x_5e39a4bd26076.jpg','uploads/images/image_750x415_5e39a4bd461aa.jpg','uploads/images/image_100x75_5e39a4bd61006.jpg','uploads/images/image_650x433_5e39a4bd67ea6.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_form` varchar(255) NOT NULL,
  `language_code` varchar(100) NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `text_direction` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `language_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Tiếng Việt','vi','vi','default','ltr',1,1);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `page_description` varchar(500) DEFAULT NULL,
  `page_keywords` varchar(500) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `is_custom` int(11) DEFAULT '1',
  `page_content` text,
  `page_order` int(11) DEFAULT '5',
  `page_active` int(11) DEFAULT '1',
  `title_active` int(11) DEFAULT '1',
  `breadcrumb_active` int(11) DEFAULT '1',
  `right_column_active` int(11) DEFAULT '1',
  `need_auth` int(11) DEFAULT '0',
  `location` varchar(255) DEFAULT 'header',
  `link` varchar(1000) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (3,1,'Liên hệ','Trang liên hệ','contact','lien-he',0,NULL,4,1,0,1,1,0,'header',NULL,0,'2017-12-20 23:23:51'),(4,1,'Login','Login Page','login,infinite','login',0,NULL,4,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:24:51'),(5,1,'Register','Register Page','register,infinite','register',0,NULL,5,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:25:55'),(6,1,'Change Password','Change Password Page','change password,infinite','change-password',0,NULL,6,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:26:44'),(7,1,'Update Profile','Update Profile Page','update profile,infinite','profile-update',0,NULL,7,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:27:23'),(8,1,'Reading List','Reading List Page','reading list,infinite','reading-list',0,NULL,8,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:28:19'),(9,1,'Reset Password','Reset Password Page','reset password,infinite','reset-password',0,NULL,9,1,1,1,1,0,'none',NULL,0,'2017-12-20 23:29:06'),(12,1,'Giới thiệu','giới thiệu công ty','About us','gioi-thieu',1,'',1,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:40:59'),(13,1,'Dự án','Dự án đã làm','projects','du-an',1,'',2,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:41:37'),(14,1,'Dịch vụ','Dịch vụ cung cấp','services','dich-vu',1,'',3,1,1,1,0,0,'header',NULL,0,'2020-02-01 04:42:24'),(15,1,'Mẫu chữ','Mẫu chữ','Mẫu chữ','mau-chu',1,'',3,1,1,1,1,0,'header',NULL,0,'2020-02-01 04:43:09'),(16,1,'Tin tức','Trang tin tức','Tin tức','tin-tuc',1,'',5,1,1,1,1,0,'header',NULL,0,'2020-02-01 05:17:52');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `path_big` varchar(255) DEFAULT NULL,
  `path_small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,1,'sdsfdf',1,'uploads/gallery/image_1920x_5e3995427a011.jpg','uploads/gallery/image_500x_5e399543169ec.jpg','2020-02-04 16:01:07'),(2,1,'',1,'uploads/gallery/image_1920x_5e39954abfe9e.jpg','uploads/gallery/image_500x_5e39954b4687f.jpg','2020-02-04 16:01:15'),(3,1,'',1,'uploads/gallery/image_1920x_5e399554014fa.jpg','uploads/gallery/image_500x_5e39955421425.jpg','2020-02-04 16:01:24'),(4,1,'',1,'uploads/gallery/image_1920x_5e399559139ae.jpg','uploads/gallery/image_500x_5e399559a0eea.jpg','2020-02-04 16:01:29'),(5,1,'',1,'uploads/gallery/image_1920x_5e39955f78197.jpg','uploads/gallery/image_500x_5e39955fb9e35.jpg','2020-02-04 16:01:35'),(6,1,'',1,'uploads/gallery/image_1920x_5e3995668e318.jpg','uploads/gallery/image_500x_5e3995669d34d.jpg','2020-02-04 16:01:42'),(7,1,'',1,'uploads/gallery/image_1920x_5e39956f5cfab.jpg','uploads/gallery/image_500x_5e3995704236c.jpg','2020-02-04 16:01:52'),(8,1,'',1,'uploads/gallery/image_1920x_5e3995752c85a.jpg','uploads/gallery/image_500x_5e3995755119c.jpg','2020-02-04 16:01:57'),(9,1,'',1,'uploads/gallery/image_1920x_5e39957c8dac9.jpg','uploads/gallery/image_500x_5e39957d07d6b.jpg','2020-02-04 16:02:05'),(10,1,'',1,'uploads/gallery/image_1920x_5e399583d6d73.jpg','uploads/gallery/image_500x_5e399583eaa7e.jpg','2020-02-04 16:02:11'),(11,1,'',1,'uploads/gallery/image_1920x_5e39958e64d33.jpg','uploads/gallery/image_500x_5e39958f3e45a.jpg','2020-02-04 16:02:23'),(12,1,'sdsd',1,'uploads/gallery/image_1920x_5e3995a1610aa.jpg','uploads/gallery/image_500x_5e3995a185c03.jpg','2020-02-04 16:02:41'),(13,1,'',1,'uploads/gallery/image_1920x_5e3995a67fb7d.jpg','uploads/gallery/image_500x_5e3995a70a63f.jpg','2020-02-04 16:02:47'),(14,1,'',1,'uploads/gallery/image_1920x_5e3995abd63e1.jpg','uploads/gallery/image_500x_5e3995acaec96.jpg','2020-02-04 16:02:52'),(15,1,'',1,'uploads/gallery/image_1920x_5e3995b213f47.jpg','uploads/gallery/image_500x_5e3995b223d2e.jpg','2020-02-04 16:02:58'),(16,1,'',1,'uploads/gallery/image_1920x_5e3995b97df6e.jpg','uploads/gallery/image_500x_5e3995b9a3efd.jpg','2020-02-04 16:03:05');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_votes`
--

DROP TABLE IF EXISTS `poll_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vote` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_votes`
--

LOCK TABLES `poll_votes` WRITE;
/*!40000 ALTER TABLE `poll_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `poll_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polls`
--

DROP TABLE IF EXISTS `polls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `option5` text,
  `option6` text,
  `option7` text,
  `option8` text,
  `option9` text,
  `option10` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polls`
--

LOCK TABLES `polls` WRITE;
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;
/*!40000 ALTER TABLE `polls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_images`
--

DROP TABLE IF EXISTS `post_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_images`
--

LOCK TABLES `post_images` WRITE;
/*!40000 ALTER TABLE `post_images` DISABLE KEYS */;
INSERT INTO `post_images` VALUES (1,2,'uploads/images/image_750x_5e34540cf3656.jpg','2020-02-03 15:35:03');
/*!40000 ALTER TABLE `post_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `title_slug` varchar(500) DEFAULT NULL,
  `summary` varchar(1000) DEFAULT NULL,
  `content` longtext,
  `keywords` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `image_big` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  `is_slider` int(11) DEFAULT '0',
  `is_picked` int(11) DEFAULT '0',
  `hit` int(11) DEFAULT '0',
  `slider_order` int(11) DEFAULT '0',
  `optional_url` varchar(1000) DEFAULT NULL,
  `need_auth` int(11) DEFAULT '0',
  `visibility` int(11) DEFAULT '1',
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'sdsdsd','sdsdsd','sd','<p>sdsdsd</p>\r\n','sd',1,1,0,'uploads/images/image_750x_5e34540cf3656.jpg','uploads/images/image_750x415_5e34540d2272a.jpg','uploads/images/image_100x75_5e34540d3d7b0.jpg','uploads/images/image_650x433_5e34540d4346f.jpg',0,0,0,0,'',0,1,1,'2020-02-03 14:11:58'),(2,1,'sdsd','sdsd','sd','','sd',1,1,0,'uploads/images/image_750x_5e399951aed04.jpg','uploads/images/image_750x415_5e399951cc151.jpg','uploads/images/image_100x75_5e399951ec782.jpg','uploads/images/image_650x433_5e39995200d60.jpg',0,0,0,0,'',0,1,1,'2020-02-04 16:17:30'),(3,1,'sdsd','sdsd-3','sdsd','','sdsd',1,1,0,'uploads/images/image_750x_5e399951aed04.jpg','uploads/images/image_750x415_5e399951cc151.jpg','uploads/images/image_100x75_5e399951ec782.jpg','uploads/images/image_650x433_5e39995200d60.jpg',0,0,0,0,'',0,1,1,'2020-02-04 16:17:39'),(4,1,'sdsdasas','sdsdasas','áas','','á',1,1,0,'uploads/images/image_750x_5e384e3404470.jpg','uploads/images/image_750x415_5e384e34235a8.jpg','uploads/images/image_100x75_5e384e343cce1.jpg','uploads/images/image_650x433_5e384e3441cb0.jpg',0,0,0,0,'',0,1,1,'2020-02-04 16:17:58'),(5,1,'hfdg','hfdg','dfsdd','','',1,1,0,'uploads/images/image_750x_5e34540cf3656.jpg','uploads/images/image_750x415_5e34540d2272a.jpg','uploads/images/image_100x75_5e34540d3d7b0.jpg','uploads/images/image_650x433_5e34540d4346f.jpg',0,0,0,0,'',0,1,1,'2020-02-04 16:18:08');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_images`
--

DROP TABLE IF EXISTS `project_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_images`
--

LOCK TABLES `project_images` WRITE;
/*!40000 ALTER TABLE `project_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `title` varchar(500) DEFAULT NULL,
  `summary` varchar(1000) DEFAULT NULL,
  `content` longtext,
  `keywords` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image_big` varchar(255) DEFAULT NULL,
  `image_mid` varchar(255) DEFAULT NULL,
  `image_small` varchar(255) DEFAULT NULL,
  `image_slider` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `project_type` varchar(50) DEFAULT 'ALL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (3,1,'hahaha','sd','<p>sdsd</p>\r\n','sd',1,'uploads/images/image_750x_5e384e3404470.jpg','uploads/images/image_750x415_5e384e34235a8.jpg','uploads/images/image_100x75_5e384e343cce1.jpg','uploads/images/image_650x433_5e384e3441cb0.jpg',1,'2020-02-03 15:35:32','healthcare'),(6,1,'dfsdsd','sdsd','<p>sd</p>\r\n','sdsd',1,'uploads/images/image_750x_5e39a4afe2d4a.jpg','uploads/images/image_750x415_5e39a4b012f62.jpg','uploads/images/image_100x75_5e39a4b0333bf.jpg','uploads/images/image_650x433_5e39a4b03b5e1.jpg',1,'2020-02-04 15:33:52','ALL'),(7,1,'tghfgdsfg','dfdfdf','<p>dffgdfdf</p>\r\n','ssd',1,'uploads/images/image_750x_5e39a4732eb4f.jpg','uploads/images/image_750x415_5e39a47357ebe.jpg','uploads/images/image_100x75_5e39a47378741.jpg','uploads/images/image_650x433_5e39a473823c5.jpg',1,'2020-02-04 15:33:59','ALL'),(8,1,'fgdf','fghsddf','<p>dfsfsf</p>\r\n','',1,'uploads/images/image_750x_5e39a4bd26076.jpg','uploads/images/image_750x415_5e39a4bd461aa.jpg','uploads/images/image_100x75_5e39a4bd61006.jpg','uploads/images/image_650x433_5e39a4bd67ea6.jpg',1,'2020-02-04 15:34:04','ALL'),(9,1,'ssd','','','',1,'uploads/images/image_750x_5e39a4b8676b8.jpg','uploads/images/image_750x415_5e39a4b8914a0.jpg','uploads/images/image_100x75_5e39a4b8b4705.jpg','uploads/images/image_650x433_5e39a4b8bb839.jpg',1,'2020-02-04 15:34:07','ALL'),(10,1,'sdsf','sd','','',1,'uploads/images/image_750x_5e39a4afe2d4a.jpg','uploads/images/image_750x415_5e39a4b012f62.jpg','uploads/images/image_100x75_5e39a4b0333bf.jpg','uploads/images/image_650x433_5e39a4b03b5e1.jpg',1,'2020-02-04 15:34:10','ALL'),(11,1,'sdsfdf','dffgdf','<p>sdfsdf</p>\r\n','',1,'uploads/images/image_750x_5e39a4b2dac6a.jpg','uploads/images/image_750x415_5e39a4b3102f1.jpg','uploads/images/image_100x75_5e39a4b32a53f.jpg','uploads/images/image_650x433_5e39a4b32f6ee.jpg',1,'2020-02-04 15:34:15','ALL'),(12,1,'sdsdsdfsf','','','',1,'uploads/images/image_750x_5e39a4ad7e3d3.jpg','uploads/images/image_750x415_5e39a4ada6ad2.jpg','uploads/images/image_100x75_5e39a4adc5daa.jpg','uploads/images/image_650x433_5e39a4add0ed0.jpg',1,'2020-02-04 15:34:20','ALL'),(13,1,'fghfgdfg','','','',1,'uploads/images/image_750x_5e39a4ab0db66.jpg','uploads/images/image_750x415_5e39a4ab33486.jpg','uploads/images/image_100x75_5e39a4ab4eb38.jpg','uploads/images/image_650x433_5e39a4ab5557c.jpg',1,'2020-02-04 15:34:23','ALL'),(14,1,'fgjhffgdf','','','',1,'uploads/images/image_750x_5e39a4a8bb3d1.jpg','uploads/images/image_750x415_5e39a4a8dd0e9.jpg','uploads/images/image_100x75_5e39a4a902296.jpg','uploads/images/image_650x433_5e39a4a906cb1.jpg',1,'2020-02-04 15:34:26','ALL'),(15,1,'dffsafsf','','','',1,'uploads/images/image_750x_5e39a4a62dbb3.jpg','uploads/images/image_750x415_5e39a4a654f2c.jpg','uploads/images/image_100x75_5e39a4a671d96.jpg','uploads/images/image_650x433_5e39a4a6789bd.jpg',1,'2020-02-04 15:34:28','ALL'),(16,1,'fsfsafsfag','','','',1,'uploads/images/image_750x_5e39a4bd26076.jpg','uploads/images/image_750x415_5e39a4bd461aa.jpg','uploads/images/image_100x75_5e39a4bd61006.jpg','uploads/images/image_650x433_5e39a4bd67ea6.jpg',1,'2020-02-04 15:34:31','ALL'),(17,1,'dghfdf','','','',1,'uploads/images/image_750x_5e39a4a8bb3d1.jpg','uploads/images/image_750x415_5e39a4a8dd0e9.jpg','uploads/images/image_100x75_5e39a4a902296.jpg','uploads/images/image_650x433_5e39a4a906cb1.jpg',1,'2020-02-04 15:34:34','ALL'),(18,1,'Hoa hồng ngọc','','','',1,'uploads/images/image_750x_5e39a4732eb4f.jpg','uploads/images/image_750x415_5e39a47357ebe.jpg','uploads/images/image_100x75_5e39a47378741.jpg','uploads/images/image_650x433_5e39a473823c5.jpg',1,'2020-02-04 15:34:48','ALL');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reactions`
--

DROP TABLE IF EXISTS `reactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `re_like` int(11) DEFAULT '0',
  `re_dislike` int(11) DEFAULT '0',
  `re_love` int(11) DEFAULT '0',
  `re_funny` int(11) DEFAULT '0',
  `re_angry` int(11) DEFAULT '0',
  `re_sad` int(11) DEFAULT '0',
  `re_wow` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reactions`
--

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` VALUES (1,1,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reading_lists`
--

DROP TABLE IF EXISTS `reading_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reading_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reading_lists`
--

LOCK TABLES `reading_lists` WRITE;
/*!40000 ALTER TABLE `reading_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `reading_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) DEFAULT '1',
  `application_name` varchar(255) DEFAULT 'Infinite',
  `site_title` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `site_description` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `facebook_url` varchar(500) DEFAULT NULL,
  `twitter_url` varchar(500) DEFAULT NULL,
  `google_url` varchar(500) DEFAULT NULL,
  `instagram_url` varchar(500) DEFAULT NULL,
  `pinterest_url` varchar(500) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `vk_url` varchar(500) DEFAULT NULL,
  `optional_url_button_name` varchar(500) DEFAULT 'Click Here to Visit',
  `about_footer` varchar(1000) DEFAULT NULL,
  `contact_text` text,
  `contact_address` varchar(500) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `copyright` varchar(500) DEFAULT 'Copyright © 2018 Infinite - All Rights Reserved.',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,1,'Tân Thái Dương','Tân Thái Dương - In ấn biển quảng cáo','Trang chủ','Tân Thái Dương - In ấn biển quảng cáo','Tân Thái Dương, printing, advertising, in biển quảng cáo','https://www.facebook.com/InAnQuangCao','https://twitter.com/','','','','','','Click Here To See More','','<p>Ch&uacute;ng t&ocirc;i ở đ&acirc;y v&igrave; doanh nghiệp của bạn, nếu c&ograve;n thắc mắc về sản phẩm dịch vụ của ch&uacute;ng t&ocirc;i h&atilde;y li&ecirc;n hệ để được tư vấn ho&agrave;n to&agrave;n miễn ph&iacute;</p>\r\n','Hà Nội - Việt Nam','inquangcaottd@gmail.com','0948998383','Copyright © 2018 Infinite - All Rights Reserved.','2018-07-12 04:15:40');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `tag_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,1,'sd','sd','2020-02-03 14:11:58');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typography`
--

DROP TABLE IF EXISTS `typography`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typography` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typography`
--

LOCK TABLES `typography` WRITE;
/*!40000 ALTER TABLE `typography` DISABLE KEYS */;
/*!40000 ALTER TABLE `typography` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT 'name@domain.com',
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(100) DEFAULT 'user',
  `avatar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `about_me` varchar(5000) DEFAULT NULL,
  `facebook_url` varchar(500) DEFAULT NULL,
  `twitter_url` varchar(500) DEFAULT NULL,
  `google_url` varchar(500) DEFAULT NULL,
  `instagram_url` varchar(500) DEFAULT NULL,
  `pinterest_url` varchar(500) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `vk_url` varchar(500) DEFAULT NULL,
  `youtube_url` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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

-- Dump completed on 2020-02-05  0:14:19
