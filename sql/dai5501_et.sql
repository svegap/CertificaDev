-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 08:52 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dai5501_et`
--
create database dai5501_et;

use dai5501_et;

CREATE TABLE IF NOT EXISTS `PERSONA` (
  `rut` int(10) NOT NULL,
  `dv` varchar(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `contrasena` varchar(15) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  
CREATE TABLE IF NOT EXISTS `POSTULANTE` (
  `rut` int(10) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `telefono` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `experiencia` varchar(1) NOT NULL,
  `anos` int(2) DEFAULT NULL,
  `idComuna` int(3) NOT NULL,
  `idEducacion` int(3) NOT NULL,
  `idModalidad` int(3) NOT NULL,
  `idCurso` int(3) NOT NULL, 
  `idEstado` int(3) NOT NULL, 
  `idPerfil` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `COMUNA` (
  `idComuna` int(3) NOT NULL AUTO_INCREMENT,
  `nombreComuna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `EDUCACION` (
  `idEducacion` int(3) NOT NULL AUTO_INCREMENT,
  `nombreEducacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `MODALIDAD` (
  `idModalidad` int(3) NOT NULL AUTO_INCREMENT,
  `nombreModalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `CURSO` (
  `idCurso` int(3) NOT NULL AUTO_INCREMENT,
  `nombreCurso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ESTADO` (
  `idEstado` int(3) NOT NULL AUTO_INCREMENT,
  `nombreEstado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `PERFIL` (
  `idPerfil` int(3) NOT NULL AUTO_INCREMENT,
  `nombrePerfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `PERSONA` 
ADD UNIQUE(`rut`);

ALTER TABLE `COMUNA`
ADD PRIMARY KEY (`idComuna`);

ALTER TABLE `EDUCACION`
ADD PRIMARY KEY (`idEducacion`);

ALTER TABLE `MODALIDAD`
ADD PRIMARY KEY (`idModalidad`);

ALTER TABLE `CURSO`
ADD PRIMARY KEY (`idCurso`);

ALTER TABLE `ESTADO`
ADD PRIMARY KEY (`idEstado`);

ALTER TABLE `PERFIL`
ADD PRIMARY KEY (`idPerfil`);



  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('0', 'Lo Espejo');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('1', 'Lo Prado');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('2', 'Macul');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('3', 'Maipú');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('4', 'Ñuñoa');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('5', 'Pedro Aguirre Cerda');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('6', 'Peñalolén');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('7', 'Providencia');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('8', 'Pudahuel');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('9', 'Quilicura');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('10', 'Quinta Normal');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('11', 'Recoleta');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('12', 'Renca');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('13', 'San Joaquín');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('14', 'San Miguel');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('15', 'San Ramón');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('16', 'Vitacura');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('17', 'Puente Alto');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('18', 'Pirque');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('19', 'San José de Maipo');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('20', 'Colina');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('21', 'Lampa');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('22', 'Tiltil');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('23', 'San Bernardo');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('24', 'Buin');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('25', 'Calera de Tango');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('26', 'Paine');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('27', 'Melipilla');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('28', 'Alhué');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('29', 'Curacaví');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('30', 'María Pinto');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('31', 'San Pedro');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('32', 'Talagante');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('33', 'El Monte');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('34', 'Isla de Maipo');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('35', 'Padre Hurtado');
  INSERT INTO `COMUNA` (`idComuna`, `nombreComuna`) VALUES ('36', 'Peñaflor');
  
  INSERT INTO `ESTADO` (`idEstado`, `nombreEstado`) VALUES ('1', 'Pendiente');
  INSERT INTO `ESTADO` (`idEstado`, `nombreEstado`) VALUES ('2', 'Aprobado');
  INSERT INTO `ESTADO` (`idEstado`, `nombreEstado`) VALUES ('3', 'Rechazado');
