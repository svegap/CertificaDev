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



CREATE TABLE IF NOT EXISTS PERSONA (
  idPersona int(40) NOT NULL auto_increment,
  rut int(10) NOT NULL,
  dv varchar(1) NOT NULL,
  nombre varchar(50) NOT NULL,
  apellidoPaterno varchar(50) NOT NULL,
  apellidoMaterno varchar(50) NOT NULL,
  contrasena varchar(15) NOT NULL,
  PRIMARY KEY (idPersona)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

  
CREATE TABLE IF NOT EXISTS POSTULANTE (
  idPostulante int(40) NOT NULL auto_increment,
  rut int(10) NOT NULL,
  fechaNacimiento date NOT NULL,
  sexo varchar(1) NOT NULL,
  telefono int(10) DEFAULT NULL,
  email varchar(50) DEFAULT NULL,
  direccion varchar(100) NOT NULL,
  experiencia varchar(1) NOT NULL,
  anos int(2) DEFAULT NULL,
  idComuna int(3) NOT NULL,
  idEducacion int(3) NOT NULL,
  idModalidad int(3) NOT NULL,
  idCurso int(3) NOT NULL, 
  idEstado int(3) NOT NULL, 
  idPerfil int(3) NOT NULL,
   PRIMARY KEY (idPostulante)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS COMUNA (
  idComuna int(3) NOT NULL AUTO_INCREMENT,
  descripcionComuna varchar(20) NOT NULL,
   PRIMARY KEY (idComuna)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS EDUCACION (
  idEducacion int(3) NOT NULL AUTO_INCREMENT,
  descripcionEducacion varchar(50) NOT NULL,
   PRIMARY KEY (idEducacion)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS MODALIDAD (
  idModalidad int(3) NOT NULL AUTO_INCREMENT,
  descripcionModalidad varchar(50) NOT NULL,
   PRIMARY KEY (idModalidad)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS CURSO (
  idCurso int(3) NOT NULL AUTO_INCREMENT,
  descripcionCurso varchar(20) NOT NULL,
   PRIMARY KEY (idCurso)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS ESTADO (
  idEstado int(3) NOT NULL AUTO_INCREMENT,
  descripcionEstado varchar(20) NOT NULL,
  mensajeEstado varchar(100) NULL,
   PRIMARY KEY (idEstado)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS PERFIL (
  idPerfil int(3) NOT NULL AUTO_INCREMENT,
  descripcionPerfil varchar(50) NOT NULL,
   PRIMARY KEY (idPerfil)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  INSERT INTO COMUNA( descripcionComuna) VALUES ('Lo Espejo');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Lo Prado');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Macul');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Maipú');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Ñuñoa');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Pedro Aguirre Cerda');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Peñalolén');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Providencia');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Pudahuel');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Quilicura');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Quinta Normal');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Recoleta');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Renca');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San Joaquín');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San Miguel');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San Ramón');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Vitacura');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Puente Alto');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Pirque');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San José de Maipo');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Colina');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Lampa');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Tiltil');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San Bernardo');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Buin');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Calera de Tango');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Paine');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Melipilla');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Alhué');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Curacaví');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('María Pinto');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('San Pedro');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Talagante');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('El Monte');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Isla de Maipo');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Padre Hurtado');
  INSERT INTO COMUNA ( descripcionComuna) VALUES ('Peñaflor');
  
  INSERT INTO ESTADO ( descripcionEstado, mensajeEstado ) VALUES ('Pendiente', '');
  INSERT INTO ESTADO ( descripcionEstado, mensajeEstado ) VALUES ('Aprobado', 'Dentro de un plazo maximo de 48 horas, uno de nuestros ejecutivos se pondrá en contacto con usted.');
  INSERT INTO ESTADO ( descripcionEstado, mensajeEstado ) VALUES ('Rechazado', 'Para más información puede llamarnos al número que aparece en nuestra página oficial.');


  INSERT INTO MODALIDAD ( descripcionModalidad) VALUES ( 'Diurna');
  INSERT INTO MODALIDAD (descripcionModalidad) VALUES ( 'Vespertina');


  INSERT INTO EDUCACION (descripcionEducacion) VALUES ('Profesional');
  INSERT INTO EDUCACION (descripcionEducacion) VALUES ('Técnico');
  INSERT INTO EDUCACION (descripcionEducacion) VALUES ('Media');
  INSERT INTO EDUCACION (descripcionEducacion) VALUES ('Básica');
  INSERT INTO EDUCACION (descripcionEducacion) VALUES ('No Posee');
  
  
  INSERT INTO CURSO (descripcionCurso) VALUES ('Java');
  INSERT INTO CURSO (descripcionCurso) VALUES ('.Net');
  INSERT INTO CURSO (descripcionCurso) VALUES ('PHP'); 
  
  INSERT INTO PERFIL (descripcionPerfil) VALUES ('Postulante');
  INSERT INTO PERFIL (descripcionPerfil) VALUES ('Ejecutivo de Admisión');