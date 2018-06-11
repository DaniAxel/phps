/*
SQLyog - Free MySQL GUI v5.11
Host - 5.6.17 : Database - php
*********************************************************************
Server version : 5.6.17
*/


SET NAMES utf8;


SET SQL_MODE='';

create database if not exists `php`;

USE `php`;

/*Table structure for table `comuna` */

DROP TABLE IF EXISTS `comuna`;

CREATE TABLE `comuna` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comuna` */

insert into `comuna` (`id`,`nombre`) values (1,'Cerrillos'),(2,'Cerro Navia'),(3,'Conchali'),(4,'El Bosque'),(5,'Estacion Central'),(6,'Huechuraba'),(7,'Independencia'),(8,'La Cisterna'),(9,'La Florida'),(10,'La Pintana'),(11,'La Granja'),(12,'La Reina'),(13,'Las Condes'),(14,'Lo Barnechea'),(15,'Lo Espejo'),(16,'Lo Prado'),(17,'Macul'),(18,'Maipu'),(19,'Nunoa'),(20,'Pedro Aguirre Cerda'),(21,'Penalolen'),(22,'Providencia'),(23,'Pudahuel'),(24,'Quilicura'),(25,'Quinta Normal'),(26,'Recoleta'),(27,'Renca'),(28,'San Miguel'),(29,'San Joaquin'),(30,'Santiago'),(31,'Vitacura');

/*Table structure for table `educacion` */

DROP TABLE IF EXISTS `educacion`;

CREATE TABLE `educacion` (
  `id_ed` int(11) NOT NULL,
  `nivel_ed` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_ed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `educacion` */

insert into `educacion` (`id_ed`,`nivel_ed`) values (1,'Profesional'),(2,'Tecnico'),(3,'Media'),(4,'Basica'),(5,'No Posee');

/*Table structure for table `preaprovacion` */


/*Table structure for table `renta` */

DROP TABLE IF EXISTS `renta`;

CREATE TABLE `renta` (
  `id_ren` int(11) NOT NULL,
  `tipo_renta` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_ren`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `renta` */

insert into `renta` (`id_ren`,`tipo_renta`) values (1,'Fija'),(2,'Variable'),(3,'Honorarios');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `rut` varchar(19) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `ape_paterno` varchar(50) DEFAULT NULL,
  `ape_materno` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert into `usuario` (`rut`,`nombre`,`ape_paterno`,`ape_materno`,`contrasena`) values ('132149875','Ricardo','Aguilera','Campos','5678'),('177231589','Juan','Vargas','Riquleme','1234'),('6875189','Maria','Vergara','Pino','9012'),('9657125','Fabian','Perez','Castro','3456');


DROP TABLE IF EXISTS `preaprovacion`;

CREATE TABLE `preaprovacion` (
  `id` int(11) NOT NULL,
  `rut_us` varchar(19) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado_civil` varchar(30) DEFAULT NULL,
  `hijos` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `id_comuna` int(11) DEFAULT NULL,
  `id_edu` int(11) DEFAULT NULL,
  `id_renta` int(11) DEFAULT NULL,
  `sueldo` int(11) DEFAULT NULL,
  `enfermedad_cronica` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preAprovacion_usuario_fk` (`rut_us`),
  KEY `preAprovacion_comuna_fk` (`id_comuna`),
  KEY `preAprovacion_renta_fk` (`id_renta`),
  KEY `preAprovacion_educacion_fk` (`id_edu`),
  CONSTRAINT `preAprovacion_usuario_fk` FOREIGN KEY (`rut_us`) REFERENCES `usuario` (`rut`),
  CONSTRAINT `preAprovacion_comuna_fk` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id`),
  CONSTRAINT `preAprovacion_renta_fk` FOREIGN KEY (`id_renta`) REFERENCES `renta` (`id_ren`),
  CONSTRAINT `preAprovacion_educacion_fk` FOREIGN KEY (`id_edu`) REFERENCES `educacion` (`id_ed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preaprovacion` */
