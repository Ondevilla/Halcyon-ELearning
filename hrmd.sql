/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.42-community : Database - hmhs_elearning
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hmhs_elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hmhs_elearning`;

/*Table structure for table `choicetable` */

DROP TABLE IF EXISTS `choicetable`;

CREATE TABLE `choicetable` (
  `choiceid` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` varchar(255) NOT NULL,
  `choicea` varchar(255) NOT NULL,
  `choiceb` varchar(255) NOT NULL,
  `choicec` varchar(255) NOT NULL,
  `choiced` varchar(255) NOT NULL,
  `imagea` varchar(255) NOT NULL,
  `imageb` varchar(255) NOT NULL,
  `imagec` varchar(255) NOT NULL,
  `imaged` varchar(255) NOT NULL,
  PRIMARY KEY (`choiceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `choicetable` */

/*Table structure for table `cor_progress` */

DROP TABLE IF EXISTS `cor_progress`;

CREATE TABLE `cor_progress` (
  `user_cpID` int(255) NOT NULL AUTO_INCREMENT,
  `userId` int(255) DEFAULT NULL,
  `posId` int(255) DEFAULT NULL,
  `status` enum('Completed','Pending','On-going') DEFAULT NULL,
  `datetime_start` datetime DEFAULT NULL,
  `datetime_end` datetime DEFAULT NULL,
  `courseId` int(255) DEFAULT NULL,
  `coursename` varchar(255) DEFAULT NULL,
  `isStart` int(1) DEFAULT NULL,
  `isFinish` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_cpID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cor_progress` */

insert  into `cor_progress`(`user_cpID`,`userId`,`posId`,`status`,`datetime_start`,`datetime_end`,`courseId`,`coursename`,`isStart`,`isFinish`) values (1,97,62,'On-going','2017-06-22 12:47:20','2017-06-22 13:36:28',3,'Course 1 Sample 1.1',1,1),(2,97,62,'On-going','2017-06-22 13:36:36',NULL,4,'Course 2 sample 1',1,NULL),(3,97,62,'Pending',NULL,NULL,5,'HR Course',NULL,NULL);

/*Table structure for table `counter` */

DROP TABLE IF EXISTS `counter`;

CREATE TABLE `counter` (
  `countId` int(11) NOT NULL AUTO_INCREMENT,
  `filler` varchar(255) NOT NULL,
  PRIMARY KEY (`countId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `counter` */

/*Table structure for table `coursemodule` */

DROP TABLE IF EXISTS `coursemodule`;

CREATE TABLE `coursemodule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL,
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `coursemodule` */

insert  into `coursemodule`(`id`,`modulename`,`courseid`,`moduleid`) values (1,'Module Sample 1',3,1),(2,'Module Sample 2 ',3,2),(3,'Module Sample 3',4,3),(4,'Module Sample 4',4,4),(5,'m,odule 3',3,5);

/*Table structure for table `courseposition` */

DROP TABLE IF EXISTS `courseposition`;

CREATE TABLE `courseposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `positionname` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `courseid` int(11) DEFAULT NULL,
  `jobid` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `imagebg` varchar(255) DEFAULT NULL,
  `imagetheme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `courseposition` */

insert  into `courseposition`(`id`,`positionname`,`coursename`,`courseid`,`jobid`,`image`,`imagebg`,`imagetheme`) values (3,'Billing Specialist','Course 1 Sample 1.1',3,62,'img/25.jpeg','img/26.jpeg','rgba(255, 235, 59, 0.7)'),(4,'Billing Specialist','Course 2 sample 1',4,62,'img/23.jpeg','img/24.jpeg','rgba(3, 169, 244, 0.7)'),(5,'Billing Specialist','HR Course',5,62,'img/27.jpeg','img/28.jpeg','rgba(244, 67, 54, 0.7)');

/*Table structure for table `date1` */

DROP TABLE IF EXISTS `date1`;

CREATE TABLE `date1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date1` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `date1` */

insert  into `date1`(`id`,`date1`) values (1,'Given this 20th of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(2,'Given this 21st of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(3,'Given this 19th of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(4,'Given this 7th of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(5,'Given this 23rd of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(6,'Given this 23rd of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.'),(7,'Given this 16th of June 2017 at hmhs_elearningcyon Marine Head Office Makati City, Philippines.');

/*Table structure for table `empcourse` */

DROP TABLE IF EXISTS `empcourse`;

CREATE TABLE `empcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empId` varchar(255) NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `isFinished` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empcourse` */

/*Table structure for table `employeetb` */

DROP TABLE IF EXISTS `employeetb`;

CREATE TABLE `employeetb` (
  `empId` double unsigned DEFAULT NULL,
  `type` varchar(36) DEFAULT NULL,
  `isEnrolled` varchar(255) NOT NULL,
  `empno` varchar(60) DEFAULT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `fname` varchar(300) DEFAULT NULL,
  `mname` varchar(105) DEFAULT NULL,
  `lname` varchar(105) DEFAULT NULL,
  `nickname` varchar(60) DEFAULT NULL,
  `gender` varchar(18) DEFAULT NULL,
  `civilStatus` double DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `birthPlace` varchar(105) DEFAULT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `nationality` varchar(120) DEFAULT NULL,
  `religion` varchar(120) DEFAULT NULL,
  `height` varchar(30) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL,
  `m_fname` varchar(105) DEFAULT NULL,
  `m_mname` varchar(105) DEFAULT NULL,
  `m_lname` varchar(105) DEFAULT NULL,
  `f_fname` varchar(105) DEFAULT NULL,
  `f_mname` varchar(105) DEFAULT NULL,
  `f_lname` varchar(105) DEFAULT NULL,
  `spouse_fname` varchar(105) DEFAULT NULL,
  `spouse_mname` varchar(105) DEFAULT NULL,
  `spouse_lname` varchar(105) DEFAULT NULL,
  `emerg_person` varchar(300) DEFAULT NULL,
  `emerg_relation` varchar(75) DEFAULT NULL,
  `emerg_contact` varchar(150) DEFAULT NULL,
  `emerg_address1` varchar(300) DEFAULT NULL,
  `emerg_address2` varchar(300) DEFAULT NULL,
  `emerg_address3` varchar(300) DEFAULT NULL,
  `date_hire` date DEFAULT NULL,
  `date_regular` date DEFAULT NULL,
  `date_separated` date DEFAULT NULL,
  `separation_reason` double DEFAULT NULL,
  `telno` varchar(60) DEFAULT NULL,
  `cellphone` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `sssno` varchar(45) DEFAULT NULL,
  `tinno` varchar(45) DEFAULT NULL,
  `hdmfno` varchar(45) DEFAULT NULL,
  `philno` varchar(45) DEFAULT NULL,
  `address1` varchar(150) DEFAULT NULL,
  `address2` varchar(150) DEFAULT NULL,
  `address3` varchar(150) DEFAULT NULL,
  `city` double DEFAULT NULL,
  `province` double DEFAULT NULL,
  `zipcode` varchar(21) DEFAULT NULL,
  `country` varchar(105) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `isDeleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employeetb` */

insert  into `employeetb`(`empId`,`type`,`isEnrolled`,`empno`,`fullname`,`fname`,`mname`,`lname`,`nickname`,`gender`,`civilStatus`,`birthDate`,`birthPlace`,`picture`,`nationality`,`religion`,`height`,`weight`,`m_fname`,`m_mname`,`m_lname`,`f_fname`,`f_mname`,`f_lname`,`spouse_fname`,`spouse_mname`,`spouse_lname`,`emerg_person`,`emerg_relation`,`emerg_contact`,`emerg_address1`,`emerg_address2`,`emerg_address3`,`date_hire`,`date_regular`,`date_separated`,`separation_reason`,`telno`,`cellphone`,`email`,`sssno`,`tinno`,`hdmfno`,`philno`,`address1`,`address2`,`address3`,`city`,`province`,`zipcode`,`country`,`isActive`,`isDeleted`) values (1,NULL,'yes',NULL,'kenneth melindo berte','kenneth','melindo','berte','ken','male',0,'0000-00-00','davao',NULL,'filipino','catholic','165','165','try','try','try','try','try','try','try','try','try','try','try','try','try','try','try','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `empmodule` */

DROP TABLE IF EXISTS `empmodule`;

CREATE TABLE `empmodule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moduleId` varchar(255) NOT NULL,
  `moduleName` varchar(255) NOT NULL,
  `courseid` varchar(255) NOT NULL,
  `empId` varchar(255) NOT NULL,
  `isFinished` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empmodule` */

/*Table structure for table `fcourse` */

DROP TABLE IF EXISTS `fcourse`;

CREATE TABLE `fcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(255) NOT NULL,
  `cdetails` varchar(255) NOT NULL,
  `isActive` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imagebg` varchar(255) DEFAULT NULL,
  `imagetheme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `fcourse` */

insert  into `fcourse`(`id`,`coursename`,`cdetails`,`isActive`,`image`,`imagebg`,`imagetheme`) values (1,'Course Sample 1 ','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.','0','img/1.jpeg','img/2.jpeg','rgba(3, 169, 244, 0.7)'),(2,'Course Sample 2','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.','0','img/3.jpeg','img/4.jpeg','rgba(0, 150, 136, 0.7)'),(3,'Course 1 Sample 1.1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','1','img/25.jpeg','img/26.jpeg','rgba(255, 235, 59, 0.7)'),(4,'Course 2 sample 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','1','img/23.jpeg','img/24.jpeg','rgba(3, 169, 244, 0.7)'),(5,'HR Course','Text Sample','1','img/27.jpeg','img/28.jpeg','rgba(244, 67, 54, 0.7)');

/*Table structure for table `flashtable` */

DROP TABLE IF EXISTS `flashtable`;

CREATE TABLE `flashtable` (
  `flashid` int(11) NOT NULL AUTO_INCREMENT,
  `flashtitle` varchar(255) NOT NULL,
  `flashname` varchar(255) NOT NULL,
  `moduleid` varchar(255) NOT NULL,
  PRIMARY KEY (`flashid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `flashtable` */

insert  into `flashtable`(`flashid`,`flashtitle`,`flashname`,`moduleid`) values (1,'flash sample 1','fla/9.swf','1'),(2,'sample 3 flash','fla/13.swf','3'),(3,'sample 3.1 flash','fla/14.swf','3'),(4,'sample 2 flash','fla/16.swf','2'),(5,'Payroll flash','fla/29.swf','1');

/*Table structure for table `fposition` */

DROP TABLE IF EXISTS `fposition`;

CREATE TABLE `fposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `positionname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

/*Data for the table `fposition` */

insert  into `fposition`(`id`,`positionname`) values (62,'Billing Specialist');

/*Table structure for table `imagetable` */

DROP TABLE IF EXISTS `imagetable`;

CREATE TABLE `imagetable` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `imagetitle` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `moduleid` varchar(255) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `imagetable` */

insert  into `imagetable`(`imageid`,`imagetitle`,`imagename`,`moduleid`) values (1,'Image sample 1','img/7.jpeg','1'),(2,'sample 3 image','img/11.jpeg','3'),(3,'sample 3.1','img/12.jpeg','3');

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `Rdate` date DEFAULT NULL,
  `Rtime` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`id`,`user`,`remarks`,`Rdate`,`Rtime`) values (1,'CATHY L. SESPEÑE','Logged In','2017-06-22','08:42:03'),(2,'CATHY L. SESPEÃ‘E','Course Course Sample 1  disabled','2017-06-22','08:42:47'),(3,'CATHY L. SESPEÃ‘E','Course Course Sample 2 disabled','2017-06-22','08:43:27'),(4,'CATHY L. SESPEÃ‘E','Created Course Course 1','2017-06-22','08:45:06'),(5,'CATHY L. SESPEÃ‘E','Course 1 Tagged to Billing Specialist','2017-06-22','08:45:37'),(6,'CATHY L. SESPEÃ‘E','Course 1 changed to Course 1 Sample','2017-06-22','08:47:31'),(7,'CATHY L. SESPEÃ‘E','Created Course Course 2 Sample','2017-06-22','08:49:05'),(8,'CATHY L. SESPEÃ‘E','Course 2 Sample Tagged to Billing Specialist','2017-06-22','08:49:28'),(9,'CATHY L. SESPEÃ‘E','Module Sample 1 module created and tag to course Course 1 Sample','2017-06-22','08:51:14'),(10,'CATHY L. SESPEÃ‘E','Module Sample 2  module created and tag to course Course 1 Sample','2017-06-22','08:51:33'),(11,'CATHY L. SESPEÃ‘E','Module Sample 3 module created and tag to course Course 2 Sample','2017-06-22','08:51:53'),(12,'CATHY L. SESPEÃ‘E','Module Sample 4 module created and tag to course Course 2 Sample','2017-06-22','08:52:10'),(13,'CATHY L. SESPEÃ‘E','Add new text: Text 1 Sample from  Module Sample 1','2017-06-22','08:54:00'),(14,'CATHY L. SESPEÃ‘E','Add new Image: Image sample 1 from  Module Sample 1','2017-06-22','08:54:38'),(15,'CATHY L. SESPEÃ‘E','Add Video: sample 1 video from Module Sample 1','2017-06-22','08:56:02'),(16,'CATHY L. SESPEÃ‘E','Add new Flash: flash sample 1 from  Module Sample 1','2017-06-22','08:56:41'),(17,'CATHY L. SESPEÃ‘E','Add new text: sample 3 text from  Module Sample 3','2017-06-22','08:59:47'),(18,'CATHY L. SESPEÃ‘E','Add new text: sample 3.1 from  Module Sample 3','2017-06-22','09:00:15'),(19,'CATHY L. SESPEÃ‘E','Add Video: sample 3 video from Module Sample 3','2017-06-22','09:00:46'),(20,'CATHY L. SESPEÃ‘E','Add new Image: sample 3 image from  Module Sample 3','2017-06-22','09:01:14'),(21,'CATHY L. SESPEÃ‘E','Add new Image: sample 3.1 from  Module Sample 3','2017-06-22','09:01:41'),(22,'CATHY L. SESPEÃ‘E','Add new Flash: sample 3 flash from  Module Sample 3','2017-06-22','09:02:13'),(23,'CATHY L. SESPEÃ‘E','Add new Flash: sample 3.1 flash from  Module Sample 3','2017-06-22','09:02:40'),(24,'CATHY L. SESPEÃ‘E','Add new text: sample 4 text  from  Module Sample 4','2017-06-22','09:03:05'),(25,'CATHY L. SESPEÃ‘E','Add Video: sample 2  from Module Sample 2 ','2017-06-22','09:04:04'),(26,'CATHY L. SESPEÃ‘E','Add new Flash: sample 2 flash from  Module Sample 2 ','2017-06-22','09:04:31'),(27,'CATHY L. SESPEÃ‘E','Course 1 Sample changed to Course sample 1','2017-06-22','09:06:20'),(28,'CATHY L. SESPEÃ‘E','Course sample 1 changed to Course sample 1.1','2017-06-22','09:07:29'),(29,'CATHY L. SESPEÃ‘E','Add new Question : Question 1 from Module Sample 1','2017-06-22','09:09:39'),(30,'CATHY L. SESPEÃ‘E','Remove Questions :Question 1 from Module Sample 1','2017-06-22','09:09:56'),(31,'CATHY L. SESPEÃ‘E','Add new Question : Question 1: All Text from Module Sample 1','2017-06-22','09:10:34'),(32,'CATHY L. SESPEÃ‘E','Add new Question : Question 2: All image from Module Sample 1','2017-06-22','09:11:49'),(33,'LEO JOSE L. LUZ','Course sample 1.1 changed to Course sample 1.1','2017-06-22','09:11:55'),(34,'CATHY L. SESPEÃ‘E','Remove Questions :Question 2: All image from Module Sample 1','2017-06-22','09:12:25'),(35,'CATHY L. SESPEÃ‘E','Add new Question : Question 2: Combination of Text and Image from Module Sample 1','2017-06-22','09:13:22'),(36,'CATHY L. SESPEÃ‘E','Add new Question : Question 3: Text and Image  from Module Sample 1','2017-06-22','09:15:44'),(37,'CATHY L. SESPEÃ‘E','Remove Questions :Question 3: Text and Image  from Module Sample 1','2017-06-22','09:17:08'),(38,'CATHY L. SESPEÃ‘E','Add new Question : Question 3: Combination of Text and Image from Module Sample 1','2017-06-22','09:17:57'),(39,'LEO JOSE L. LUZ','Course 2 Sample changed to Course 2 sample 1','2017-06-22','09:18:34'),(40,'CATHY L. SESPEÃ‘E','Add new Question : Question 4: Combination of Text and Image from Module Sample 1','2017-06-22','09:19:08'),(41,'CATHY L. SESPEÃ‘E','Add new Question : Question 1: retake from Module Sample 2 ','2017-06-22','09:20:25'),(42,'CATHY L. SESPEÃ‘E','Add new Question : Question 1: sample from Module Sample 4','2017-06-22','09:21:12'),(43,'LEO JOSE L. LUZ','Logged In','2017-06-22','09:23:56'),(44,'','Logged In','2017-06-22','09:28:12'),(45,'LEO JOSE L. LUZ','Logged In','2017-06-22','09:30:20'),(46,'LEO JOSE L. LUZ','Logged In','2017-06-22','09:38:57'),(47,'LEO JOSE L. LUZ','ELearning: Certificate of GRACE A. GUEVARRA had been generated','2017-06-22','09:41:06'),(48,'CATHY L. SESPEÑE','Logged In','2017-06-22','09:47:45'),(49,'LEO JOSE L. LUZ','Logged In','2017-06-22','09:48:23'),(50,'CATHY L. SESPEÑE','Logged In','2017-06-22','09:49:10'),(51,'CATHY L. SESPEÑE','Logged In','2017-06-22','09:52:18'),(52,'CATHY L. SESPEÑE','Course sample 1.1 changed to Course 1 Sample 1.1','2017-06-22','10:05:36'),(53,'LEO JOSE L. LUZ','Logged In','2017-06-22','10:20:48'),(54,'LEO JOSE L. LUZ','Export Excel','2017-06-22','10:22:49'),(55,'LEO JOSE L. LUZ','Export Excel','2017-06-22','10:23:23'),(56,'LEO JOSE L. LUZ','Created Course HR Course','2017-06-22','10:27:56'),(57,'LEO JOSE L. LUZ','HR Course Tagged to Billing Specialist','2017-06-22','10:28:42'),(58,'LEO JOSE L. LUZ','m,odule 3 module created and tag to course Course 1 Sample 1.1','2017-06-22','10:33:01'),(59,'LEO JOSE L. LUZ','Add new Flash: Payroll flash from  Module Sample 1','2017-06-22','10:34:22'),(60,'LEO JOSE L. LUZ','ELearning: Certificate of RONNIE P. HAPSON had been generated','2017-06-22','10:38:18'),(61,'LEO JOSE L. LUZ','Logged In','2017-06-22','10:40:13'),(62,'RONNIE P. HAPSON','Logged In','2017-06-22','10:41:57'),(63,'RONNIE P. HAPSON','Start Module','2017-06-22','10:43:06'),(64,'RONNIE P. HAPSON','Start course Course 1 Sample 1.1','2017-06-22','10:44:11'),(65,'RONNIE P. HAPSON','Start module Module Sample 1  from course Course 1 Sample 1.1','2017-06-22','10:44:14'),(66,'RONNIE P. HAPSON','Start quiz on module Module Sample 1  from course Billing Specialist','2017-06-22','10:53:20'),(67,'LEO JOSE L. LUZ','Logged In','2017-06-22','10:57:15'),(68,'RONNIE P. HAPSON','Logged In','2017-06-22','11:29:04'),(69,'RONNIE P. HAPSON','Logged In','2017-06-22','11:31:01'),(70,'RONNIE P. HAPSON','Retake quiz on module Module Sample 1  from course Billing Specialist','2017-06-22','11:32:40'),(71,'RONNIE P. HAPSON','Logged In','2017-06-22','11:40:17'),(72,'RONNIE P. HAPSON','Start module Module Sample 2   from course Course 1 Sample 1.1','2017-06-22','11:45:08'),(73,'RONNIE P. HAPSON','Start course Course 2 sample 1','2017-06-22','11:54:00'),(74,'RONNIE P. HAPSON','Start course HR Course and Completed','2017-06-22','11:54:04'),(75,'LEO JOSE L. LUZ','Logged In','2017-06-22','12:04:04'),(76,'RONNIE P. HAPSON','Logged In','2017-06-22','12:46:59'),(77,'RONNIE P. HAPSON','Start course Course 1 Sample 1.1','2017-06-22','12:47:20'),(78,'RONNIE P. HAPSON','Start module Module Sample 1  from course Course 1 Sample 1.1','2017-06-22','12:47:23'),(79,'RONNIE P. HAPSON','Start quiz on module Module Sample 1  from course Billing Specialist','2017-06-22','12:47:42'),(80,'RONNIE P. HAPSON','Finish module and quiz Module Sample 1  from course Billing Specialist and got score of 3','2017-06-22','12:48:24'),(81,'RONNIE P. HAPSON','Logged In','2017-06-22','13:01:44'),(82,'RONNIE P. HAPSON','Start module Module Sample 2   from course Course 1 Sample 1.1','2017-06-22','13:02:09'),(83,'RONNIE P. HAPSON','Start quiz on module Module Sample 2   from course Billing Specialist','2017-06-22','13:02:23'),(84,'RONNIE P. HAPSON','Finish module and quiz Module Sample 2   from course Billing Specialist and got score of 1','2017-06-22','13:02:35'),(85,'RONNIE P. HAPSON','Start module m,odule 3  from course Course 1 Sample 1.1','2017-06-22','13:02:52'),(86,'RONNIE P. HAPSON','Retake quiz on module m,odule 3  from course Billing Specialist','2017-06-22','13:04:51'),(87,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:26:53'),(88,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:26:53'),(89,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:36:28'),(90,'RONNIE P. HAPSON','Finish Course Billing Specialist','2017-06-22','13:36:28'),(91,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:36:28'),(92,'RONNIE P. HAPSON','Start course Course 2 sample 1','2017-06-22','13:36:36'),(93,'RONNIE P. HAPSON','Logged In','2017-06-22','13:38:07'),(94,'RONNIE P. HAPSON','Start module Module Sample 3  from course Course 2 sample 1','2017-06-22','13:38:39'),(95,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:40:10'),(96,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:40:10'),(97,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:44:05'),(98,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:44:05'),(99,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:47:44'),(100,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:47:44'),(101,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:55:18'),(102,'RONNIE P. HAPSON','','2017-06-22','13:55:18'),(103,'RONNIE P. HAPSON','No quiz availabe on module m,odule 3','2017-06-22','13:55:18'),(104,'RONNIE P. HAPSON','Retake quiz on module Module Sample 1  from course Billing Specialist','2017-06-22','14:15:07'),(105,'RONNIE P. HAPSON','Finish module and quiz Module Sample 1  from course Billing Specialist and got score of 1','2017-06-22','14:16:23');

/*Table structure for table `mdl_progress` */

DROP TABLE IF EXISTS `mdl_progress`;

CREATE TABLE `mdl_progress` (
  `user_mpID` int(255) NOT NULL AUTO_INCREMENT,
  `userId` int(255) DEFAULT NULL,
  `moduleId` int(255) DEFAULT NULL,
  `status` enum('Pending','On-going','Completed') DEFAULT NULL,
  `quiz_status` enum('Pending','Completed') DEFAULT NULL,
  `datetime_start` datetime DEFAULT NULL,
  `datetime_end` datetime DEFAULT NULL,
  `quiz_total` int(255) DEFAULT NULL,
  `isStart` int(1) DEFAULT NULL,
  `isFinish` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_mpID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `mdl_progress` */

insert  into `mdl_progress`(`user_mpID`,`userId`,`moduleId`,`status`,`quiz_status`,`datetime_start`,`datetime_end`,`quiz_total`,`isStart`,`isFinish`) values (1,97,1,'Completed','Completed','2017-06-22 14:15:07','2017-06-22 14:16:23',1,1,1),(2,97,2,'Completed','Completed','2017-06-22 13:02:23','2017-06-22 13:02:35',1,1,1),(3,97,5,'Completed','Completed','0000-00-00 00:00:00','2017-06-22 13:55:18',0,1,1),(4,97,3,'On-going','Pending','2017-06-22 13:38:39',NULL,NULL,1,NULL),(5,97,4,'Pending','Pending',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `mdl_retake` */

DROP TABLE IF EXISTS `mdl_retake`;

CREATE TABLE `mdl_retake` (
  `user_mpID` int(255) NOT NULL AUTO_INCREMENT,
  `userId` int(255) DEFAULT NULL,
  `moduleId` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `quiz_status` varchar(255) DEFAULT NULL,
  `datetime_start` datetime DEFAULT NULL,
  `datetime_end` datetime DEFAULT NULL,
  `quiz_total` int(255) DEFAULT NULL,
  PRIMARY KEY (`user_mpID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `mdl_retake` */

insert  into `mdl_retake`(`user_mpID`,`userId`,`moduleId`,`status`,`quiz_status`,`datetime_start`,`datetime_end`,`quiz_total`) values (1,97,5,'Completed','Completed','2017-06-22 13:02:52','0000-00-00 00:00:00',0),(2,97,5,'Completed','Completed','2017-06-22 13:04:51','2017-06-22 13:04:51',0),(3,97,1,'Completed','Completed','2017-06-22 12:47:42','2017-06-22 12:48:24',3);

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `isUsed` varchar(255) NOT NULL,
  `questionId` int(11) NOT NULL,
  `wquestion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`id`,`modulename`,`description`,`isUsed`,`questionId`,`wquestion`) values (1,'Module Sample 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','0',0,''),(2,'Module Sample 2 ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','0',0,''),(3,'Module Sample 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','0',0,''),(4,'Module Sample 4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','0',0,''),(5,'m,odule 3','Module 3 sample description','0',0,'');

/*Table structure for table `qcounter` */

DROP TABLE IF EXISTS `qcounter`;

CREATE TABLE `qcounter` (
  `countId` int(11) NOT NULL AUTO_INCREMENT,
  `filler` varchar(255) NOT NULL,
  PRIMARY KEY (`countId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `qcounter` */

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `questionid` int(11) NOT NULL AUTO_INCREMENT,
  `questionimage` varchar(255) DEFAULT NULL,
  `questioncap` varchar(255) DEFAULT NULL,
  `moduleid` int(11) DEFAULT NULL,
  `choicea` varchar(255) DEFAULT NULL,
  `choiceb` varchar(255) DEFAULT NULL,
  `choicec` varchar(255) DEFAULT NULL,
  `choiced` varchar(255) DEFAULT NULL,
  `imagea` varchar(255) DEFAULT NULL,
  `imageb` varchar(255) DEFAULT NULL,
  `imagec` varchar(255) DEFAULT NULL,
  `imaged` varchar(255) DEFAULT NULL,
  `questionanswer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questionid`),
  UNIQUE KEY `questionId` (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`questionid`,`questionimage`,`questioncap`,`moduleid`,`choicea`,`choiceb`,`choicec`,`choiced`,`imagea`,`imageb`,`imagec`,`imaged`,`questionanswer`) values (2,'','Question 1: All Text',1,'Tama','Mali','Mali','Mali','','','','','Tama'),(4,'img/6.jpeg','Question 2: Combination of Text and Image',1,'Tama','Mali','Mali','Mali','img/7.jpeg','img/8.jpeg','img/9.jpeg','img/10.jpeg','Tama'),(6,'','Question 3: Combination of Text and Image',1,'Mali','Tama','Mali','Mali','img/15.jpeg','img/16.jpeg','img/17.jpeg','img/18.jpeg','Tama'),(7,'img/19.jpeg','Question 4: Combination of Text and Image',1,'Mali','Mali','Tama','Mali','img/20.jpeg','','img/21.jpeg','','Tama'),(8,'','Question 1: retake',2,'Tama','Mali','Mali','Mali','','','','','Tama'),(9,'','Question 1: sample',4,'Tama','Mali','Mali','Mali','','','','','Tama');

/*Table structure for table `result` */

DROP TABLE IF EXISTS `result`;

CREATE TABLE `result` (
  `resultid` int(255) NOT NULL AUTO_INCREMENT,
  `moduleId` int(255) NOT NULL,
  `questionid` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `score` int(255) NOT NULL,
  `isAnswer` int(255) NOT NULL,
  PRIMARY KEY (`resultid`),
  KEY `FK_result` (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `result` */

insert  into `result`(`resultid`,`moduleId`,`questionid`,`userId`,`score`,`isAnswer`) values (1,1,2,97,0,1),(2,1,4,97,1,1),(3,1,6,97,0,1),(4,1,7,97,0,1),(5,2,8,97,1,1),(6,4,9,97,0,0);

/*Table structure for table `texttable` */

DROP TABLE IF EXISTS `texttable`;

CREATE TABLE `texttable` (
  `textid` int(11) NOT NULL AUTO_INCREMENT,
  `texttitle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `moduleid` varchar(255) NOT NULL,
  PRIMARY KEY (`textid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `texttable` */

insert  into `texttable`(`textid`,`texttitle`,`description`,`moduleid`) values (1,'Text 1 Sample','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','1'),(2,'sample 3 text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper molestie nisi eleifend viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis volutpat imperdiet. Sed venenatis viverra rutr','3'),(3,'sample 3.1','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla nec enim id velit faucibus pulvinar. Donec et leo dignissim, elementum dolor vel, iaculis enim. Curabitur sit amet ante vel sem mattis sagittis. Curabitur ','3');

/*Table structure for table `videotable` */

DROP TABLE IF EXISTS `videotable`;

CREATE TABLE `videotable` (
  `videoid` int(11) NOT NULL AUTO_INCREMENT,
  `videotitle` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `moduleid` varchar(255) NOT NULL,
  PRIMARY KEY (`videoid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `videotable` */

insert  into `videotable`(`videoid`,`videotitle`,`videoname`,`moduleid`) values (1,'sample 1 video','vid/8.mp4','1'),(2,'sample 3 video','vid/10.mp4','3'),(3,'sample 2 ','vid/15.mp4','2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
