-- phpMyAdmin SQL Dump
-- version 2.6.4-pl4
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 28-09-2012 a las 23:35:44
-- Versión del servidor: 5.0.16
-- Versión de PHP: 5.1.1
-- 
-- Base de datos: `registro`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios1`
-- 

CREATE TABLE `usuarios1` (
  `uid` int(11) NOT NULL auto_increment,
  `nombre` varchar(20) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `universidad` varchar(40) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `clave2` varchar(40) NOT NULL,
  `interes` varchar(100) NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `usuarios1`
-- 

