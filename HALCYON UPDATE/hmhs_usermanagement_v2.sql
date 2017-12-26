/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.42-community : Database - hmhs_usermanagement
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hmhs_usermanagement` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hmhs_usermanagement`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `userId` int(100) NOT NULL,
  `positionId` int(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `entityId` int(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `accessright` int(100) DEFAULT NULL,
  `jobId` int(100) DEFAULT NULL,
  `empId` int(100) DEFAULT NULL,
  `fn` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `account` */

insert  into `account`(`userId`,`positionId`,`fullname`,`entityId`,`username`,`password`,`accessright`,`jobId`,`empId`,`fn`) values (99,1,'Xea Moto',1,'Xea','Xea',23,1,1,'Xea'),(100,2,'KMP',1,'Kmp','Kmp',24,2,2,'Kmp'),(101,3,'Ato',1,'Ato','Ato',25,3,3,'Ato');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `departmentId` int(100) NOT NULL,
  `depCode` int(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`departmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `departments` */

insert  into `departments`(`departmentId`,`depCode`,`department`) values (1,1,'ACCOUNTANCY'),(2,2,'SPECIALIST'),(3,3,'IT');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `empId` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`empId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`empId`,`fullname`) values (9,'Arnold');

/*Table structure for table `positions` */

DROP TABLE IF EXISTS `positions`;

CREATE TABLE `positions` (
  `positionId` int(100) NOT NULL,
  `posCode` int(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `depId` int(100) DEFAULT NULL,
  PRIMARY KEY (`positionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `positions` */

insert  into `positions`(`positionId`,`posCode`,`position`,`depId`) values (1,1,'BILLING',1),(2,2,'SPECIALIST',2),(3,3,'DEV OPS',3),(4,4,'ITS',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
