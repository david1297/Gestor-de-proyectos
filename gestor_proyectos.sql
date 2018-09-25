-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2018 a las 21:29:17
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `Numero` int(11) NOT NULL,
  `Tipo` int(11) DEFAULT NULL,
  `Modulo` varchar(80) DEFAULT NULL,
  `Permiso` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`Numero`, `Tipo`, `Modulo`, `Permiso`) VALUES
(1, 1, 'Nuevo Proyecto', 'Aceptado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Codigo` varchar(80) NOT NULL,
  `Nombre` varchar(120) DEFAULT NULL,
  `Unidad` varchar(80) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Precio_Iva` float DEFAULT NULL,
  `Iva` int(11) DEFAULT NULL,
  `Porc_Iva` float DEFAULT NULL,
  `Tipo` varchar(80) DEFAULT NULL,
  `Costo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Numero` int(11) NOT NULL,
  `Tipo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Numero`, `Tipo`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE `terceros` (
  `Nit` varchar(80) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Direccion` varchar(80) DEFAULT NULL,
  `Ciudad` varchar(80) DEFAULT NULL,
  `Departamento` varchar(80) DEFAULT NULL,
  `Pais` varchar(80) DEFAULT NULL,
  `Telefono` varchar(80) DEFAULT NULL,
  `Ext` varchar(80) DEFAULT NULL,
  `Vendedor` int(11) DEFAULT NULL,
  `Cv` int(11) DEFAULT NULL,
  `Correo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(80) NOT NULL,
  `Correo` varchar(80) DEFAULT NULL,
  `Rol` int(11) DEFAULT NULL,
  `Clave` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(80) DEFAULT NULL,
  `Apellido` varchar(80) DEFAULT NULL,
  `Genero` varchar(80) DEFAULT NULL,
  `Direccion` varchar(80) DEFAULT NULL,
  `Telefono` varchar(80) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Correo`, `Rol`, `Clave`, `Nombre`, `Apellido`, `Genero`, `Direccion`, `Telefono`, `Imagen`) VALUES
('Admin', 'juandavid.andrade1997@gmail.com', 1, '$2y$10$QTAFO8CodSKEVi94BbHsyed1r/rC4RxTd8PVhhdHZwb9kLAETB.rS', 'Juan David', 'Andrade Valencia ', 'Masculino', 'Calle 23 # 49a-16', '3106949631', 'user.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`Numero`),
  ADD KEY `Tipo` (`Tipo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Numero`);

--
-- Indices de la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD PRIMARY KEY (`Nit`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usuario`),
  ADD KEY `Rol` (`Rol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `roles` (`Numero`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `roles` (`Numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
