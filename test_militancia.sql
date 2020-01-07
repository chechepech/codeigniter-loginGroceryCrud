/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 8.0.17 : Database - militancia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`militancia` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `militancia`;

/*Table structure for table `militantes` */

DROP TABLE IF EXISTS `militantes`;

CREATE TABLE `militantes` (
  `Id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Cellphone` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `militantes` */

insert  into `militantes`(`Id`,`Name`,`Address`,`Cellphone`,`Email`) values 
(1,'modificaciob','modificacionesttttttttttt','9999','fffffff@gmail.com'),
(2,'333','333333333','12345678','a@com.mc'),
(3,'trampla','ttt','1111111111','tttt@gmao.com'),
(4,'Carlos','25','9999','bboy_rys@yahoo.com.mx'),
(5,'www','wwww','2222222222','eeeeee@trrr.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
