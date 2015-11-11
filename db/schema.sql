DROP DATABASE IF EXISTS epic;
CREATE DATABASE epic;
USE epic;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fruit
# ------------------------------------------------------------

CREATE TABLE `fruit` (
  `fruit_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('apple','orange','banana','unknown') NOT NULL DEFAULT 'unknown',
  `variety` varchar(100) DEFAULT NULL,
  `cost` decimal(5,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`fruit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fruit` WRITE;
/*!40000 ALTER TABLE `fruit` DISABLE KEYS */;

INSERT INTO `fruit` (`fruit_id`, `type`, `variety`, `cost`)
VALUES
	(1,'apple','fuji',2.49),
	(2,'apple','braeburn',2.35),
	(3,'apple','honeycrisp',1.99),
	(4,'apple','gala',1.40),
	(5,'apple','granny smith',1.50),
	(6,'orange','valencia',3.25),
	(7,'orange','navel',2.49),
	(8,'orange','mandarin',1.99),
	(9,'banana','cavendish',1.04),
	(10,'banana','baby',0.52),
	(11,'banana','plantain',2.08);

/*!40000 ALTER TABLE `fruit` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sales
# ------------------------------------------------------------

CREATE TABLE `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fkstore_id` int(11) unsigned DEFAULT NULL,
  `fkfruit_id` int(11) unsigned DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fkfruit_id` (`fkfruit_id`),
  KEY `fkstore_id` (`fkstore_id`),
  CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`fkstore_id`) REFERENCES `stores` (`store_id`),
  CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`fkfruit_id`) REFERENCES `fruit` (`fruit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;

INSERT INTO `sales` (`id`, `fkstore_id`, `fkfruit_id`, `quantity`, `date`)
VALUES
	(1,1,2,3,'2013-06-15 12:45:56'),
	(2,1,4,3,'2013-06-15 12:45:56'),
	(3,1,1,1,'2013-06-15 12:45:56'),
	(4,1,5,3,'2013-06-15 12:46:01'),
	(5,1,7,2,'2013-06-15 12:46:01'),
	(6,1,3,1,'2013-06-15 12:46:01'),
	(7,1,1,2,'2013-06-15 12:46:01'),
	(8,4,6,4,'2013-06-15 14:23:41'),
	(9,4,7,5,'2013-06-15 14:23:41'),
	(10,4,2,2,'2013-06-15 14:23:41'),
	(11,4,7,1,'2013-06-15 14:23:41'),
	(12,4,2,5,'2013-06-15 14:23:41'),
	(13,4,1,5,'2013-06-15 14:23:41'),
	(14,4,8,5,'2013-06-15 14:24:06'),
	(15,2,5,3,'2013-06-15 14:24:06'),
	(16,2,7,2,'2013-06-15 14:24:06'),
	(17,3,4,3,'2013-06-15 14:24:06'),
	(18,3,1,1,'2013-06-15 14:24:06');

/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table stores
# ------------------------------------------------------------

CREATE TABLE `stores` (
  `store_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;

INSERT INTO `stores` (`store_id`, `name`, `location`, `owner`)
VALUES
	(1,'Corner Market','Cottage Grove, OR','Ed Nance'),
	(2,'Neighborhood Grocery','Creswell, OR','Nathaniel Smith'),
	(3,'Specialty Tidbits','Eugene, OR','Cheryl Jones'),
	(4,'Gourmet Selections','Santa Clara, OR','Denise Logan');

/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
