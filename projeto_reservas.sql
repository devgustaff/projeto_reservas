# Host: localhost  (Version 5.5.5-10.4.10-MariaDB)
# Date: 2020-01-08 18:15:10
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "carros"
#

DROP TABLE IF EXISTS `carros`;
CREATE TABLE `carros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "carros"
#

INSERT INTO `carros` VALUES (1,'Audi','A5'),(2,'Audi','RS6'),(3,'Ford','Mustang'),(4,'Ford','Fusion'),(5,'BMW','X5'),(6,'BMW','I8'),(7,'Mercedes','Classe GLC'),(8,'Mercedes','Classe C');

#
# Structure for table "reservas"
#

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carro` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `pessoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "reservas"
#

INSERT INTO `reservas` VALUES (1,2,'2020-01-06','2020-01-10','Gustavo Silva'),(2,5,'2020-01-08','2020-01-15','Lucas Silva'),(4,7,'2020-01-08','2020-01-15','Guilherme Silva'),(5,1,'2020-01-10','2020-01-15','Sonia da Silva'),(6,5,'2020-01-21','2020-07-31','Lucas Gonçalves da Silva'),(7,3,'2019-12-29','2020-01-02','Geralda Maria');
