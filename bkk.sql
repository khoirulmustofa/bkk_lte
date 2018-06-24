/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.19-MariaDB : Database - bkk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bkk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bkk`;

/*Table structure for table `about_us` */

DROP TABLE IF EXISTS `about_us`;

CREATE TABLE `about_us` (
  `id_about_us` int(11) NOT NULL AUTO_INCREMENT,
  `name_about_us` varchar(50) NOT NULL,
  `description_about_us` text NOT NULL,
  PRIMARY KEY (`id_about_us`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `about_us` */

insert  into `about_us`(`id_about_us`,`name_about_us`,`description_about_us`) values (1,'Tentang KM Indonesia1','<p>Kami <strong>\"JobBank Indonesia\"</strong> yang dioperasikan oleh <strong>PT. GLOBAL ASIA KONSULTAN1</strong><br>\r\n<br>\r\n<strong>[Layanan Kami]</strong><br>\r\n- Mendukung Rekrutmen di Indonesian<br>\r\n- Memberikan informasi secara administratif tentang rekrutmen di Website ?JobBank? untuk para pencari kerja Indonesia<br>\r\n- Memberikan informasi secara administratrif tentang rekrutmen di Website ?R-Indonesia? untuk para pencari kerja orang Jepang dan orang asing lainnya<br>\r\n- Menyediakan eksekutif, professional dan sumber daya yang mampu berbahasa Jepang untuk perusahaan Jepang dan perusahaan Internasional lainnya<br>\r\n- Menyediakan murid Indonesia yang pernah belajar di Jepang</p>\r\n\r\n<h1>Nilai Kami</h1>\r\n\r\n<p><strong>Kejujuran</strong></p>\r\n\r\n<p>Kami menjembatani perbedaan budaya untuk memfasilitasi sebuah komunikasi yang transparan dan terbuka antara pemberi kerja dan karyawan. Kami memuji keadilan dan kejujuran, selalu berjuang untuk generalisasi akhir perjanjian yang paling berharga bagi kedua belah pihak.</p>\r\n\r\n<p><strong>Tanggungjawab</strong></p>\r\n\r\n<p>Kami berjuang untuk menawarkan nilai tinggi bagi pemberi kerja dan karyawan, memastikan rekrutmen yang berkelanjutan dan mengisi seluruh harapan untuk jangka waktu yang panjang. Kami memikirkan untuk perkembangan perusahaan Anda secara berkelanjutan dengan cara menginvestasikan waktu dengan memberikan kandidat yang tepat.</p>\r\n\r\n<p><strong>Kualitas</strong></p>\r\n\r\n<p>Kami mengadaptasi perubahan lingkungan yang cepat, memperbaharui pengetahuan kami secara terus menerus mengenai market tenaga kerja. Kami memperkuat kapasitas konsultasi dengan mengaplikasikan kebutuhan yang fleksibel untuk menyesuaikan dengan kebutuhan pelanggan. Pengalaman kami dapat memberikan aran dengan tepat untuk mencapai tujuan rekrutmen dan membangun karir.</p>');

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `name_company` varchar(200) DEFAULT NULL,
  `address_company` text,
  `email_company` varchar(200) DEFAULT NULL,
  `telepohone_company` varchar(15) DEFAULT NULL,
  `pic_company` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`id_company`,`name_company`,`address_company`,`email_company`,`telepohone_company`,`pic_company`) values (1,'PT Khoirul Mustofa 01','Jl Merdeka 01','merdeka@com','1234567890123','ahmad'),(2,'PT Khoirul Mustofa 02','Jl Merdeka 02','merdeka@com','1234567890124','ahmad'),(3,'PT Khoirul Mustofa 03','Jl Merdeka 03','merdeka@com','1234567890125','ahmad'),(4,'PT Khoirul Mustofa 04','Jl Merdeka 04','merdeka@com','1234567890126','ahmad'),(5,'PT Khoirul Mustofa 05','Jl Merdeka 05','merdeka@com','1234567890127','ahmad'),(6,'PT Khoirul Mustofa 06','Jl Merdeka 06','merdeka@com','1234567890128','ahmad'),(7,'PT Khoirul Mustofa 07','Jl Merdeka 07','merdeka@com','1234567890129','ahmad'),(8,'PT Khoirul Mustofa 08','Jl Merdeka 08','merdeka@com','1234567890130','ahmad'),(9,'PT Khoirul Mustofa 09','Jl Merdeka 09','merdeka@com','1234567890131','ahmad'),(10,'PT Khoirul Mustofa 10','Jl Merdeka 10','merdeka@com','1234567890132','ahmad');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL AUTO_INCREMENT,
  `name_gallery` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `description_gallery` text COLLATE latin1_general_ci,
  `path_gallery` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `gallery` */

insert  into `gallery`(`id_gallery`,`name_gallery`,`description_gallery`,`path_gallery`) values (3,'12','Duduk di Sofa','duduk-di-sofa'),(4,'12','Didepan Rumah','didepan-rumah'),(5,'12','Keluarga Bahagia','keluarga-bahagia'),(7,'19','Lebah','lebah'),(8,'17','Bangunan Jepang','bangunan-jepang'),(9,'17','Candi Merang','candi-merang'),(10,'18','Cukur Janggut','cukur-janggut'),(11,'18','Push Up','push-up'),(12,'19','Kuda Nyengir','kuda-nyengir'),(13,'21','Super Mario Bross','super-mario-bross'),(32,'21','Naruto','naruto'),(15,'21','Superman','superman'),(27,'21','Sonic','sonic'),(31,'21','Kungfu Panda','kungfu-panda'),(33,'21','Maskot Euro 2008','maskot-euro-2008'),(14,'21','Harry Potter','harry-potter'),(42,'21','Avatar','avatar'),(16,'21','Shrek','shrek'),(44,'21','Kenshin','kenshin'),(45,'21','Sun Goku','sun-goku'),(46,'21','Virtual Girl','virtual-girl');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values (1,'admin','Administrator'),(2,'members','General User');

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id_jobs` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jobs` varchar(50) NOT NULL,
  `description_jobs` text NOT NULL,
  `general_requirement_jobs` text NOT NULL,
  `language_requirement_jobs` text NOT NULL,
  `benefits_jobs` text NOT NULL,
  `salary_jobs` text NOT NULL,
  `work_location_jobs` text NOT NULL,
  `working_hours_jobs` text NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `date_upload` date NOT NULL,
  `date_close` date NOT NULL,
  PRIMARY KEY (`id_jobs`),
  KEY `jobs_company` (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `jobs` */

insert  into `jobs`(`id_jobs`,`nama_jobs`,`description_jobs`,`general_requirement_jobs`,`language_requirement_jobs`,`benefits_jobs`,`salary_jobs`,`work_location_jobs`,`working_hours_jobs`,`id_company`,`id_employee`,`date_upload`,`date_close`) values (1,'Jobs 1','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',1,1,'0000-00-00','0000-00-00'),(2,'Jobs 2','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',2,2,'0000-00-00','0000-00-00'),(3,'Jobs 3','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',3,3,'0000-00-00','0000-00-00'),(4,'Jobs 4','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',4,4,'0000-00-00','0000-00-00'),(5,'Jobs 5','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',5,5,'0000-00-00','0000-00-00'),(6,'Jobs 6','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',6,6,'0000-00-00','0000-00-00'),(7,'Jobs 7','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',7,7,'0000-00-00','0000-00-00'),(8,'Jobs 8','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',8,8,'0000-00-00','0000-00-00'),(9,'Jobs 9','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',9,9,'0000-00-00','0000-00-00'),(10,'Jobs 10','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',10,10,'0000-00-00','0000-00-00'),(11,'Jobs 11','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',1,11,'0000-00-00','0000-00-00'),(12,'Jobs 12','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',2,12,'0000-00-00','0000-00-00'),(13,'Jobs 13','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',3,13,'0000-00-00','0000-00-00'),(14,'Jobs 14','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',4,14,'0000-00-00','0000-00-00'),(15,'Jobs 15','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',5,15,'0000-00-00','0000-00-00'),(16,'Jobs 16','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',6,16,'0000-00-00','0000-00-00'),(17,'Jobs 17','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',7,17,'0000-00-00','0000-00-00'),(18,'Jobs 18','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',8,18,'0000-00-00','0000-00-00'),(19,'Jobs 19','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',9,19,'0000-00-00','0000-00-00'),(20,'Jobs 20','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',10,20,'0000-00-00','0000-00-00'),(21,'Jobs 21','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',1,21,'0000-00-00','0000-00-00'),(22,'Jobs 22','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',2,22,'0000-00-00','0000-00-00'),(23,'Jobs 23','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',3,23,'0000-00-00','0000-00-00'),(24,'Jobs 24','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',4,24,'0000-00-00','0000-00-00'),(25,'Jobs 25','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',5,25,'0000-00-00','0000-00-00'),(26,'Jobs 26','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',6,26,'0000-00-00','0000-00-00'),(27,'Jobs 27','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',7,27,'0000-00-00','0000-00-00'),(28,'Jobs 28','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',8,28,'0000-00-00','0000-00-00'),(29,'Jobs 29','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',9,29,'0000-00-00','0000-00-00'),(30,'Jobs 30','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',10,30,'0000-00-00','0000-00-00'),(31,'Jobs 31','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',1,31,'0000-00-00','0000-00-00'),(32,'Jobs 32','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',2,32,'0000-00-00','0000-00-00'),(33,'Jobs 33','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',3,33,'0000-00-00','0000-00-00'),(34,'Jobs 34','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',4,34,'0000-00-00','0000-00-00'),(35,'Jobs 35','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',5,35,'0000-00-00','0000-00-00'),(36,'Jobs 36','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',6,36,'0000-00-00','0000-00-00'),(37,'Jobs 37','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',7,37,'0000-00-00','0000-00-00'),(38,'Jobs 38','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',8,38,'0000-00-00','0000-00-00'),(39,'Jobs 39','Jobs 2','Jobs 3','Jobs 4','Jobs 5','Jobs 6','Jobs 7','Jobs 8',9,39,'0000-00-00','0000-00-00'),(40,'Tenant Leasing Manager - General Manager','<p>- Position : Production Control Staff<br>\r\n- Job description : In charge of Production Control in this company. Transactions with the US are scheduled to start.<br>\r\nThe client would like to ask someone who was engaged in communication work with English-speaking countries.<br>\r\n- Language skill : English (can communicate and work in English is a must)<br>\r\n- Age / Gender : max. 29 years old / Male and Female</p>','<p>MUST Have experience as Marketing research in either<br>\r\n?Nielsen?http://www.nielsen.com/id/en.html<br>\r\n?Ipsos?https://www.ipsos.com/en-id<br>\r\n?Toluna?http://www.toluna-group.com/en-gb/home<br>\r\n?Intage?https://www.intage.co.jp/english/<br>\r\n<br>\r\nLanguage Skill : English is a must (Business level)<br>\r\nAge?Gender: 24~38 y.o?any gender</p>','<p>MUST Have experience as Marketing research in either<br>\r\n?Nielsen?http://www.nielsen.com/id/en.html<br>\r\n?Ipsos?https://www.ipsos.com/en-id<br>\r\n?Toluna?http://www.toluna-group.com/en-gb/home<br>\r\n?Intage?https://www.intage.co.jp/english/<br>\r\n<br>\r\nLanguage Skill : English is a must (Business level)<br>\r\nAge?Gender: 24~38 y.o?any gender</p>','<p>MUST Have experience as Marketing research in either<br>\r\n?Nielsen?http://www.nielsen.com/id/en.html<br>\r\n?Ipsos?https://www.ipsos.com/en-id<br>\r\n?Toluna?http://www.toluna-group.com/en-gb/home<br>\r\n?Intage?https://www.intage.co.jp/english/<br>\r\n<br>\r\nLanguage Skill : English is a must (Business level)<br>\r\nAge?Gender: 24~38 y.o?any gender</p>','<p>7.0000.0000 - 12.000.000</p>','<p>Jobs 7</p>','<p>MUST Have experience as Marketing research in either<br>\r\n?Nielsen?http://www.nielsen.com/id/en.html<br>\r\n?Ipsos?https://www.ipsos.com/en-id<br>\r\n?Toluna?http://www.toluna-group.com/en-gb/home<br>\r\n?Intage?https://www.intage.co.jp/english/<br>\r\n<br>\r\nLanguage Skill : English is a must (Business level)<br>\r\nAge?Gender: 24~38 y.o?any gender</p>',10,40,'1900-12-29','1900-12-27');

/*Table structure for table `jobs_applied` */

DROP TABLE IF EXISTS `jobs_applied`;

CREATE TABLE `jobs_applied` (
  `id_jobs_applied` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `id_jobs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jobs_applied`),
  UNIQUE KEY `id_users` (`id_users`,`id_jobs`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `jobs_applied` */

insert  into `jobs_applied`(`id_jobs_applied`,`id_users`,`id_jobs`) values (1,0,0),(11,1,11),(21,1,21),(31,1,31),(2,2,2),(12,2,12),(22,2,22),(32,2,32),(3,3,3),(13,3,13),(23,3,23),(33,3,33),(4,4,4),(14,4,14),(24,4,24),(34,4,34),(5,5,5),(15,5,15),(25,5,25),(35,5,35),(6,6,6),(16,6,16),(26,6,26),(36,6,36),(7,7,7),(17,7,17),(27,7,27),(37,7,37),(8,8,8),(18,8,18),(28,8,28),(38,8,38),(9,9,9),(19,9,19),(29,9,29),(39,9,39),(10,10,10),(20,10,20),(30,10,30),(40,10,40);

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `management` */

DROP TABLE IF EXISTS `management`;

CREATE TABLE `management` (
  `id_management` int(11) NOT NULL AUTO_INCREMENT,
  `name_management` varchar(250) DEFAULT NULL,
  `description_management` text,
  `photo_management` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_management`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `management` */

insert  into `management`(`id_management`,`name_management`,`description_management`,`photo_management`) values (2,'SUZUKI TSUKASA','<p>Setelah lulus dari universitas, Tsukasa terlibat dalam berbagai usaha di bidang jasa pendidikan di Tokyo dan China (Beijing) selama 15 tahun. Setelah lulus dari universitas, Tsukasa terlibat dalam berbagai usaha bidang jasa pendidikan di Tokyo dan China (Beijing) selama 15 tahun. Setelah itu, ia bergabung dengan G.A. Consultant, Co.Ltd. Dengan mengambil keuntungan dari pengalaman di luar negeri sampai dengan sekarang, Tsukasa memegang kendali PT. GLOBAL ASIA KONSULTAN, dengan mengapdosi \"Jobbank Indonesia\" untuk merekrut orang Indonesia dan orang Jepang di \"R-Indonesia\". Lalu, Tsukasa membangun jaringan perusahaan Jepang di Indonesia dan akan membuka perubahan yang besar setiap tahun di Indonesia.<strong> Kata kuncinya adalah berjuang bersama dengan karyawan terbaik melalui \"sumber daya manusia\"!</strong></p>','Manager');

/*Table structure for table `service_flow_candidate` */

DROP TABLE IF EXISTS `service_flow_candidate`;

CREATE TABLE `service_flow_candidate` (
  `id_service_flow_candidate` int(11) NOT NULL AUTO_INCREMENT,
  `name_service_flow_candidate` varchar(250) NOT NULL,
  `description_service_flow_candidate` text NOT NULL,
  `icon_flow_candidate` varchar(50) NOT NULL,
  PRIMARY KEY (`id_service_flow_candidate`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `service_flow_candidate` */

insert  into `service_flow_candidate`(`id_service_flow_candidate`,`name_service_flow_candidate`,`description_service_flow_candidate`,`icon_flow_candidate`) values (1,'Mendaftar di JobBank','<p>Mendaftar di JobBank</p>','0'),(3,'Membuat resume Anda di JobBank kami','<p>Membuat resume Anda di JobBank kami</p>','0'),(4,'Ajukan untuk pekerjaan yang Anda inginkan dalam JobBank kami','<p>Konsultan kami secara bersamaan akan berburu Anda untuk pekerjaan yang cocok.</p>','0');

/*Table structure for table `service_flow_company` */

DROP TABLE IF EXISTS `service_flow_company`;

CREATE TABLE `service_flow_company` (
  `id_service_flow_company` int(11) NOT NULL AUTO_INCREMENT,
  `name_service_flow_company` varchar(250) NOT NULL,
  `description_flow_company` text NOT NULL,
  `icon_flow_company` varchar(50) NOT NULL,
  PRIMARY KEY (`id_service_flow_company`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `service_flow_company` */

insert  into `service_flow_company`(`id_service_flow_company`,`name_service_flow_company`,`description_flow_company`,`icon_flow_company`) values (1,'Kontak Awal','<p>Anda dapat menghubungi kami melalui telepon, fax, e-mail atau di kantor kami</p>','0'),(3,'Informasi Rekrutmen','<p>Melalui konsultasi kami akan menetapkan persyaratan Anda untuk menemukan kandidat yang cocok</p>','0'),(4,'Daftar singkat','<p>Kami menyediakan kandidat terpilih, yang sebelumnya diwawancarai dan disaring oleh kami</p>','0'),(5,'Wawancara','<p>Kami mengatur wawancara bagi Anda untuk mengevaluasi kandidat terpilih</p>','0'),(6,'Pekerjaan','<p>Kami memfasilitasi kesepakatan antara pengusaha dan calon dengan menyediakan konsultasi profesional tentang gaji dan kondisi kerja</p>','0'),(7,'Jaminan','<p>Kami memperkenalkan kandidat alternatif yang harus dipilih satu dan berhenti dari pekerjaannya dalam waktu 2 bulan.</p>','0');

/*Table structure for table `templates` */

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL AUTO_INCREMENT,
  `title_templates` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `folder_templates` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status_templates` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_templates`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `templates` */

insert  into `templates`(`id_templates`,`title_templates`,`folder_templates`,`status_templates`) values (1,'clipone','admin_lte','N'),(2,'color','color','Y');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`salt`,`email`,`activation_code`,`forgotten_password_code`,`forgotten_password_time`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`) values (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'Admin','istrator','ADMIN','0'),(3,'127.0.0.3','user2','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo38','','user2@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user2','user2','ADMIN','0'),(4,'127.0.0.4','user3','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo39','','user3@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user3','user3','ADMIN','0'),(5,'127.0.0.5','user4','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo40','','user4@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user4','user4','ADMIN','0'),(6,'127.0.0.6','user5','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo41','','user5@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user5','user5','ADMIN','0'),(7,'127.0.0.7','user6','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo42','','user6@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user6','user6','ADMIN','0'),(8,'127.0.0.8','user7','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo43','','user7@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user7','user7','ADMIN','0'),(9,'127.0.0.9','user8','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo44','','user8@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user8','user8','ADMIN','0'),(10,'127.0.0.10','user9','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo45','','user9@admin.com','',NULL,NULL,NULL,1268889823,1268889823,1,'user9','user9','ADMIN','0');

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (1,1,1),(2,1,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
