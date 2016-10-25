-- --------------------------------------------------------
-- Host:                         169.57.6.70
-- Versión del servidor:         5.5.52-cll - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para bientics_cmot_examen
DROP DATABASE IF EXISTS `bientics_cmot_examen`;
CREATE DATABASE IF NOT EXISTS `bientics_cmot_examen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bientics_cmot_examen`;


-- Volcando estructura para tabla bientics_cmot_examen.casosclinicos
DROP TABLE IF EXISTS `casosclinicos`;
CREATE TABLE IF NOT EXISTS `casosclinicos` (
  `casoclinico_id` int(11) NOT NULL AUTO_INCREMENT,
  `casoclinico_nombre` text,
  `casoclinico_descripcion` text,
  `casoclinico_fecha` text,
  `casoclinico_hora` text,
  PRIMARY KEY (`casoclinico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.casosclinicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `casosclinicos` DISABLE KEYS */;
INSERT INTO `casosclinicos` (`casoclinico_id`, `casoclinico_nombre`, `casoclinico_descripcion`, `casoclinico_fecha`, `casoclinico_hora`) VALUES
	(3, 'Caso Clínico 1', 'Niño de 7 años con dolor en región inguinal izquierda de 8 meses de evolución sin antecedente de traumatismo. EF: dolor a la digito-presión en región inguinal, contractura en flexión de cadera izquierda y movilidad limitada a la abducción. ', '2016/10/24', '07:15:39 PM'),
	(4, 'Caso Clínico 2', 'Corredor de 30 años que presenta dolor intenso y sensación de latigazo en rodilla. EF: rodilla dolorosa, inflamada con espacio palpable en región infrapatelar, sin extensión activa.', '2016/10/24', '07:33:52 PM'),
	(5, 'Caso Clinico 3', 'Hombre de 23 años quien inició hace 4 meses con luxación anterior de hombro tratado en forma conservadora por 3 semanas. Actualmente refiere inseguridad del hombro. EF: arcos de movilidad completos, signo de aprehensión positivo y fuerza muscular completa. ', '2016/10/24', '07:39:12 PM');
/*!40000 ALTER TABLE `casosclinicos` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.casosclinicos_usuarios
DROP TABLE IF EXISTS `casosclinicos_usuarios`;
CREATE TABLE IF NOT EXISTS `casosclinicos_usuarios` (
  `casoclinico_usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `casoclinico_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`casoclinico_usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.casosclinicos_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `casosclinicos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `casosclinicos_usuarios` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.casos_clinicos_img
DROP TABLE IF EXISTS `casos_clinicos_img`;
CREATE TABLE IF NOT EXISTS `casos_clinicos_img` (
  `casoclinico_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `casoclinico_img` text,
  `casoclinico_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`casoclinico_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.casos_clinicos_img: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `casos_clinicos_img` DISABLE KEYS */;
INSERT INTO `casos_clinicos_img` (`casoclinico_img_id`, `casoclinico_img`, `casoclinico_id`) VALUES
	(1, 'city.ea21aa.jpg', 1),
	(2, 'caso clinico 1.8514fb.png', 3),
	(11, 'maxresdefault.ebff21.jpg', 4),
	(12, 'Cap2.805630.png', 4);
/*!40000 ALTER TABLE `casos_clinicos_img` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.cmot_sessions
DROP TABLE IF EXISTS `cmot_sessions`;
CREATE TABLE IF NOT EXISTS `cmot_sessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.cmot_sessions: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `cmot_sessions` DISABLE KEYS */;
INSERT INTO `cmot_sessions` (`session_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES
	(107, '039bc30fafd0253c428f0a0203768072f121f919', '::1', 1477421227, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421136;'),
	(116, '093d39717a704c3098ecca2f32063803122f39fd', '::1', 1477421877, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421876;'),
	(99, '2262b260fb26b89362d8221a8c055e8233ed91e0', '66.102.6.117', 1477418179, '__ci_last_regenerate|i:1477418179;'),
	(118, '2ee57ba00d9ba963d456dd29aa5492bc7112d5a8', '::1', 1477422370, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421932;'),
	(101, '33d1b6a772170992988489d0d80d8ae8c0a724af', '::1', 1477421004, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421004;'),
	(104, '42a048000ba1c4bc07c743ff044ed5f5f799b89b', '::1', 1477421047, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421046;'),
	(113, '490e148250c41a8f716519c39046d59d50c60a39', '::1', 1477421839, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421802;'),
	(106, '4c4d0c9971ab925d0663d7064077a85e86d0422d', '::1', 1477421083, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421083;'),
	(110, '5a1e3f4d0367fb27d88b7009eccc65db2c9fba6b', '::1', 1477421908, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421207;'),
	(108, '62ee9f7888eb8b639eee3ab8f885a5e38a407fc6', '::1', 1477421142, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421141;'),
	(111, '729500d4bf0d9fcfeeef4088eb5d479c474db9b3', '::1', 1477421654, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421653;'),
	(115, '743b766a1f55597c769cf6b46be8912007c64bd1', '::1', 1477421855, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421855;'),
	(102, '7782d8991f506e67f81513c22f447ad8252543fd', '::1', 1477421017, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421016;'),
	(109, '77fc63f770b148356b843d28f6e9538549233527', '::1', 1477421197, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421196;'),
	(120, '8a89fbd8bc3e0011aa566f4da83ef086888e9516', '::1', 1477422371, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477422371;'),
	(112, '955c74102b3bfe3e8036311ac3b6d6bbca56ec16', '::1', 1477421669, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421668;'),
	(103, '9fae077970fbdea518e5c81ef000494bf0ad60f7', '::1', 1477421037, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421037;'),
	(105, 'a088208afb426f5709b26d7228918d4109574f7c', '::1', 1477421076, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421075;'),
	(98, 'a58d3177c55f7c7247637bc62dabdd1e8132d334', '::1', 1477413221, '__ci_last_regenerate|i:1477413200;'),
	(117, 'adc5368d15610461f1d8f72cb18f8098a6f97ccd', '::1', 1477421910, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421909;'),
	(100, 'c3dd58d60bdba20acac8ca3a8b3d2d6e95e1149f', '::1', 1477421190, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477420684;'),
	(119, 'e84510d17d30309bcaa5671d31b068c63095b9bf', '::1', 1477422365, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477422364;'),
	(114, 'fc0bbb326851db084999558ac652f4b960904855', '::1', 1477421808, 'CMOT_USER|s:1:"1";__ci_last_regenerate|i:1477421807;'),
	(95, 'fd3fa86d18aa66bbfdfb20573215e1278dbf6b9c', '::1', 1477412514, '__ci_last_regenerate|i:1477412496;CMOT_USER|s:1:"1";');
/*!40000 ALTER TABLE `cmot_sessions` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.preguntas
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `pregunta_id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_nombre` text NOT NULL,
  `casoclinico_id` text NOT NULL,
  PRIMARY KEY (`pregunta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.preguntas: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`pregunta_id`, `pregunta_nombre`, `casoclinico_id`) VALUES
	(6, 'En esta patología el signo clínico más importante es:', '3'),
	(7, 'El diagnóstico es fractura:', '3'),
	(8, 'Posterior al tratamiento es más frecuente que se presente:', '3'),
	(9, 'El diagnóstico es fractura:', '3'),
	(10, 'Es una complicación del tratamiento', '4'),
	(11, 'La etiología de esta coxartrosis es:', '4'),
	(12, 'El tratamiento es:', '4'),
	(13, 'De acuerdo a Enneking se clasifica como:', '4'),
	(14, 'En el desplazamiento postero-medial, por frecuencia el nervio que se lesiona es:', '5'),
	(15, 'El bloqueo para la extensión se debe a:', '5'),
	(16, 'Este tumor puede evolucionar hacia:', '5'),
	(17, 'El diagnóstico es fractura:', '5');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.respuestas
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `respuesta_id` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta_nombre` text,
  `respuesta_valor` text,
  `pregunta_id` text,
  PRIMARY KEY (`respuesta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.respuestas: ~59 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` (`respuesta_id`, `respuesta_nombre`, `respuesta_valor`, `pregunta_id`) VALUES
	(8, 'Pistón positivo', '1', '6'),
	(9, 'Asimetría de pliegues', '0', '6'),
	(10, 'Actitud en flexión de cadera derecha    ', '0', '6'),
	(11, 'Limitación de la abducción de las caderas', '0', '6'),
	(12, 'Discrepancia de longitud de las extremidades', '0', '6'),
	(13, 'Supracondílea humeral', '1', '7'),
	(14, 'De tróclea no desplazada', '0', '7'),
	(15, 'De epitróclea', '0', '7'),
	(16, 'De cúpula radial ', '0', '7'),
	(17, 'De cóndilo humeral  ', '0', '7'),
	(18, 'Anquilosis', '0', '8'),
	(19, 'Recurvatum ', '0', '8'),
	(20, 'Pseudoartrosis', '0', '8'),
	(21, 'Retardo de consolidación', '1', '8'),
	(22, 'De Galeazzi', '1', '9'),
	(23, 'De Monteggia', '0', '9'),
	(24, 'Diafisiaria de radio y cúbito', '0', '9'),
	(25, 'Fisaria distal de radio y cúbito', '0', '9'),
	(26, 'Metaepifisaria distal de radio y cúbito    ', '0', '9'),
	(27, 'Patela baja', '1', '10'),
	(28, 'Fractura rotuliana', '0', '10'),
	(29, 'Rodilla de saltador', '0', '10'),
	(30, 'Geno valgo residual', '0', '10'),
	(31, 'Ruptura cuadricipital', '0', '10'),
	(32, 'Vascular', '1', '11'),
	(33, 'Infecciosa', '0', '11'),
	(34, 'Traumática', '0', '11'),
	(35, 'Metabólica ', '0', '11'),
	(36, 'Degenerativa     ', '0', '11'),
	(37, 'Reemplazo Total     ', '1', '12'),
	(38, 'Hemiartroplastia ', '0', '12'),
	(39, 'Artrodesis ', '0', '12'),
	(40, 'Injerto vascularizado', '0', '12'),
	(41, 'Osteotomía de centraje ', '0', '12'),
	(42, 'Maligno ', '1', '13'),
	(43, 'Benigno activo ', '0', '13'),
	(44, 'Benigno latente', '0', '13'),
	(45, 'Benigno agresivo', '0', '13'),
	(46, 'Maligno de alto grado', '0', '13'),
	(47, 'Radial    ', '1', '14'),
	(48, 'Cubital', '0', '14'),
	(49, 'Mediano', '0', '14'),
	(50, 'Circunflejo', '0', '14'),
	(51, 'Musculocutáneo', '0', '14'),
	(52, 'Cuerpo libre', '1', '15'),
	(53, 'Lesión en asa de balde   ', '0', '15'),
	(54, 'Inestabilidad ligamentaria', '0', '15'),
	(55, 'Contractura de isquiotibiales', '0', '15'),
	(56, 'Ruptura del mecanismo extensor', '0', '15'),
	(57, 'Malignización', '0', '16'),
	(58, 'Osteonecrosis', '0', '16'),
	(59, 'Metástasis óseas', '0', '16'),
	(60, 'Infección secundaria', '1', '16'),
	(61, 'Curación espontánea', '0', '16'),
	(62, 'Supracondílea humeral', '1', '17'),
	(63, 'De tróclea no desplazada', '0', '17'),
	(64, 'De epitróclea', '0', '17'),
	(65, 'De cúpula radial ', '0', '17'),
	(66, 'De cóndilo humeral    ', '0', '17');
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.resultado_evaluacion
DROP TABLE IF EXISTS `resultado_evaluacion`;
CREATE TABLE IF NOT EXISTS `resultado_evaluacion` (
  `resultado_id` int(11) NOT NULL AUTO_INCREMENT,
  `resultado_pregunta` text,
  `resultado_respuesta` text,
  `resultado_fecha` text,
  `resultado_hora` text,
  `usuario_id` text,
  `casoclinico_id` text,
  PRIMARY KEY (`resultado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.resultado_evaluacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `resultado_evaluacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultado_evaluacion` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nombre` text,
  `usuario_apellidos` text,
  `usuario_rfc` text,
  `usuario_registro` text,
  `usuario_user` text,
  `usuario_pass` text,
  `usuario_rol` text,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.usuarios: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellidos`, `usuario_rfc`, `usuario_registro`, `usuario_user`, `usuario_pass`, `usuario_rol`) VALUES
	(1, 'ADMINISTRADOR', 'N/E', 'N/E', 'N/E', 'admin_cmot', '5cc0ce61cc2c2c662c8e516cd0e23b3c', 'Administrador'),
	(6, 'DR GONZALO JESÚS', 'RODRÍGUEZ FLORES', 'ROFG7505314U6', 'CE013297NL04', 'ROFG7505314U6', 'f5142ec9f852c7578aad2ac95ad36986', 'Medico'),
	(7, 'FRANCISCO JAVIER', 'MAGDALENO RAMÍREZ', 'MARF560626 JK9', 'TAB- 1371E', 'MARF560626 JK9', '8a3e037cfd9c7a63e7dc778473611dd0', 'Medico'),
	(8, 'JORGE ALBERTO', 'AYALA SOLIS', 'AASJ801230 NB1', 'CE020562SON11', 'AASJ801230 NB1', '2c33691e5d2979330d38838a3456e687', 'Medico'),
	(9, 'MONICA', 'MARTINEZ SANCHEZ', 'MASM730302 4U1', '14/0059/11', 'MASM730302 4U1', '48302d1a69964c3979e1c92ed6aadad9', 'Medico'),
	(10, 'DIANA', 'TELLEZ VIQUEZ', 'TEVD690618 GZ5', 'RE020010MEX', 'TEVD690618 GZ5', '6629ece5527b95c140d49c93dd694b9e', 'Medico'),
	(11, 'RODOLFO', 'COLMENARES PEREZ', 'COPR790405 JQ8', 'CE020315OAX11', 'COPR790405 JQ8', '26f32166a7af81dca3aa7abd022228a8', 'Medico'),
	(12, 'ALEJO', 'URBIETA MAGAÑA', 'UIMA560118 5WA', 'EME- 1504E', 'UIMA560118 5WA', '11671d42bbecb3bd839bd8701ab8ecae', 'Medico'),
	(13, 'ALFREDO', 'RODRIGUEZ PEREZ', 'ROPA630112 1W5', 'CEOO9772GTO', 'ROPA630112 1W5', 'b1984eb6a39e76f9571d392bda1abe85', 'Medico'),
	(14, 'ALBERTO', 'MARRON MC NAUGHT', 'MAMA780807', 'CE016613PUE07', 'MAMA780807', '10372157698199058ca030659f21655f', 'Medico'),
	(15, 'RAFAEL', 'CASTRO RAMIREZ', 'CARR830309', '14/0193/12', 'CARR830309', 'fc9836fd05b37bb542dec443f5ea1115', 'Medico'),
	(16, 'MILTON ALFONSO', 'LUNA BOZA DIAZ', 'LUDM560626 JC2', 'TAB- 1503E', 'LUDM560626 JC2', '02dbdb6db6e72d26c71687ae826b3539', 'Medico'),
	(17, 'ALVARO JAVIER', 'REDONDO', 'REAL670504 ED2', 'RE006511MICH', 'REAL670504 ED2', 'e8422621e4d5fb971e2ca009fb540594', 'Medico'),
	(18, 'VICTOR MANUEL', 'BARAJAS ORTIZ', 'BAOV 690817 IG4', 'CE0008299DF', 'BAOV 690817 IG4', '409689b5350e261ae691a094354956ce', 'Medico'),
	(19, 'MARAHEM', 'CORTEZ GOMEZ', 'COGM800925 U42', 'CE020487DF11', 'COGM800925 U42', 'aba27a5f179f4fa94cfafd9df66273f6', 'Medico'),
	(20, 'JUAN CARLOS', 'NAVARRO ACEVEDO', 'NAAJ790316176', 'CE018515DF09', 'NAAJ790316176', '1ed3161f132f171643a62f49f213ae4d', 'Medico'),
	(21, 'ROLANDO IVAN', 'MORALES GONZALEZ', 'MOGR680808D59', 'CE0019299JAL', 'MOGR680808D59', '178c5bc30f9b1ec38707477e5e855fdc', 'Medico'),
	(22, 'ALEJANDRO', 'ORDONEZ', 'OOSA771026 8V6', 'CE017710SON08', 'OOSA771026 8V6', '43e940cc820587e519d31d3fcf3a20cd', 'Medico');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
