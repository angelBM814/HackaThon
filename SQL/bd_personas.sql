-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2024 a las 18:47:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `numTel` varchar(10) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `correo`, `numTel`, `contraseña`) VALUES
(1, 'Ángel', 'angel@gmail.com', '6182237439', 'angel123'),
(2, 'Ángel', 'angel@gmail.com', '6182237439', 'angel123'),
(3, 'Jorge', 'jorge@gmail.com', '6182569898', 'jorge123'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '3', '', '', ''),
(10, '3', '', '', ''),
(11, 'Ángel', 'wer@gmail.com', '6182237439', 'fff'),
(12, 'Arturo', 'arturo@gmail.com', '6182569898', '123456'),
(13, 'Ángel', 'angel@gmail.com', '6182237439', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_titulo` varchar(150) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_titulo`, `comentario`, `usuario`) VALUES
(1, 'Plomería a hogar', 'Muy buen Servicio', ''),
(2, 'Plomería a hogar', 'Muy buen servicio\r\n', ''),
(3, 'Plomería a hogar', 'Bien', ''),
(4, 'Plomería a hogar', 'bien', ''),
(5, 'Plomería a hogar', 'bien', ''),
(6, 'Celular Samsung', 'Muy buen celular', ''),
(7, 'Laptop Gamer Lenovo', '', ''),
(8, 'Laptop Gamer Lenovo', 'dasd', ''),
(9, 'Laptop Gamer Lenovo', '', ''),
(10, 'Servicio de niñera', 'kjashdk', ''),
(11, 'Celular Samsung', 'No me gustó', ''),
(12, 'Elaboracion de proyectos', 'No sirve', ''),
(13, 'Elaboracion de proyectos', 'A mi si me sirvió', ''),
(14, 'Lavadoras', 'Si sirve\r\n', ''),
(15, 'Licuadoras', '', ''),
(16, 'Licuadoras', 'Si', ''),
(17, 'Laptop Asus', 'Esta laptop se me hizo muy cara pero valió la pena', ''),
(18, 'Laptop Asus', 'No me gustó - Anónimo\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `marca` varchar(80) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `numTel` varchar(10) NOT NULL,
  `descrip` varchar(400) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `latitud` varchar(300) NOT NULL,
  `longitud` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `marca`, `correo`, `direccion`, `contra`, `numTel`, `descrip`, `categoria`, `latitud`, `longitud`) VALUES
(1, 'ElectronicArts', 'electronic@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6185628978', 'Empresa encargada de dar servicios electricos y electrónicos a toda la localidad en donde se encuntren nuestra sucursales.', 'Electrica', '', ''),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '24.035950597133056', '-104.65666294097902'),
(14, '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '24.03903440549757', '-104.64816463227426'),
(16, '', '', '', '', '', '', '', '24.033481831437125', '-104.63953761478629'),
(17, '', '', '', '', '', '', '', '24.035973133652135', '-104.64047828891148'),
(18, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '', '6182568978', 'Tienda online de distintos productos abierta de 7:00 a 19:00', 'Otros', '', ''),
(19, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdfsddfsdf', 'Otros', '', ''),
(20, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdfsdf', 'Otros', '', ''),
(21, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'dsdfsdfsdf', 'Otros', '', ''),
(22, '', '', '', '', '', '', '', '24.036537528542695', '-104.64009126857404'),
(23, '', '', '', '', '', '', '', '24.036537528542695', '-104.64009126857404'),
(24, '', '', '', '', '', '', '', '24.034930565369507', '-104.63828863786857'),
(25, '', '', '', '', '', '', '', '24.03505598748903', '-104.6415080895505'),
(26, 'sdf', '', 'sdf', '', '', '', '', '', ''),
(27, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '', '', '', ''),
(28, 'asfs', 'fafsa', 'asf', 'asfa', 'asf', '', '', '', ''),
(29, 'qd', 'asd', 'asd', 'asd', 'asd', '', '', '', ''),
(30, '', '', '', '', '', '', '', '24.06525076707898', '-104.70345736997493'),
(31, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(32, '', '', '', '', '', '', '', '24.026196761752416', '-104.65213880711717'),
(33, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(34, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(35, '', '', '', '', '', '', '', '24.036286686625385', '-104.6441270616585'),
(36, '', '', '', '', '', '', '', '24.03771334252001', '-104.63918965522537'),
(37, '', '', '', '', '', '', '', '24.03771334252001', '-104.63918965522537'),
(38, '', '', '', '', '', '', '', '24.037164630669874', '-104.6353700405902'),
(39, '', '', '', '', '', '', '', '24.037164630669874', '-104.6353700405902'),
(40, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(41, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(42, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(43, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', '', 'Otros', '', ''),
(44, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'sdf', '6182568978', 'sdf', 'Otros', '', ''),
(45, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdfsdf', '', '', ''),
(46, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdf', 'Otros', '', ''),
(47, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'asd', '6182568978', 'sdfsdf', 'Otros', '', ''),
(48, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'asd', '6182568978', 'sdfsdf', 'Otros', '', ''),
(49, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'sdf', '6182568978', 'sdf', 'Otros', '', ''),
(50, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '455', '6182568978', 'dfsdf', 'Otros', '', ''),
(51, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '455', '6182568978', 'dfsdf', 'Otros', '0', '0'),
(52, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdf', 'Otros', '0', '0'),
(53, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdf', 'Otros', '0', '0'),
(54, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdf', 'Otros', '0', '0'),
(55, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'asd', 'Otros', '0', '0'),
(56, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdf', 'Otros', '0', '0'),
(57, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdfsdfsdf', 'Otros', '', ''),
(58, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'sdf', '6182568978', 'sdf', 'Otros', '', ''),
(59, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'dfg', '6182568978', 'dfg', 'Cuidados', '', ''),
(60, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'sdf', '6182568978', 'sdf', 'Otros', '', ''),
(61, 'Walmart', 'electronic@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'dssd', '6182568978', 'dcsc', 'Informatica', '', ''),
(62, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', 'sdf', '6182568978', 'sdf', 'Informatica', '', ''),
(63, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '1123', '6182568978', 'sdfsdf', 'Plomeria', '', ''),
(64, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '1123', '6182568978', 'sdfsdf', 'Plomeria', '', ''),
(65, 'Walmart', 'wal@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6182568978', 'sdf', 'Otros', '', ''),
(66, 'Acisti', 'acisti@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6187895623', 'Somos una asociación encargada de generar hermandan entre las carreras de Tics, Sistemas Computacionales e Informática en el Instituto Tecnolóigo de Durango.', 'Otros', '', ''),
(67, 'Acisti', 'acisti@gmail.com', 'Calle del Sol 123, Colonia Jardines', '123', '6187895623', 'Somos una asociación encargada de generar hermandan entre las carreras de Tics, Sistemas Computacionales e Informática en el Instituto Tecnolóigo de Durango.', 'Otros', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `precio` int(6) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `marca`, `titulo`, `categoria`, `descripcion`, `precio`, `imagen`) VALUES
(2, 'Walmart', 'Lavadoras', 'Electrica', 'Compra lavadoras eelectricas por medio de nuestra app. Horarios de atenció 7:00 - 19:00', 5000, 'https://chedrauimx.vtexassets.com/arquivos/ids/36158400/7501545587498_02.jpg?v=638622967873800000'),
(3, 'Walmart', 'Licuadoras', 'Electrica', 'Venta de licuadoras', 1500, 'https://lamarinamx.vteximg.com.br/arquivos/ids/854648-292-292/image-fa9c4fe0f37d46e394363f52908594d0.jpg?v=638497599626430000'),
(6, 'ElectronicArts', 'Servicio de niñera', 'Cuidados', 'Niñera para niños de entre 5 a 15 años, disponibilidad a tiempo completo, cuidado intensivo', 500, 'https://babysparks.com/wp-content/uploads/2019/09/20222a-1-300x229.jpg'),
(7, 'ElectronicArts', 'Elaboracion de proyectos ', 'Electrica', 'Te hacemos el proyecto de alguna materia, Codigo incluido, Diagrama incluido', 700, 'https://giltesa.com/wp-content/uploads/2015/01/P1140832.jpg'),
(8, 'ElectronicArts', 'Celular Samsung', 'Informatica', 'Samsung A51, desbloqueado, Huella dactilar, SnapDragon, camara 32MPX, Reconocimiento facial', 7000, 'https://cell-shop.com.mx/wp-content/uploads/2020/11/D_NQ_NP_2X_732374-MLA46573722601_062021-F.jpg'),
(9, 'ElectronicArts', 'Fifa 24', 'Otros', 'Videojuego FIFA 24, todas las plataformas, metodo de pago sencillo, codigo de acceso, playstation, xbox, steam', 1200, 'https://image.api.playstation.com/vulcan/ap/rnd/202408/0817/4248a0d1a669210e5caf5174eda176c7883be2c9089fa106.png'),
(10, 'Walmart', 'Farmacia', 'Otros', 'Medicamentos, entrega 24/7, productos baratos, consulta medica, pastillas, capsulas, jarabes, inyecciones', 300, 'https://medlineplus.gov/images/Medicines_share.jpg'),
(11, 'ElectronicArts', 'Laptop Asus', 'Informatica', 'Laptop Asus rápida eficiente capaz, Corei5-9300H\r\n', 15000, 'https://m.media-amazon.com/images/I/71xZUkl5dyL.jpg'),
(12, 'Acisti', 'Termo Especial ACISTI', 'Otros', 'Termo de edición limitada para participantes del Hackatón, pide el tuyo.', 0, 'https://scontent-mty2-1.xx.fbcdn.net/v/t39.30808-6/462680486_1092064302439429_1764351642275992262_n.jpg?stp=dst-jpg_p526x296&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeFH91j79_8rwpHIHkNoj4hkyHCdupYs_f7IcJ26liz9_rooXZj66x78iqOaIPKPAUBu9xa8PQy7-DesdH4eBQKn&_nc_ohc=rrcQl-0k3DAQ7kNvgFUalC3&_nc_zt=23&_nc_ht=scontent-mty2-1.xx&_nc_gid=AicIBavH9UL6ztDhwDgpnAq&oh=00_AYATB1Wrno_Tlk6f0AiOsrwHxmqRmgR-mvYAZ0i9R--p6g&oe=670F0D24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
