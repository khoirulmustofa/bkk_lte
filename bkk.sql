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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`id_company`,`name_company`,`address_company`,`email_company`,`telepohone_company`,`pic_company`) values (1,'PT jago1','<p><strong>dgfd1</strong></p>','gdfgd1','fgdfg1','gd1'),(4,'sdf','<p>gffd</p>','fgfh','hfg','fgh');

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
  PRIMARY KEY (`id_jobs`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jobs` */

insert  into `jobs`(`id_jobs`,`nama_jobs`,`description_jobs`,`general_requirement_jobs`,`language_requirement_jobs`,`benefits_jobs`,`salary_jobs`,`work_location_jobs`,`working_hours_jobs`,`id_company`,`id_employee`,`date_upload`,`date_close`) values (1,'dw1','<p>dfas1</p>','<p>sfd1</p>','<p>sdfs1</p>','<p>asdf1</p>','<p>sdf1</p>','<p>dfs1</p>','<p>sdf1</p>',1,1,'0000-00-00','1900-01-23'),(2,'sd','<p>sg</p>','<p>dsg</p>','<p>sdg</p>','<p>sdg</p>','<p>sg</p>','<p>sg</p>','<p>sdg</p>',1,1,'0000-00-00','1900-11-14'),(4,'QA Supervisor','<p>Job Descriptions?:<br>\r\nTechnical Support and Quality Assurance Supervisor to provide enterprise-level assistance to our customers. And we expect you to become a manager to lead quality assurance and control department in the future. You will diagnose and troubleshoot our nylon film product problems and help our customers for product complains.<br>\r\n<br>\r\nThe responsibilities include resolving product defects to immediate support to our customer. You will also use e-mail to give client quick answer for simple product issues. For more complex problem that require nuanced instruction, you will often travel either domestically or abroad, or contact via phone and/or provide clear, written instructions and technical manuals.</p>','<p>- Any gender max 40 years old<br>\r\n- Min D3 graduated<br>\r\n- Experience in QA or Technical Support</p>','<p>English (Tingkat Menegah)</p>','<p>?Allowance????</p>\r\n\r\n<p>?Transportation Rp. 15.000/ day, Meals are provided at the company&#39;s canteen,Family, for the entitled,Tunjangan haid for the entitled, Additional private health insurance?</p>','<p>8,000,000 - 10,000,000 IDR (NET) Based on Company Rules</p>','<p><a href=\"http://www.jobbank.co.id/jobs/city/cikarang.html?lang=english\" target=\"_blank\">Cikarang, Cikarang</a></p>','<p>BPJS Health : 1% by employee and 4% by company, Pension: 1% by employee and 2% by company<br>\r\nJamsostek : 2% by employee and 3.7% by company</p>',1,1,'2018-06-12','2018-07-31'),(6,'ttttttttttttttttttttt','<p>administrator</p>','<p>administrator</p>','<p>administrator</p>','<p>administrator</p>','<p>administrator</p>','<p>administrator</p>','<p>administrator</p>',1,1,'2018-06-24','2018-06-27'),(8,'11','<p>11</p>','<p>51</p>','<p>21</p>','<p>21</p>','<p>21</p>','<p>221</p>','<p>21</p>',21,21,'2018-06-20','2018-07-20');

/*Table structure for table `service_flow_candidate` */

DROP TABLE IF EXISTS `service_flow_candidate`;

CREATE TABLE `service_flow_candidate` (
  `id_service_flow_candidate` int(11) NOT NULL AUTO_INCREMENT,
  `name_service_flow_candidate` varchar(250) NOT NULL,
  `description_service_flow_candidate` text NOT NULL,
  `icon_flow_candidate` varchar(50) NOT NULL,
  PRIMARY KEY (`id_service_flow_candidate`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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

insert  into `templates`(`id_templates`,`title_templates`,`folder_templates`,`status_templates`) values (1,'clipone','admin_lte','N'),(2,'clipfront','admin_lte','Y');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
