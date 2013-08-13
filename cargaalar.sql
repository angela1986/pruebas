-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 24-11-2012 a las 00:38:03
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `base_de_datos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cargaalar`
-- 

CREATE TABLE `cargaalar` (
  `id` int(11) NOT NULL auto_increment,
  `dencidad` varchar(20) NOT NULL,
  `rws` varchar(20) NOT NULL,
  `r` varchar(20) NOT NULL,
  `gravedad` varchar(20) NOT NULL,
  `vf` varchar(20) NOT NULL,
  `hf` varchar(20) NOT NULL,
  `sa` varchar(20) NOT NULL,
  `sf` varchar(20) NOT NULL,
  `sg` varchar(20) NOT NULL,
  `rrws` varchar(20) NOT NULL,
  `s` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cargaalar`
-- 

