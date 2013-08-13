-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 23-11-2012 a las 22:10:27
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `base_de_datos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `rendimiento2`
-- 

CREATE TABLE `rendimiento2` (
  `id` int(11) NOT NULL auto_increment,
  `tflap` varchar(20) NOT NULL,
  `clmaxflap` varchar(20) NOT NULL,
  `anguloflap` varchar(20) NOT NULL,
  `deltaclmax2` varchar(20) NOT NULL,
  `promedioflap` varchar(20) NOT NULL,
  `clmaxdepreciado` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `rendimiento2`
-- 

