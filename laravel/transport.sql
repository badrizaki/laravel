/*
SQLyog Community v12.09 (64 bit)
MySQL - 10.1.26-MariaDB : Database - transport
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`transport` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `transport`;

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `cityId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `provinceId` bigint(20) NOT NULL,
  `cityName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cityId`),
  KEY `cities_cityname_index` (`cityName`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cities` */

insert  into `cities`(`cityId`,`provinceId`,`cityName`,`created_at`,`updated_at`) values (1,1,'Jakarta Timur','2017-09-21 19:47:08',NULL),(2,1,'Jakarta Barat','2017-09-21 19:47:08',NULL),(3,1,'Jakarta Pusat','2017-09-21 19:47:08',NULL),(4,1,'Jakarta Selatan','2017-09-21 19:47:08',NULL),(5,1,'Jakarta Utara','2017-09-21 19:47:08',NULL),(6,2,'Banda Aceh','2017-09-21 19:47:08',NULL),(7,2,'Langsa','2017-09-21 19:47:08',NULL),(8,2,'Lhokseumawe','2017-09-21 19:47:08',NULL),(9,2,'Meulaboh','2017-09-21 19:47:08',NULL),(10,2,'Sabang','2017-09-21 19:47:08',NULL),(11,2,'Subulussalam','2017-09-21 19:47:08',NULL),(12,3,'Denpasar','2017-09-21 19:47:08',NULL),(13,4,'Pangkalpinang','2017-09-21 19:47:08',NULL),(14,5,'Cilegon','2017-09-21 19:47:08',NULL),(15,5,'Serang','2017-09-21 19:47:08',NULL),(16,5,'Tangerang Selatan','2017-09-21 19:47:08',NULL),(17,5,'Tangerang','2017-09-21 19:47:08',NULL),(18,6,'Bengkulu','2017-09-21 19:47:08',NULL),(19,7,'Gorontalo','2017-09-21 19:47:08',NULL),(20,8,'Sungai Penuh','2017-09-21 19:47:08',NULL),(21,8,'Jambi','2017-09-21 19:47:08',NULL),(22,9,'Bandung','2017-09-21 19:47:08',NULL),(23,9,'Bekasi','2017-09-21 19:47:08',NULL),(24,9,'Bogor','2017-09-21 19:47:08',NULL),(25,9,'Cimahi','2017-09-21 19:47:08',NULL),(26,9,'Cirebon','2017-09-21 19:47:08',NULL),(27,9,'Depok','2017-09-21 19:47:08',NULL),(28,9,'Sukabumi','2017-09-21 19:47:08',NULL),(29,9,'Tasikmalaya','2017-09-21 19:47:08',NULL),(30,9,'Banjar','2017-09-21 19:47:08',NULL);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customerId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customerCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'company code (initial+001 sample : APS001)',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'company name',
  `isShipper` tinyint(3) unsigned DEFAULT '0' COMMENT '0:not shipper, 1:shipper',
  `isCarrier` tinyint(3) unsigned DEFAULT '0' COMMENT '0:not carrier, 1:carrier',
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customerId`),
  UNIQUE KEY `customers_customercode_unique` (`customerCode`),
  KEY `customers_name_index` (`name`),
  KEY `customers_isshipper_index` (`isShipper`),
  KEY `customers_iscarrier_index` (`isCarrier`),
  KEY `customers_country_index` (`country`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`customerId`,`customerCode`,`name`,`isShipper`,`isCarrier`,`country`,`address`,`city`,`postalCode`,`phone1`,`phone2`,`phone3`,`fax`,`created_at`,`updated_at`) values (1,'TNC001','Transport New Company',1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-17 12:26:39','2017-09-17 12:26:39'),(2,'T001','Transport',1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-17 12:26:39','2017-09-17 12:26:39'),(3,'TNC002','Transport New Companys',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-17 15:49:48','2017-09-17 15:49:48'),(5,'TNC003','Transport New Companies',0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-17 16:24:12','2017-09-17 16:24:12');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_09_16_150839_create_customers',1),(4,'2017_09_20_190106_create_provinces',2),(5,'2017_09_20_190153_create_cities',2),(6,'2017_09_20_190816_create_zones',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('badrizaki@gmail.com','$2y$10$72MsmTBzHjHtaiUmM5kQe.JEimKMspMdMC1JqXHdP4fKOUwDkwZeS','2017-09-17 17:56:48');

/*Table structure for table `provinces` */

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `provinceId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `provinceName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`provinceId`),
  KEY `provinces_provincename_index` (`provinceName`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `provinces` */

insert  into `provinces`(`provinceId`,`provinceName`,`created_at`,`updated_at`) values (1,'Jakarta','2017-09-21 19:21:20','2017-09-21 19:21:20'),(2,'Aceh','2017-09-21 19:21:20',NULL),(3,'Bali','2017-09-21 19:21:20',NULL),(4,'Bangka Belitung','2017-09-21 19:21:20',NULL),(5,'Banten','2017-09-21 19:21:20',NULL),(6,'Bengkulu','2017-09-21 19:21:20',NULL),(7,'Gorontalo','2017-09-21 19:21:20',NULL),(8,'Jambi','2017-09-21 19:21:20',NULL),(9,'Jawa Barat','2017-09-21 19:21:20',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` bigint(20) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'name from user',
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailConfirmed` tinyint(4) DEFAULT '1' COMMENT 'email active, 0:not active, 1:active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_customerid_index` (`customerId`),
  KEY `users_emailconfirmed_index` (`emailConfirmed`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`customerId`,`name`,`username`,`email`,`password`,`emailConfirmed`,`remember_token`,`created_at`,`updated_at`) values (1,1,'Badri','bazach','badrizaki@gmail.com','$2y$10$0mdl3hWNfmtIyNR5x/D7vO0biV7JjpAqyHApnFX6OUK0tHE9toH1q',1,'AblUKI3PfhWkJr36TUQkfCAgXwEknNB7uQ554MUQVUAy2MwKxII797IS2Ot1','2017-09-17 12:26:39','2017-09-17 17:19:35'),(2,1,'Badri Zaki','admin','admin@transport.com','$2y$10$Bp/rTk67Q71JMYfFDK.2rODDJnfySAZyKISpiBM8F5w59lKwC60Te',1,'PKTVu3NoPMYt0vRzAqfPKRHgwvYjw1qXLhDG3RiadPboYWw1LnzqukVo51xF','2017-09-17 15:49:49','2017-09-17 15:49:49'),(3,1,'Zaki','admin1234','admin@admin.com','$2y$10$EsB4Cq3L9JFwCos5iz0TNeO1ao8tG9OWe1rUJlqw9rVtjXVOtY9gq',1,'I4XF92CRd5wDXp8KJQvbrT1N3nXpANjpsdarh0eKmGSWT8CH1HnIHjX0XHZQ','2017-09-17 16:24:12','2017-09-17 16:24:12');

/*Table structure for table `zones` */

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `zoneId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `provinceId` bigint(20) NOT NULL,
  `cityId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT 'Customer Created',
  `zoneName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`zoneId`),
  KEY `zones_provinceid_index` (`provinceId`),
  KEY `zones_cityid_index` (`cityId`),
  KEY `zones_customerid_index` (`customerId`),
  KEY `zones_zonename_index` (`zoneName`),
  KEY `zones_longitude_index` (`longitude`),
  KEY `zones_latitude_index` (`latitude`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `zones` */

insert  into `zones`(`zoneId`,`provinceId`,`cityId`,`customerId`,`zoneName`,`address`,`longitude`,`latitude`,`created_at`,`updated_at`) values (1,1,1,1,'ok','Jawa Barat, Indonesia','107.66888700000004','-7.090910999999999','2017-09-22 09:06:36','2017-09-22 09:06:36'),(2,1,1,1,'Tes','Jawa Barat, Indonesia','107.66888700000004','-7.090910999999999','2017-09-22 09:22:07','2017-09-22 09:22:07'),(3,2,11,1,'Update','Jalan Haji. Ten 4, Rawamangun, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia','106.87595699999997','-6.188891099999999','2017-09-22 09:26:26','2017-09-22 15:39:31'),(4,2,7,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:42','2017-09-22 11:39:42'),(5,2,7,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:44','2017-09-22 11:39:44'),(6,2,7,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:46','2017-09-22 11:39:46'),(7,2,9,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:47','2017-09-22 11:39:47'),(8,2,7,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:48','2017-09-22 11:39:48'),(9,2,9,1,'New Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:49','2017-09-22 11:39:49'),(10,2,9,1,'Aceh Zone','Aceh, Indonesia','96.74939930000005','4.695135','2017-09-22 11:39:54','2017-09-22 11:39:54'),(11,1,1,1,'Jakarta','Jalan Haji. Ten 4, Rawamangun, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia','106.87595699999997','-6.188891099999999','2017-09-22 11:40:23','2017-09-22 11:40:23'),(12,9,22,1,'Bandung','Jalan Haji. Ten 4, Rawamangun, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia','106.87595699999997','-6.188891099999999','2017-09-22 11:40:37','2017-09-22 11:40:37'),(13,9,22,1,'Bandung','Jalan Haji. Ten 4, Rawamangun, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta, Indonesia','106.87595699999997','-6.188891099999999','2017-09-22 11:40:38','2017-09-22 11:40:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
