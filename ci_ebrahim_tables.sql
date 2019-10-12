/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.16-MariaDB : Database - ci_ebrahim
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `organizations` */

DROP TABLE IF EXISTS `organizations`;

CREATE TABLE `organizations` (
  `id` int(11) DEFAULT NULL,
  `organization_id` text DEFAULT NULL,
  `organization_name` text DEFAULT NULL,
  `organization_address` text DEFAULT NULL,
  `organization_city` text DEFAULT NULL,
  `organization_unit` text DEFAULT NULL,
  `organization_state` text DEFAULT NULL,
  `organization_country` text DEFAULT NULL,
  `organization_numberofemployees` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `organizations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `organization_id` text DEFAULT NULL,
  `employee_name` text DEFAULT NULL,
  `employee_email` text DEFAULT NULL,
  `employee_role` text DEFAULT NULL,
  `employee_countrycode1` int(11) DEFAULT NULL,
  `employee_cell1` bigint(11) DEFAULT NULL,
  `employee_countrycode2` int(11) DEFAULT NULL,
  `employee_cell2` bigint(11) DEFAULT NULL,
  `employee_cell2_verified` tinyint(1) DEFAULT 0,
  `employee_password` text DEFAULT NULL,
  `verify_code` int(11) DEFAULT NULL,
  `cell_verified` tinyint(1) DEFAULT 0,
  `email_verified` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
