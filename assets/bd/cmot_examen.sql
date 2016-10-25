-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         6.0.0-alpha-community-nt-debug - MySQL Community Server (GPL)
-- SO del servidor:              Win32
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.casosclinicos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `casosclinicos` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.casos_clinicos_img: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `casos_clinicos_img` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.cmot_sessions: ~55 rows (aproximadamente)
/*!40000 ALTER TABLE `cmot_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cmot_sessions` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.preguntas
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `pregunta_id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_nombre` text NOT NULL,
  `casoclinico_id` text NOT NULL,
  PRIMARY KEY (`pregunta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.preguntas: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;


-- Volcando estructura para tabla bientics_cmot_examen.respuestas
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `respuesta_id` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta_nombre` text,
  `respuesta_valor` text,
  `pregunta_id` text,
  PRIMARY KEY (`respuesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.respuestas: ~59 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bientics_cmot_examen.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellidos`, `usuario_rfc`, `usuario_registro`, `usuario_user`, `usuario_pass`, `usuario_rol`) VALUES
	(1, 'ADMINISTRADOR', 'N/E', 'N/E', 'N/E', 'admin_cmot', '5cc0ce61cc2c2c662c8e516cd0e23b3c', 'Administrador');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
