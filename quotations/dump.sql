# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.28)
# Database: quotes
# Generation Time: 2016-11-18 20:48:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table quotations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quotations`;

CREATE TABLE `quotations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `added` datetime NOT NULL,
  `quote` text,
  `author` varchar(30) DEFAULT '',
  `rating` int(11) NOT NULL DEFAULT '0',
  `flagged` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `quotations` WRITE;
/*!40000 ALTER TABLE `quotations` DISABLE KEYS */;

INSERT INTO `quotations` (`id`, `added`, `quote`, `author`, `rating`, `flagged`)
VALUES
	(4,'2016-11-06 18:22:40','Nothing has more strength than dire necessity.','Euripides',4,0),
	(5,'2016-11-07 08:49:00','Fortune and love favor the brave.','Ovid',-3,0),
	(6,'2016-11-07 11:16:15','Great artists suffer for the people. ','Marvin Gaye',-2,0),
	(7,'2016-11-17 21:35:54','I\'d rather have roses on my table than diamonds on my neck. ','Emma Goldman',4,0),
	(8,'2016-11-07 11:16:04','a','a',4,0),
	(9,'2016-11-09 08:33:54','abc','abc',4,0),
	(10,'2016-11-17 21:49:03','I I I','123',-2,0),
	(11,'2016-11-18 13:21:24',' ','a',0,0),
	(12,'2016-11-18 13:22:07','a','aaa',0,0),
	(13,'2016-11-18 13:22:23','adada','adada',0,0),
	(14,'2016-11-18 13:22:51',' ','adsada',0,0),
	(15,'2016-11-18 13:25:15',' adsadaddasdadsaadas','a',0,0),
	(16,'2016-11-18 13:25:28','asdada','a',0,0),
	(17,'2016-11-18 13:25:34','asdada','asdasdfsdfsfsafsf',0,0);

/*!40000 ALTER TABLE `quotations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL DEFAULT '',
  `password` varchar(256) NOT NULL DEFAULT '',
  `registered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `password`, `registered`)
VALUES
	(1,'abcd','$2y$10$OcWT6RSD/MFqtMVPqlqE2ubNvJCPuJVF97MzY9LIIR2TSsQ9FtKl.','2016-11-16 02:57:15'),
	(2,'admin','$2y$10$284BKL9FSCmVJK7Y1F8XFeg7O0Sdv.Tpx5nToE3k.7uMG0L7fEl.u','2016-11-17 21:36:41'),
	(3,'tomy','$2y$10$vxhFZ9Q36lUqOZiuWFxDd.vkiLU.lYVLuzAEX2n97H6QT1FRcPJ2.','2016-11-17 21:39:22'),
	(4,'abcde','$2y$10$r0ZWmUNGpZecT75xUyMk5eLfS9UDFZmdMzn4s0gwpydilQn8Fmw7u','2016-11-17 21:48:16'),
	(5,'adcd','$2y$10$GQtr3.QG5e8EI1ahfEQ2Zuf4xmscMgnRYwsx7AG0/SiGRw6JShCB2','2016-11-18 12:55:29');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
