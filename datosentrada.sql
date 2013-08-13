-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 14-11-2012 a las 22:59:36
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `nombre_base_de_datos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `datos_entrada`
-- 

CREATE TABLE `datos_entrada` (
  `ID` int(12) unsigned NOT NULL auto_increment,
  `Tipo aeronave` varchar(20) NOT NULL,
  `vstall` varchar(20) NOT NULL,
  `Vclimb` varchar(20) NOT NULL,
  `Rmision` varchar(20) NOT NULL,
`dtakeoff` varchar(20) NOT NULL,  
`Xmision` varchar(20) NOT NULL,
  `Vcrucero` varchar(20) NOT NULL,
  `Wpasajero` varchar(20) NOT NULL,
  `npasajero` varchar(20) NOT NULL,
  `ntripulacion` varchar(20) NOT NULL,
    PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `datos_entrada`
-- 

