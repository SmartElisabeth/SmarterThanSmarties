# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: DataGlass
# Generation Time: 2018-11-16 13:40:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table FavoriteGlass
# ------------------------------------------------------------

DROP TABLE IF EXISTS `FavoriteGlass`;

CREATE TABLE `FavoriteGlass` (
  `favoriteid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userdataid` int(11) DEFAULT NULL,
  `glassid` int(11) DEFAULT NULL,
  PRIMARY KEY (`favoriteid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table Glass
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Glass`;

CREATE TABLE `Glass` (
  `glassid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` int(11) NOT NULL,
  `userdataid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  PRIMARY KEY (`glassid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table User
# ------------------------------------------------------------

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userpassword` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table UserData
# ------------------------------------------------------------

DROP TABLE IF EXISTS `UserData`;

CREATE TABLE `UserData` (
  `userdataid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `age` int(11) DEFAULT NULL,
  `shop` int(11) DEFAULT NULL,
  `personality` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userdataid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
