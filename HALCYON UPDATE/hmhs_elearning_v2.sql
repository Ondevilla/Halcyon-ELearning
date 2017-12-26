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
  `questionid` int(11) NOT NULL,
  `choicea` varchar(255) NOT NULL,
  `choiceb` varchar(255) NOT NULL,
  `choicec` varchar(255) NOT NULL,
  `choiced` varchar(255) NOT NULL,
  `imagea` varchar(255) NOT NULL,
  `imageb` varchar(255) NOT NULL,
  `imagec` varchar(255) NOT NULL,
  `imaged` varchar(255) NOT NULL,
  PRIMARY KEY (`choiceid`),
  KEY `FK_choicetable_questions_questionid` (`questionid`),
  CONSTRAINT `FK_choicetable_questions_questionid` FOREIGN KEY (`questionid`) REFERENCES `questions` (`questionid`)
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
  `courseId` int(11) DEFAULT NULL,
  `coursename` varchar(255) DEFAULT NULL,
  `isStart` int(1) DEFAULT NULL,
  `isFinish` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_cpID`),
  KEY `FK_cor_progress_fcourse_courseId` (`courseId`),
  CONSTRAINT `FK_cor_progress_fcourse_courseId` FOREIGN KEY (`courseId`) REFERENCES `fcourse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cor_progress` */

insert  into `cor_progress`(`user_cpID`,`userId`,`posId`,`status`,`datetime_start`,`datetime_end`,`courseId`,`coursename`,`isStart`,`isFinish`) values (1,101,3,'On-going','2017-12-26 04:36:40',NULL,2,'COURSE 1',1,NULL);

/*Table structure for table `counter` */

DROP TABLE IF EXISTS `counter`;

CREATE TABLE `counter` (
  `countId` int(11) NOT NULL AUTO_INCREMENT,
  `filler` varchar(255) NOT NULL,
  PRIMARY KEY (`countId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `counter` */

/*Table structure for table `coursemodule` */

DROP TABLE IF EXISTS `coursemodule`;

CREATE TABLE `coursemodule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL,
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_coursemodule_fcourse_courseid` (`courseid`),
  KEY `FK_coursemodule_modules_moduleid` (`moduleid`),
  CONSTRAINT `FK_coursemodule_fcourse_courseid` FOREIGN KEY (`courseid`) REFERENCES `fcourse` (`id`),
  CONSTRAINT `FK_coursemodule_modules_moduleid` FOREIGN KEY (`moduleid`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `coursemodule` */

insert  into `coursemodule`(`id`,`modulename`,`courseid`,`moduleid`) values (1,'MODule1',2,1);

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
  PRIMARY KEY (`id`),
  KEY `FK_courseposition_fcourse_courseid` (`courseid`),
  CONSTRAINT `FK_courseposition_fcourse_courseid` FOREIGN KEY (`courseid`) REFERENCES `fcourse` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `courseposition` */

insert  into `courseposition`(`id`,`positionname`,`coursename`,`courseid`,`jobid`,`image`,`imagebg`,`imagetheme`) values (1,'ITS','COURSE',1,4,'attachment/img/1.jpeg','rgb(204,58,58)','rgb(204,58,58)'),(2,'DEV OPS','COURSE 1',2,3,'attachment/img/2.jpeg','rgb(7,225,35)','rgb(7,225,35)');

/*Table structure for table `courseposition_all` */

DROP TABLE IF EXISTS `courseposition_all`;

CREATE TABLE `courseposition_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `positionname` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `courseid` int(11) DEFAULT NULL,
  `jobid` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `imagebg` varchar(255) DEFAULT NULL,
  `imagetheme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_courseposition_all_fcourse_courseid` (`courseid`),
  CONSTRAINT `FK_courseposition_all_fcourse_courseid` FOREIGN KEY (`courseid`) REFERENCES `fcourse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `courseposition_all` */

/*Table structure for table `courseposition_dept` */

DROP TABLE IF EXISTS `courseposition_dept`;

CREATE TABLE `courseposition_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `positionname` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `courseid` int(11) DEFAULT NULL,
  `jobid` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `imagebg` varchar(255) DEFAULT NULL,
  `imagetheme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `courseposition_dept` */

/*Table structure for table `date1` */

DROP TABLE IF EXISTS `date1`;

CREATE TABLE `date1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date1` tinytext,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `date1` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `fcourse` */

insert  into `fcourse`(`id`,`coursename`,`cdetails`,`isActive`,`image`,`imagebg`,`imagetheme`) values (1,'COURSE','COURSE','1','attachment/img/1.jpeg','rgb(204,58,58)','rgb(204,58,58)'),(2,'COURSE 1','COURSE 1','1','attachment/img/2.jpeg','rgb(7,225,35)','rgb(7,225,35)');

/*Table structure for table `flashtable` */

DROP TABLE IF EXISTS `flashtable`;

CREATE TABLE `flashtable` (
  `flashid` int(11) NOT NULL AUTO_INCREMENT,
  `flashtitle` varchar(255) NOT NULL,
  `flashname` varchar(255) NOT NULL,
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`flashid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `flashtable` */

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
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`imageid`),
  KEY `FK_imagetable_modules_moduleid` (`moduleid`),
  CONSTRAINT `FK_imagetable_modules_moduleid` FOREIGN KEY (`moduleid`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `imagetable` */

insert  into `imagetable`(`imageid`,`imagetitle`,`imagename`,`moduleid`) values (1,'1','attachment/img/3.jpeg',1),(2,'2','attachment/img/4.jpeg',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`id`,`user`,`remarks`,`Rdate`,`Rtime`) values (1,'Xea','Logged In','2017-12-26','04:08:31'),(2,'Xea','Created Course COURSE','2017-12-26','04:14:31'),(3,'Xea','COURSE Tagged to ITS','2017-12-26','04:15:32'),(4,'Xea','Created Course COURSE 1','2017-12-26','04:21:00'),(5,'Xea','COURSE 1 Tagged to DEV OPS','2017-12-26','04:21:59'),(6,'Xea','MOD1 module created and tag to course COURSE 1','2017-12-26','04:25:40'),(7,'Xea','Add new Image: 1 from  MOD1','2017-12-26','04:27:15'),(8,'Xea','Add new Image: 2 from  MOD1','2017-12-26','04:28:04'),(9,'Xea','Add Video: VID from MOD1','2017-12-26','04:30:21'),(10,'Xea','Add new Question : 1 UNG SAGOT from MOD1','2017-12-26','04:32:54'),(11,'Ato','Logged In','2017-12-26','04:35:17'),(12,'Ato','Start Module','2017-12-26','04:36:10'),(13,'Ato','Start Course : COURSE 1','2017-12-26','04:36:40');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mdl_progress` */

insert  into `mdl_progress`(`user_mpID`,`userId`,`moduleId`,`status`,`quiz_status`,`datetime_start`,`datetime_end`,`quiz_total`,`isStart`,`isFinish`) values (1,101,1,'Pending','Pending',NULL,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mdl_retake` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`id`,`modulename`,`description`,`isUsed`,`questionId`,`wquestion`) values (1,'MOD1','MOD1','0',0,'');

/*Table structure for table `qcounter` */

DROP TABLE IF EXISTS `qcounter`;

CREATE TABLE `qcounter` (
  `countId` int(11) NOT NULL AUTO_INCREMENT,
  `filler` varchar(255) NOT NULL,
  PRIMARY KEY (`countId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `qcounter` */

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `questionid` int(11) NOT NULL AUTO_INCREMENT,
  `questionimage` varchar(255) DEFAULT NULL,
  `questioncap` varchar(255) DEFAULT NULL,
  `moduleid` int(11) unsigned NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`questionid`,`questionimage`,`questioncap`,`moduleid`,`choicea`,`choiceb`,`choicec`,`choiced`,`imagea`,`imageb`,`imagec`,`imaged`,`questionanswer`) values (1,'attachment/img/1.jpeg','1 UNG SAGOT',1,'1','2','3','4','','','','','1');

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
  KEY `FK_result` (`questionid`),
  CONSTRAINT `FK_result_questions_questionid` FOREIGN KEY (`questionid`) REFERENCES `questions` (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `result` */

insert  into `result`(`resultid`,`moduleId`,`questionid`,`userId`,`score`,`isAnswer`) values (1,1,1,101,0,0);

/*Table structure for table `texttable` */

DROP TABLE IF EXISTS `texttable`;

CREATE TABLE `texttable` (
  `textid` int(11) NOT NULL AUTO_INCREMENT,
  `texttitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`textid`),
  KEY `FK_texttable_modules_moduleid` (`moduleid`),
  CONSTRAINT `FK_texttable_modules_moduleid` FOREIGN KEY (`moduleid`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `texttable` */

/*Table structure for table `videotable` */

DROP TABLE IF EXISTS `videotable`;

CREATE TABLE `videotable` (
  `videoid` int(11) NOT NULL AUTO_INCREMENT,
  `videotitle` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `moduleid` int(11) NOT NULL,
  PRIMARY KEY (`videoid`),
  KEY `FK_videotable_modules_moduleid` (`moduleid`),
  CONSTRAINT `FK_videotable_modules_moduleid` FOREIGN KEY (`moduleid`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `videotable` */

insert  into `videotable`(`videoid`,`videotitle`,`videoname`,`moduleid`) values (1,'VID','attachment/vid/5.mp4',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
