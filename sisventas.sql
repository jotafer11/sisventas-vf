-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2024 a las 20:17:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_almacen`
--

CREATE TABLE `tb_almacen` (
                              `id_producto` int(11) NOT NULL,
                              `codigo` varchar(255) NOT NULL,
                              `nombre` varchar(255) NOT NULL,
                              `descripcion` text DEFAULT NULL,
                              `stock` int(11) NOT NULL,
                              `stock_minimo` int(11) NOT NULL,
                              `fyh_creacion` datetime NOT NULL,
                              `id_categoria` int(11) NOT NULL,
                              `precio_compra` varchar(50) NOT NULL,
                              `precio_venta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_almacen`
--

INSERT INTO `tb_almacen` (`id_producto`, `codigo`, `nombre`, `descripcion`, `stock`, `stock_minimo`, `fyh_creacion`, `id_categoria`, `precio_compra`, `precio_venta`) VALUES
<<<<<<< HEAD
                                                                                                                                                                          (1, '11010332/5410101072', 'VARILLA NIVEL ACEITE ACTROS', 'destacados', 36, 5, '2023-12-27 21:02:15', 1, '2000', '24990'),
                                                                                                                                                                          (2, '11140412/9415410103', 'TAPA BATERIA ACTROS', 'tapa bateria ml', 2, 0, '2023-12-27 21:04:32', 1, '4000', '29990'),
                                                                                                                                                                          (3, '11140487/3756601128', 'PELDAÑO COLGANTE CORTO ACTROS ', '', 10, 0, '2023-12-28 16:04:30', 1, '', ''),
                                                                                                                                                                          (4, '11050030/9408200421', 'INTERMITENTE AXOR RH', '952996586 (ml)', 17, 5, '2023-12-28 16:06:30', 1, '3000', '9000'),
                                                                                                                                                                          (8, '11140457/3756602330', 'FIJACION PRIMER ACCESO ACTROS', '-', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (9, 'A4570160221/4570160221', 'JUNTA TAPA CULATIN MO501 502  ACTROS', '-', 10, 5, '0000-00-00 00:00:00', 6, '', ''),
                                                                                                                                                                          (32, '104937/9438260259', 'BISEL CROMADO FOCO ACTROS MP3 LH', '971217053 (ml)', 17, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (33, '104938/9438260359', 'BISEL CROMADO FOCO RH ACTROS MP3', '971217053 (ml)', 0, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (34, '11140311/9438800285', 'REJILLA PROTECCION FOCO ACTROS RH', '992561255 (ml)', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (35, '11140310/9438800185', 'REJILLA PROTECCION FOCO ACTROS LH', '992561255 (ml)', 8, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (36, '11140292/0018112133', 'REEMPLAZO ESPEJO CHICO ACTROS MP1 MP2', '', 18, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (37, '11050207/0035441003', 'FOCO TRASERO ACTROS MP3 MP4 RH', '1008612633 (ml)', 0, 3, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (38, '11050208/0035440903', 'FOCO TRASERO ACTROS MP3 MP4 LH', '1008612633 (ml)', 13, 3, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (39, '11050204TR/0018261382', 'SOQUETE INTERMITENTE ACTROS MP2-MP3', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (40, '117090/0011523210', 'SOLENOIDE 50 ARRANCADOR MOTOR MB ACTROS MP1 MP2 MP3', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (41, '117091/0011522410', 'CHANCHITO DE PARTIDA/SOLENOIDE ACTROS MP1 MP2 MP3', '', 23, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (42, '117014/0061530728', 'SENSOR TEMPERATURA GASES ESCAPE ACTROS MP3', '', 4, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (43, '12242/0025426718', 'SENSOR REVOLUCIONES CIGUEÑAL Y LEVAS', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (44, '142155/9438200097', 'INTERRUPTOR DE ELEVALUNAS CHOFER ACTROS MP1 MP2 MP3', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (45, '61405/0004303907', 'SENSOR DE PRESIÓN AIRE ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (46, '142146/6555400717', 'SENSOR ABS EJE TRASERO DERECHO TOLVA Y FORESTAL ACTROS', '', 7, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (47, '117044/0011533120', 'SENSOR REVOLUCIONES CIGUEÑAL Y LEVAS', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (48, '117013/0061530628', 'SENSOR TERMICO DELANTE CATALIZADOR ACTROS MP3 CON ADBLUE', '', 3, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (49, '117094/0011530220', 'SENSOR RPM CIGUEÑAL ACTROS MP1', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (50, '117022/1539932', 'INTERRUPTOR PRESIÓN DE ACEITE OM 501LA 502LA 904LA 906LA', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (51, '6526/0155456526', 'CONECTOR REDONDO 1 A 4 PINES ACTROS', '', 50, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (52, '11050265/9435451307', 'TECLA TOMA FUERZA ACTROS MP2 MP3', 'tecla toma fuerza', 0, 5, '0000-00-00 00:00:00', 1, '5000', '15000'),
                                                                                                                                                                          (53, '142139/0015428718', 'SENSOR BS IZQ/DER EJE DIRECCIONAL ACTROS', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (54, '09189/0001539932', 'SENSOR ELECTRÓNICO DE PRESIÓN DE ACEITE', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (55, 'A0015408727/0015408727', 'CABLE ELECTRICO SENSOR ABS EJE TRASERO DERECHO', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (56, 'RLD5M041/0035422618', 'SENSOR CONTROL DE NIVELACION DE ALTURA TRACCIONAL MB', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (57, '45454207/0045454207', 'TECLA TOMA FUERZA ACTROS MP2 MP3', '', 0, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (58, 'RLD5D003', 'CORTACORRIENTE 300 AMP C/SOPORTE', '', 28, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (59, '158068/0018216960', 'RESISTENCIA AIRE ACONDICIONADO ACTROS', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (60, '1402355546', 'CONECTOR REDONDO 5 A 7 PINES ACTROS', '', 23, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (61, '142115/0085450124', 'TELECOMANDO ACTROS', '', 10, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (62, '0104120MB01BO/0004661367', 'SENSOR DE NIVEL HIDRAULICO ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (63, '60419/4213509352', 'KIT REPARACION MODULO DE MARCHAS WABCO', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (64, '43121/125425617', 'SENSOR DE REVOLUCIONES DE LA CAJA MB ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (65, 'A9435454507/9435454507', 'TECLA ACTIVACION AIRE ACONDICIONADO ACTROS', '', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
                                                                                                                                                                          (66, 'A0165451226/0165451226', 'ENCHUFE CHICO GS MERCEDES ACTROS', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (67, '1226/0165451226', 'X15 PIN ENCHUFE MODULO GS', '', 0, 5, '0000-00-00 00:00:00', 3, '150', ''),
                                                                                                                                                                          (68, '117067/0001543805', 'CAJA REGULADORA ALTERNADOR OM 457LA, 501LA, 502LA', '', 11, 5, '0000-00-00 00:00:00', 3, '', ''),
                                                                                                                                                                          (70, '959431', 'ACEITE 15W40 RIMULA R4', 'Para lubricación motor', 478, 10, '0000-00-00 00:00:00', 1, '10', '5713'),
                                                                                                                                                                          (72, '11030050/9429970290', 'ABRAZADERA SUPERIOR BAJADA ESCAPE', 'Abrazadera', 10, 5, '0000-00-00 00:00:00', 1, '5', '19990'),
                                                                                                                                                                          (73, '11080020/0004101010', 'SOPORTE RODAMIENTO CARDAN D 70MM1 ', '', 8, 5, '0000-00-00 00:00:00', 1, '1600', '90000'),
                                                                                                                                                                          (75, '130.564S/0089813025', 'RODAMIENTO DE BOLAS COLA CAJA 80X150X28 (1XCAJA)', '', 1, 5, '0000-00-00 00:00:00', 1, '45000', '89250'),
                                                                                                                                                                          (76, 'TRF020612', 'DEPOSITO DE AGUA AXOR', '', 0, 5, '0000-00-00 00:00:00', 10, '60000', '134990'),
                                                                                                                                                                          (77, '167538', 'KIT REPARACION CONECTOR AIRE M22/VOSS 230 ', '', 11, 5, '0000-00-00 00:00:00', 1, '2000', '4662'),
                                                                                                                                                                          (78, '11100203/0003502405', 'BUJE BARRA EN V 100X152X25 ACTROS,MAN', '', 0, 5, '0000-00-00 00:00:00', 7, '25000', '59990'),
                                                                                                                                                                          (79, ' TRF130869MB ', 'FOCO TRASERO ACTROS RH MP3 MP4 ', '', 2, 5, '0000-00-00 00:00:00', 1, '25000', '49990'),
                                                                                                                                                                          (80, ' 11050208', 'FOCO TRASERO ACTROS MP3 MP4 LH ', '', 11, 5, '0000-00-00 00:00:00', 1, '25000', '48990'),
                                                                                                                                                                          (81, ' 11140119 ', 'FILTRO DE POLEN / HABITACULO ACTROS ', '', 20, 5, '0000-00-00 00:00:00', 4, '7000', '14990'),
                                                                                                                                                                          (82, '188210622/0165421617', 'SENSOR DE VELOCIDAD TCO CONTINENTAL', '', 0, 5, '0000-00-00 00:00:00', 1, '90000', '215003'),
                                                                                                                                                                          (83, '11010721/4721841125', 'FILTRO DE ACEITE ACTROS AROCS MP4', '', 2, 5, '0000-00-00 00:00:00', 1, '15000', '29990'),
                                                                                                                                                                          (84, '102334/9423200557', 'PULMON DE SUSPENSION ACTROS', '', 1, 5, '0000-00-00 00:00:00', 7, '70000', '149990');
=======
(1, '11010332/5410101072', 'VARILLA NIVEL ACEITE ACTROS', 'destacados', 36, 5, '2023-12-27 21:02:15', 1, '2000', '24990'),
(2, '11140412/9415410103', 'TAPA BATERIA ACTROS', 'tapa bateria ml', 2, 0, '2023-12-27 21:04:32', 1, '4000', '29990'),
(3, '11140487/3756601128', 'PELDAÑO COLGANTE CORTO ACTROS ', '', 10, 0, '2023-12-28 16:04:30', 1, '', ''),
(4, '11050030/9408200421', 'INTERMITENTE AXOR RH', '952996586 (ml)', 17, 5, '2023-12-28 16:06:30', 1, '3000', '9000'),
(8, '11140457/3756602330', 'FIJACION PRIMER ACCESO ACTROS', '-', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
(9, 'A4570160221/4570160221', 'JUNTA TAPA CULATIN MO501 502  ACTROS', '-', 10, 5, '0000-00-00 00:00:00', 6, '', ''),
(32, '104937/9438260259', 'BISEL CROMADO FOCO ACTROS MP3 LH', '971217053 (ml)', 17, 5, '0000-00-00 00:00:00', 1, '', ''),
(33, '104938/9438260359', 'BISEL CROMADO FOCO RH ACTROS MP3', '971217053 (ml)', 0, 5, '0000-00-00 00:00:00', 1, '', ''),
(34, '11140311/9438800285', 'REJILLA PROTECCION FOCO ACTROS RH', '992561255 (ml)', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
(35, '11140310/9438800185', 'REJILLA PROTECCION FOCO ACTROS LH', '992561255 (ml)', 8, 5, '0000-00-00 00:00:00', 1, '', ''),
(36, '11140292/0018112133', 'REEMPLAZO ESPEJO CHICO ACTROS MP1 MP2', '', 18, 5, '0000-00-00 00:00:00', 1, '', ''),
(37, '11050207/0035441003', 'FOCO TRASERO ACTROS MP3 MP4 RH', '1008612633 (ml)', 0, 3, '0000-00-00 00:00:00', 1, '', ''),
(38, '11050208/0035440903', 'FOCO TRASERO ACTROS MP3 MP4 LH', '1008612633 (ml)', 13, 3, '0000-00-00 00:00:00', 1, '', ''),
(39, '11050204TR/0018261382', 'SOQUETE INTERMITENTE ACTROS MP2-MP3', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
(40, '117090/0011523210', 'SOLENOIDE 50 ARRANCADOR MOTOR MB ACTROS MP1 MP2 MP3', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
(41, '117091/0011522410', 'CHANCHITO DE PARTIDA/SOLENOIDE ACTROS MP1 MP2 MP3', '', 23, 5, '0000-00-00 00:00:00', 3, '', ''),
(42, '117014/0061530728', 'SENSOR TEMPERATURA GASES ESCAPE ACTROS MP3', '', 4, 5, '0000-00-00 00:00:00', 3, '', ''),
(43, '12242/0025426718', 'SENSOR REVOLUCIONES CIGUEÑAL Y LEVAS', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
(44, '142155/9438200097', 'INTERRUPTOR DE ELEVALUNAS CHOFER ACTROS MP1 MP2 MP3', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
(45, '61405/0004303907', 'SENSOR DE PRESIÓN AIRE ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
(46, '142146/6555400717', 'SENSOR ABS EJE TRASERO DERECHO TOLVA Y FORESTAL ACTROS', '', 7, 5, '0000-00-00 00:00:00', 3, '', ''),
(47, '117044/0011533120', 'SENSOR REVOLUCIONES CIGUEÑAL Y LEVAS', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
(48, '117013/0061530628', 'SENSOR TERMICO DELANTE CATALIZADOR ACTROS MP3 CON ADBLUE', '', 3, 5, '0000-00-00 00:00:00', 3, '', ''),
(49, '117094/0011530220', 'SENSOR RPM CIGUEÑAL ACTROS MP1', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
(50, '117022/1539932', 'INTERRUPTOR PRESIÓN DE ACEITE OM 501LA 502LA 904LA 906LA', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
(51, '6526/0155456526', 'CONECTOR REDONDO 1 A 4 PINES ACTROS', '', 50, 5, '0000-00-00 00:00:00', 3, '', ''),
(52, '11050265/9435451307', 'TECLA TOMA FUERZA ACTROS MP2 MP3', 'tecla toma fuerza', 0, 5, '0000-00-00 00:00:00', 1, '5000', '15000'),
(53, '142139/0015428718', 'SENSOR BS IZQ/DER EJE DIRECCIONAL ACTROS', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
(54, '09189/0001539932', 'SENSOR ELECTRÓNICO DE PRESIÓN DE ACEITE', '', 5, 5, '0000-00-00 00:00:00', 3, '', ''),
(55, 'A0015408727/0015408727', 'CABLE ELECTRICO SENSOR ABS EJE TRASERO DERECHO', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
(56, 'RLD5M041/0035422618', 'SENSOR CONTROL DE NIVELACION DE ALTURA TRACCIONAL MB', '', 6, 5, '0000-00-00 00:00:00', 3, '', ''),
(57, '45454207/0045454207', 'TECLA TOMA FUERZA ACTROS MP2 MP3', '', 0, 5, '0000-00-00 00:00:00', 1, '', ''),
(58, 'RLD5D003', 'CORTACORRIENTE 300 AMP C/SOPORTE', '', 28, 5, '0000-00-00 00:00:00', 3, '', ''),
(59, '158068/0018216960', 'RESISTENCIA AIRE ACONDICIONADO ACTROS', '', 1, 5, '0000-00-00 00:00:00', 3, '', ''),
(60, '1402355546', 'CONECTOR REDONDO 5 A 7 PINES ACTROS', '', 23, 5, '0000-00-00 00:00:00', 3, '', ''),
(61, '142115/0085450124', 'TELECOMANDO ACTROS', '', 10, 5, '0000-00-00 00:00:00', 3, '', ''),
(62, '0104120MB01BO/0004661367', 'SENSOR DE NIVEL HIDRAULICO ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
(63, '60419/4213509352', 'KIT REPARACION MODULO DE MARCHAS WABCO', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
(64, '43121/125425617', 'SENSOR DE REVOLUCIONES DE LA CAJA MB ACTROS', '', 0, 5, '0000-00-00 00:00:00', 3, '', ''),
(65, 'A9435454507/9435454507', 'TECLA ACTIVACION AIRE ACONDICIONADO ACTROS', '', 2, 5, '0000-00-00 00:00:00', 1, '', ''),
(66, 'A0165451226/0165451226', 'ENCHUFE CHICO GS MERCEDES ACTROS', '', 2, 5, '0000-00-00 00:00:00', 3, '', ''),
(67, '1226/0165451226', 'X15 PIN ENCHUFE MODULO GS', '', 0, 5, '0000-00-00 00:00:00', 3, '150', ''),
(68, '117067/0001543805', 'CAJA REGULADORA ALTERNADOR OM 457LA, 501LA, 502LA', '', 11, 5, '0000-00-00 00:00:00', 3, '', ''),
(70, '959431', 'ACEITE 15W40 RIMULA R4', 'Para lubricación motor', 478, 10, '0000-00-00 00:00:00', 1, '10', '5713'),
(72, '11030050/9429970290', 'ABRAZADERA SUPERIOR BAJADA ESCAPE', 'Abrazadera', 10, 5, '0000-00-00 00:00:00', 1, '5', '19990'),
(73, '11080020/0004101010', 'SOPORTE RODAMIENTO CARDAN D 70MM1 ', '', 8, 5, '0000-00-00 00:00:00', 1, '1600', '90000'),
(75, '130.564S/0089813025', 'RODAMIENTO DE BOLAS COLA CAJA 80X150X28 (1XCAJA)', '', 1, 5, '0000-00-00 00:00:00', 1, '45000', '89250'),
(76, 'TRF020612', 'DEPOSITO DE AGUA AXOR', '', 0, 5, '0000-00-00 00:00:00', 10, '60000', '134990'),
(77, '167538', 'KIT REPARACION CONECTOR AIRE M22/VOSS 230 ', '', 11, 5, '0000-00-00 00:00:00', 1, '2000', '4662'),
(78, '11100203/0003502405', 'BUJE BARRA EN V 100X152X25 ACTROS,MAN', '', 0, 5, '0000-00-00 00:00:00', 7, '25000', '59990'),
(79, ' TRF130869MB ', 'FOCO TRASERO ACTROS RH MP3 MP4 ', '', 2, 5, '0000-00-00 00:00:00', 1, '25000', '49990'),
(80, ' 11050208', 'FOCO TRASERO ACTROS MP3 MP4 LH ', '', 11, 5, '0000-00-00 00:00:00', 1, '25000', '48990'),
(81, ' 11140119 ', 'FILTRO DE POLEN / HABITACULO ACTROS ', '', 20, 5, '0000-00-00 00:00:00', 4, '7000', '14990'),
(82, '188210622/0165421617', 'SENSOR DE VELOCIDAD TCO CONTINENTAL', '', 0, 5, '0000-00-00 00:00:00', 1, '90000', '215003'),
(83, '11010721/4721841125', 'FILTRO DE ACEITE ACTROS AROCS MP4', '', 2, 5, '0000-00-00 00:00:00', 1, '15000', '29990'),
(84, '102334/9423200557', 'PULMON DE SUSPENSION ACTROS', '', 1, 5, '0000-00-00 00:00:00', 7, '70000', '149990');
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_carrito`
--

CREATE TABLE `tb_carrito` (
<<<<<<< HEAD
                              `id_carrito` int(11) NOT NULL,
                              `nro_venta` int(11) NOT NULL,
                              `id_producto` int(11) NOT NULL,
                              `cantidad` int(11) NOT NULL,
                              `fyh_creacion` datetime NOT NULL,
                              `fyh_actualizacion` datetime NOT NULL
=======
  `id_carrito` int(11) NOT NULL,
  `nro_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_carrito`
--

INSERT INTO `tb_carrito` (`id_carrito`, `nro_venta`, `id_producto`, `cantidad`, `fyh_creacion`, `fyh_actualizacion`) VALUES
<<<<<<< HEAD
                                                                                                                         (10, 1, 1, 1, '2024-02-09 12:27:47', '0000-00-00 00:00:00'),
                                                                                                                         (30, 2, 72, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (31, 3, 73, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (33, 4, 75, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (35, 5, 76, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (36, 6, 77, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (37, 7, 78, 2, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (38, 8, 79, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (39, 8, 80, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (40, 9, 81, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (42, 10, 82, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (43, 11, 83, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
                                                                                                                         (44, 12, 84, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00');
=======
(10, 1, 1, 1, '2024-02-09 12:27:47', '0000-00-00 00:00:00'),
(30, 2, 72, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 73, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 75, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(35, 5, 76, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(36, 6, 77, 1, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(37, 7, 78, 2, '2024-02-14 00:00:00', '0000-00-00 00:00:00'),
(38, 8, 79, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
(39, 8, 80, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
(40, 9, 81, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
(42, 10, 82, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
(43, 11, 83, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00'),
(44, 12, 84, 1, '2024-02-15 00:00:00', '0000-00-00 00:00:00');
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categorias`
--

CREATE TABLE `tb_categorias` (
                                 `id_categoria` int(11) NOT NULL,
                                 `nombre_categoria` varchar(255) NOT NULL,
                                 `fyh_creacion` datetime DEFAULT NULL,
                                 `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `nombre_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
                                                                                                          (1, 'CARROCERIA', '2023-12-27 19:28:31', '2023-12-27 19:28:31'),
                                                                                                          (2, 'DIRECCION', '2023-12-27 19:28:31', '2023-12-27 19:28:31'),
                                                                                                          (3, 'ELECTRICOS', '2023-12-27 19:31:12', '2023-12-27 19:31:12'),
                                                                                                          (4, 'FILTROS', '2023-12-27 19:31:12', '2023-12-27 19:31:12'),
                                                                                                          (5, 'FRENOS', '2023-12-27 19:31:32', '2023-12-27 19:31:32'),
                                                                                                          (6, 'MOTOR', '2023-12-27 19:31:32', '2023-12-27 19:31:32'),
                                                                                                          (7, 'SUSPENSION', '2023-12-27 19:31:53', '2023-12-27 19:31:53'),
                                                                                                          (8, 'TRANSMISION', '2023-12-27 19:31:53', '2023-12-27 19:31:53'),
                                                                                                          (9, 'SISTEMA DE ESCAPE', '2023-12-27 19:32:09', '2023-12-27 19:32:09'),
                                                                                                          (10, 'REFRIGERACION Y CALEFACCION', '2023-12-27 19:32:09', '2023-12-27 19:32:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
                               `id_cliente` int(11) NOT NULL,
                               `nombre_cliente` varchar(255) NOT NULL,
                               `rut_cliente` varchar(255) NOT NULL,
                               `ciudad_cliente` varchar(255) NOT NULL,
                               `direccion_cliente` varchar(255) NOT NULL,
                               `giro_cliente` varchar(255) NOT NULL,
                               `telefono_movil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `rut_cliente`, `ciudad_cliente`, `direccion_cliente`, `giro_cliente`, `telefono_movil`) VALUES
                                                                                                                                                       (1, 'TRANSPORTES SAN FELIPE H SPA', '77.211.804-K', 'CHILLAN', 'LOS VOLCANES 6 CALLE CERRO EL ROBLE 1374', 'TRANSPORTES DE CARGA POR CARRETERA', '+56 956314105'),
                                                                                                                                                       (2, 'JORGE WILSON CORTES MUNOZ ', '7.426.362-3', 'CHILLÁN', 'DIAGONAL LAS TERMAS PSAJE ANCOPUJO 1953', 'TRANSPORTE CARGA POR CARRETERA', ''),
                                                                                                                                                       (3, 'EXCAVACIONES PASTOR CHILE SPA', '76.237.806-K', 'Las Condes, RMetropolitana', 'SAN SEBASTIAN 2812 OFICINA 811', 'Movimiento de tierra', ''),
                                                                                                                                                       (4, 'PEDRO ISMAEL MILLAR CARRASCO', '11.913.746-2', 'BULNES', 'SOTO MAYOR 406', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 999970647'),
                                                                                                                                                       (6, 'SOCIEDAD TRANSPORTES QUIÑONES Y PINTO LIMITADA  ', '77.191.103-K', 'PUREN', 'ALMAGRO INTERIOR 0243 AGUA TENDIDA', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 95189 1117'),
                                                                                                                                                       (7, 'SOCIEDAD DE TRANSPORTES COIHUE LIMITADA', '76.509.975-7', 'CHILLAN VIEJO', 'HJ 6 A STA ELISA LT 4 S/N PANAMERICANA SUR KM 406', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 993206110'),
                                                                                                                                                       (8, 'MARCO SALGADO Y COMPANIA LIMITADA ', '77.469.220-7', 'CHILLAN VIEJO', 'CARRETERA PANAMERICA KM 415 RUCAPEQUEN', '', ' +56 974323117 '),
                                                                                                                                                       (9, 'SOCIEDAD DE TRANSPORTES ECOTRUCK LIMITADA', '76.616.985-6', 'CHILLAN', 'PASAJE LOS MONTONEROS 785 VILLA LOS NARANJOS', '', '+569 9054 9253'),
                                                                                                                                                       (10, 'TRANSPORTES TOCONEY LIMITADA ', '76.355.681-6', 'SAN CLEMENTE', 'VILLA ILUCION RIO MAULE 484', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 5720 5723'),
                                                                                                                                                       (11, 'TRANSPORTES MEZA Y MEZA  SPA', '77.016.884-8', 'CABRERO', 'C PROGRESO-RUT Q47 N° LT 36, LOS NOGALES', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 9546 8958'),
                                                                                                                                                       (12, 'SOCIEDAD DE TRANSPORTES MONTE VERDE SPA', '77.198.483-5', 'CHILLAN', 'CALETERA SAN BARTOLOME 1135 LOS SAUCES', 'TRANSPORTE DE CARGA POR CARRETERA', ''),
                                                                                                                                                       (13, 'TRANSPORTE DE CARGA POR CARRETERA CRISTOFER RUZ PONTIO EIRL', '76.167.128-6', 'VALPARAISO', 'TENIENTE MERINO 207', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 8369 7185'),
                                                                                                                                                       (14, 'TRANSPORTES JUAN EDUARDO GÓMEZ MALDONADO E.I.R.L.', '76.878.847-2', 'CHILLAN', 'PASAJE LOS DURAZNALES PONIENT 682 LOS ROBLES DE LANTAÑA', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 7476 1976'),
                                                                                                                                                       (15, 'NELSON ENRIQUE BALMACEDA CASTRO', '9.775.540-K', 'CHILLAN', 'VILLA MONTERRICO   CATEDRAL 1427', 'VENTA DE REPUESTOS', '+56 958794619'),
                                                                                                                                                       (16, 'ANITA BRIGITTE SCHAFFRIK BRUCKMANN  ', '6.267.876-3', 'BULNES', 'BULNES', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 7498 6518');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `rut_cliente` varchar(255) NOT NULL,
  `ciudad_cliente` varchar(255) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `giro_cliente` varchar(255) NOT NULL,
  `telefono_movil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `rut_cliente`, `ciudad_cliente`, `direccion_cliente`, `giro_cliente`, `telefono_movil`) VALUES
(1, 'TRANSPORTES SAN FELIPE H SPA', '77.211.804-K', 'CHILLAN', 'LOS VOLCANES 6 CALLE CERRO EL ROBLE 1374', 'TRANSPORTES DE CARGA POR CARRETERA', '+56 956314105'),
(2, 'JORGE WILSON CORTES MUNOZ ', '7.426.362-3', 'CHILLÁN', 'DIAGONAL LAS TERMAS PSAJE ANCOPUJO 1953', 'TRANSPORTE CARGA POR CARRETERA', ''),
(3, 'EXCAVACIONES PASTOR CHILE SPA', '76.237.806-K', 'Las Condes, RMetropolitana', 'SAN SEBASTIAN 2812 OFICINA 811', 'Movimiento de tierra', ''),
(4, 'PEDRO ISMAEL MILLAR CARRASCO', '11.913.746-2', 'BULNES', 'SOTO MAYOR 406', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 999970647'),
(6, 'SOCIEDAD TRANSPORTES QUIÑONES Y PINTO LIMITADA  ', '77.191.103-K', 'PUREN', 'ALMAGRO INTERIOR 0243 AGUA TENDIDA', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 95189 1117'),
(7, 'SOCIEDAD DE TRANSPORTES COIHUE LIMITADA', '76.509.975-7', 'CHILLAN VIEJO', 'HJ 6 A STA ELISA LT 4 S/N PANAMERICANA SUR KM 406', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 993206110'),
(8, 'MARCO SALGADO Y COMPANIA LIMITADA ', '77.469.220-7', 'CHILLAN VIEJO', 'CARRETERA PANAMERICA KM 415 RUCAPEQUEN', '', ' +56 974323117 '),
(9, 'SOCIEDAD DE TRANSPORTES ECOTRUCK LIMITADA', '76.616.985-6', 'CHILLAN', 'PASAJE LOS MONTONEROS 785 VILLA LOS NARANJOS', '', '+569 9054 9253'),
(10, 'TRANSPORTES TOCONEY LIMITADA ', '76.355.681-6', 'SAN CLEMENTE', 'VILLA ILUCION RIO MAULE 484', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 5720 5723'),
(11, 'TRANSPORTES MEZA Y MEZA  SPA', '77.016.884-8', 'CABRERO', 'C PROGRESO-RUT Q47 N° LT 36, LOS NOGALES', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 9546 8958'),
(12, 'SOCIEDAD DE TRANSPORTES MONTE VERDE SPA', '77.198.483-5', 'CHILLAN', 'CALETERA SAN BARTOLOME 1135 LOS SAUCES', 'TRANSPORTE DE CARGA POR CARRETERA', ''),
(13, 'TRANSPORTE DE CARGA POR CARRETERA CRISTOFER RUZ PONTIO EIRL', '76.167.128-6', 'VALPARAISO', 'TENIENTE MERINO 207', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 8369 7185'),
(14, 'TRANSPORTES JUAN EDUARDO GÓMEZ MALDONADO E.I.R.L.', '76.878.847-2', 'CHILLAN', 'PASAJE LOS DURAZNALES PONIENT 682 LOS ROBLES DE LANTAÑA', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 7476 1976'),
(15, 'NELSON ENRIQUE BALMACEDA CASTRO', '9.775.540-K', 'CHILLAN', 'VILLA MONTERRICO   CATEDRAL 1427', 'VENTA DE REPUESTOS', '+56 958794619'),
(16, 'ANITA BRIGITTE SCHAFFRIK BRUCKMANN  ', '6.267.876-3', 'BULNES', 'BULNES', 'TRANSPORTE DE CARGA POR CARRETERA', '+56 9 7498 6518');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_compras`
--

CREATE TABLE `tb_compras` (
                              `id_compra` int(11) NOT NULL,
                              `id_producto` int(11) NOT NULL,
                              `nro_compra` int(11) NOT NULL,
                              `fecha_compra` datetime NOT NULL,
                              `id_proveedor` int(11) NOT NULL,
                              `comprobante` varchar(255) NOT NULL,
                              `id_usuario` int(11) NOT NULL,
                              `precio_compra` varchar(50) NOT NULL,
                              `cantidad_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_compras`
--

INSERT INTO `tb_compras` (`id_compra`, `id_producto`, `nro_compra`, `fecha_compra`, `id_proveedor`, `comprobante`, `id_usuario`, `precio_compra`, `cantidad_compra`) VALUES
                                                                                                                                                                         (19, 1, 1, '2024-01-18 00:00:00', 2, 'Factura', 12, '2000', 20),
                                                                                                                                                                         (20, 1, 2, '2024-01-18 00:00:00', 2, 'Factura', 12, '2000', 20),
                                                                                                                                                                         (24, 1, 3, '2024-01-18 00:00:00', 2, 'Factura', 12, '2000', 20),
                                                                                                                                                                         (25, 1, 4, '2024-01-18 00:00:00', 2, 'Factura', 12, '2000', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedores`
--

CREATE TABLE `tb_proveedores` (
                                  `id_proveedor` int(11) NOT NULL,
                                  `nombre_proveedor` varchar(255) NOT NULL,
                                  `celular` varchar(50) NOT NULL,
                                  `telefono` varchar(50) NOT NULL,
                                  `empresa` varchar(255) NOT NULL,
                                  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id_proveedor`, `nombre_proveedor`, `celular`, `telefono`, `empresa`, `email`) VALUES
                                                                                                                 (1, 'AVANT ', '9977888444222', '42 2 33 55', 'AVANT', 'karen@gmail.com'),
                                                                                                                 (2, 'OTOKAM', '', '+90 44665 3333 ', 'OTOKAM ', 'otokam@whulerman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
                            `id_rol` int(11) NOT NULL,
                            `rol` varchar(255) NOT NULL,
                            `fyh_creacion` datetime NOT NULL,
                            `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
                                                                                  (1, 'ADMINISTRADOR', '2024-01-17 20:52:56', '2024-01-17 20:52:56'),
                                                                                  (2, 'VENDEDOR', '2024-01-18 10:08:38', '0000-00-00 00:00:00'),
                                                                                  (3, 'BODEGA', '2024-01-18 14:51:23', '2024-01-18 14:51:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
                               `id_usuario` int(11) NOT NULL,
                               `nombres` varchar(255) NOT NULL,
                               `email` varchar(255) NOT NULL,
                               `password_user` text NOT NULL,
                               `token` varchar(100) NOT NULL,
                               `fyh_creacion` datetime NOT NULL,
                               `fyh_actualizacion` datetime NOT NULL,
                               `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `email`, `password_user`, `token`, `fyh_creacion`, `fyh_actualizacion`, `id_rol`) VALUES
                                                                                                                                          (12, 'Javier Fernandez', 'jotafer11@gmail.com', '12345678', '', '2024-01-17 20:53:37', '2024-01-17 20:53:37', 1),
                                                                                                                                          (14, 'Natalia Vega', 'ventastr@gmail.com', '12345678', '', '2024-01-18 03:36:36', '0000-00-00 00:00:00', 2),
                                                                                                                                          (15, 'Gonzalo Bao', 'gonzalo.bao@gmail.com', '12345678', '', '2024-01-18 03:37:31', '0000-00-00 00:00:00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ventas`
--

CREATE TABLE `tb_ventas` (
                             `id_venta` int(11) NOT NULL,
                             `nro_venta` int(11) NOT NULL,
                             `id_cliente` int(11) NOT NULL,
                             `total_pagado` int(11) NOT NULL,
                             `fyh_creacion` date NOT NULL,
                             `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ventas`
--

INSERT INTO `tb_ventas` (`id_venta`, `nro_venta`, `id_cliente`, `total_pagado`, `fyh_creacion`, `fyh_actualizacion`) VALUES
                                                                                                                         (13, 2, 4, 11426, '2024-02-13', '0000-00-00 00:00:00'),
                                                                                                                         (14, 2, 6, 19990, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (15, 3, 7, 90000, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (16, 4, 9, 89250, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (17, 5, 11, 134990, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (18, 6, 8, 4662, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (19, 7, 10, 119980, '2024-02-14', '0000-00-00 00:00:00'),
                                                                                                                         (20, 8, 12, 98980, '2024-02-15', '0000-00-00 00:00:00'),
                                                                                                                         (21, 9, 13, 14990, '2024-02-15', '0000-00-00 00:00:00'),
                                                                                                                         (22, 10, 14, 215003, '2024-02-15', '0000-00-00 00:00:00'),
                                                                                                                         (23, 11, 15, 29990, '2024-02-15', '0000-00-00 00:00:00'),
                                                                                                                         (24, 12, 16, 149990, '2024-02-15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ventas`
--

CREATE TABLE `tb_ventas` (
  `id_venta` int(11) NOT NULL,
  `nro_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `total_pagado` int(11) NOT NULL,
  `fyh_creacion` date NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_ventas`
--

INSERT INTO `tb_ventas` (`id_venta`, `nro_venta`, `id_cliente`, `total_pagado`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(13, 2, 4, 11426, '2024-02-13', '0000-00-00 00:00:00'),
(14, 2, 6, 19990, '2024-02-14', '0000-00-00 00:00:00'),
(15, 3, 7, 90000, '2024-02-14', '0000-00-00 00:00:00'),
(16, 4, 9, 89250, '2024-02-14', '0000-00-00 00:00:00'),
(17, 5, 11, 134990, '2024-02-14', '0000-00-00 00:00:00'),
(18, 6, 8, 4662, '2024-02-14', '0000-00-00 00:00:00'),
(19, 7, 10, 119980, '2024-02-14', '0000-00-00 00:00:00'),
(20, 8, 12, 98980, '2024-02-15', '0000-00-00 00:00:00'),
(21, 9, 13, 14990, '2024-02-15', '0000-00-00 00:00:00'),
(22, 10, 14, 215003, '2024-02-15', '0000-00-00 00:00:00'),
(23, 11, 15, 29990, '2024-02-15', '0000-00-00 00:00:00'),
(24, 12, 16, 149990, '2024-02-15', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
    ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
<<<<<<< HEAD
    ADD PRIMARY KEY (`id_carrito`),
=======
  ADD PRIMARY KEY (`id_carrito`),
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87
  ADD KEY `id_venta` (`nro_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
    ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
    ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
    ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
    ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
    ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
    ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_rol_2` (`id_rol`);

--
-- Indices de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
<<<<<<< HEAD
    ADD PRIMARY KEY (`id_venta`),
=======
  ADD PRIMARY KEY (`id_venta`),
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
<<<<<<< HEAD
    MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
=======
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87

--
-- AUTO_INCREMENT de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
<<<<<<< HEAD
    MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
=======
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87

--
-- AUTO_INCREMENT de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
    MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
    MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
    MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
    MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
    MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
    MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
    MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
    ADD CONSTRAINT `tb_almacen_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categorias` (`id_categoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
    ADD CONSTRAINT `tb_carrito_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  ADD CONSTRAINT `tb_carrito_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
    ADD CONSTRAINT `tb_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tb_proveedores` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
<<<<<<< HEAD
    ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87

--
-- Filtros para la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
<<<<<<< HEAD
    ADD CONSTRAINT `tb_ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
=======
  ADD CONSTRAINT `tb_ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
>>>>>>> 63890680e9aaf4010fa8c56f68fe393b0f6a4b87
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
