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
INSERT INTO `cmot_sessions` (`session_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES
	(73, '03b28fad65eeb7cfd28fb96ad1aeae85967b678f', '::1', 1477369934, '__ci_last_regenerate|i:1477369934;CMOT_USER|s:1:"1";'),
	(69, '05dafeccc01249f880581aea8c1044e5d5230225', '::1', 1477368851, '__ci_last_regenerate|i:1477368574;CMOT_USER|s:1:"1";'),
	(75, '073123e4bc768a9e6fe796b4262925289153ad9a', '::1', 1477369935, '__ci_last_regenerate|i:1477369935;CMOT_USER|s:1:"1";'),
	(63, '0ad1ea88196a0510b7cff40817781a03a41b33a1', '::1', 1477364840, '__ci_last_regenerate|i:1477364840;'),
	(83, '0f8022a86ffcbc8465fefecf45a11d82db138ffb', '::1', 1477372860, '__ci_last_regenerate|i:1477372670;CMOT_USER|s:1:"4";'),
	(37, '12b238a48cc992342bc3bdaff6f5b54d1c822234', '::1', 1477356540, '__ci_last_regenerate|i:1477356286;'),
	(41, '1338bdcdc125aa18990e3bee744613a332e64b1f', '::1', 1477356648, '__ci_last_regenerate|i:1477356648;'),
	(53, '13fe529014f58d5d37176d94ce72c8b06da82c60', '::1', 1477359702, '__ci_last_regenerate|i:1477359417;CMOT_USER|s:1:"4";'),
	(78, '143388b3db9d2ccd7e8f72675f421373230fbb03', '::1', 1477370946, '__ci_last_regenerate|i:1477370728;CMOT_USER|s:1:"1";'),
	(65, '1997d7dd12ee9c87dac67e4c4ab10341d0476fd5', '::1', 1477366477, '__ci_last_regenerate|i:1477366447;'),
	(34, '1bea5f2efa2fd28159cc7d6e921b05c4451dca3b', '::1', 1477355951, '__ci_last_regenerate|i:1477355838;'),
	(81, '1eb178a155f5991c48e0e3444affb39ecfb8cd95', '::1', 1477372479, '__ci_last_regenerate|i:1477372271;CMOT_USER|s:1:"1";'),
	(70, '378448158d09b7a1f890e61364e4fc0f7cf36bdc', '::1', 1477369207, '__ci_last_regenerate|i:1477368965;CMOT_USER|s:1:"1";'),
	(80, '38fd710ceb1626c7402b6de32b9f1e44335d7a97', '::1', 1477371426, '__ci_last_regenerate|i:1477371371;CMOT_USER|s:1:"1";'),
	(64, '39a08747cd65ce90651bcd35fcb8dd52f8aec3fc', '::1', 1477367451, '__ci_last_regenerate|i:1477366411;CMOT_USER|s:1:"1";'),
	(49, '3e9a3f0e9bdab6b90f1a4f20be084b8e9b7c941e', '::1', 1477359031, '__ci_last_regenerate|i:1477358739;CMOT_USER|s:1:"1";'),
	(62, '4065201acc1e04651d6f17f8ec40c969ea0f48ea', '::1', 1477361778, '__ci_last_regenerate|i:1477361549;CMOT_USER|s:1:"4";'),
	(85, '42e207d4c385f23c85b2ad960c3da0b78a54491e', '::1', 1477373270, '__ci_last_regenerate|i:1477373270;'),
	(42, '4bde0e7dbf931b32b7e6ecd48c3efdf655635a55', '189.211.211.120', 1477356885, '__ci_last_regenerate|i:1477356791;'),
	(48, '4c24b1a03664e729eed8c37a472fc9a8410ef4e7', '::1', 1477358333, '__ci_last_regenerate|i:1477358151;'),
	(76, '5284ef8bc8606a5cbc6160e372da22d0e0c6c1e1', '::1', 1477370205, '__ci_last_regenerate|i:1477369935;CMOT_USER|s:1:"1";'),
	(61, '54360eef4e12428a867a97c781d434185a50b6c5', '::1', 1477361521, '__ci_last_regenerate|i:1477361444;'),
	(59, '597684f8275905fb43466838140875a3ed15ab67', '::1', 1477361080, '__ci_last_regenerate|i:1477360815;'),
	(77, '6504c34278e209fabbdd5cfe003248ebb75b75e6', '::1', 1477370584, '__ci_last_regenerate|i:1477370304;CMOT_USER|s:1:"1";'),
	(82, '68ef535bad440c3ef61a959044c7eb5f8658adf5', '::1', 1477372654, '__ci_last_regenerate|i:1477372360;CMOT_USER|s:1:"4";'),
	(68, '6c595e2d7a9ad692c7179cc768a898a0c19fc939', '::1', 1477368374, '__ci_last_regenerate|i:1477368166;CMOT_USER|s:1:"1";'),
	(71, '6d49b638db31cc211a3384e6fd71fbc97c3e59cd', '::1', 1477369537, '__ci_last_regenerate|i:1477369284;CMOT_USER|s:1:"1";'),
	(29, '7859cbbede97ded766a0e44bf8c0b0bce0c7443c', '189.211.211.120', 1477355059, '__ci_last_regenerate|i:1477355059;'),
	(47, '8ae93b12c0df9803ec5dd29f014fe185cea5f348', '::1', 1477358073, '__ci_last_regenerate|i:1477357787;'),
	(54, '8b0e8ed529ab14df2e094d80fcc03e536d4eef6c', '::1', 1477359806, '__ci_last_regenerate|i:1477359806;'),
	(40, '8e5ee0ea533637507efb93bf1bc763f645d3a970', '189.211.211.120', 1477356932, '__ci_last_regenerate|i:1477356639;'),
	(79, '8f7c7c79af438e1b150e1d2b75e889d6bf065fa1', '::1', 1477371347, '__ci_last_regenerate|i:1477371052;CMOT_USER|s:1:"1";'),
	(67, '900796da01be7e8164f5f8f8f4ca1a597ffd7de1', '::1', 1477368166, '__ci_last_regenerate|i:1477368165;CMOT_USER|s:1:"1";'),
	(35, '948b31fa01b1a6ec48548ddaecad396045888b01', '189.211.211.120', 1477356214, '__ci_last_regenerate|i:1477355917;'),
	(60, '9814eec9ec4b2a43dbe4c827b17e74e4b66bf2b8', '::1', 1477361389, '__ci_last_regenerate|i:1477361121;'),
	(72, '9923610420c5217e2fd25ff1c1ddebf34b8ad999', '::1', 1477369915, '__ci_last_regenerate|i:1477369616;CMOT_USER|s:1:"1";'),
	(31, 'b68ccaf0cfcecf15295686049349011f532a6023', '189.211.211.120', 1477355283, '__ci_last_regenerate|i:1477355250;'),
	(56, 'ba60a9b681ee4f54f00c147ed6cf1a97944580a7', '::1', 1477360545, '__ci_last_regenerate|i:1477360362;CMOT_USER|s:1:"4";'),
	(38, 'bfc316008c3efc380471330bfecf5deae36c262d', '189.211.211.120', 1477356566, '__ci_last_regenerate|i:1477356524;'),
	(44, 'd1fae9b253d0f7816591c909802cab00be87edc2', '189.211.211.120', 1477357100, '__ci_last_regenerate|i:1477356963;'),
	(55, 'd52876fbd7d8d106e7e6fc92da73f71ec54dd8c6', '::1', 1477360094, '__ci_last_regenerate|i:1477359878;CMOT_USER|s:1:"4";'),
	(57, 'd874a5f3e18b5d4514e58550313e2e9da0264d28', '187.171.96.125', 1477360689, '__ci_last_regenerate|i:1477360679;'),
	(36, 'db90024cbcb6b2e2f01d3886b944909abb49f381', '189.211.211.120', 1477356522, '__ci_last_regenerate|i:1477356223;'),
	(33, 'dd82cb8cb23fb4d925f7356f046265b9d510f871', '189.211.211.120', 1477355917, '__ci_last_regenerate|i:1477355609;'),
	(32, 'df49aef59153ec9fb5b93a71f67f6dfc1258d9af', '189.211.211.120', 1477355600, '__ci_last_regenerate|i:1477355307;'),
	(46, 'e7e1cca9343c343c2cce9f2d78d0228e95a6d52d', '::1', 1477357345, '__ci_last_regenerate|i:1477357314;'),
	(58, 'ec1f8077b5a3a10dfbdc7e848a291ec11549790a', '::1', 1477360791, '__ci_last_regenerate|i:1477360785;CMOT_USER|s:1:"4";'),
	(27, 'ec69aa635463fae5c8d96ec0388acbda12c6af08', '189.211.211.120', 1477354885, '__ci_last_regenerate|i:1477354574;'),
	(66, 'f4383b0d545ef5144227ce6e58606d2a97f8ffe9', '::1', 1477368164, '__ci_last_regenerate|i:1477367452;CMOT_USER|s:1:"1";'),
	(74, 'f6c6faa0322f6455d2d7ee8d86552f209aac9d7b', '::1', 1477369935, '__ci_last_regenerate|i:1477369934;CMOT_USER|s:1:"1";'),
	(28, 'f78fa66f72b1fbf1508d03c7a75002305e0720b5', '189.211.211.120', 1477354954, '__ci_last_regenerate|i:1477354886;'),
	(45, 'f867de8e9ca904dc969751532b017938e97d82d1', '::1', 1477357228, '__ci_last_regenerate|i:1477356994;'),
	(26, 'fd88f33336a0c500231f3a280ab36339f4ccf212', '189.211.211.120', 1477354572, '__ci_last_regenerate|i:1477354273;'),
	(52, 'fdedd04d35a8cbe331d9a6105c32805c3324c4aa', '::1', 1477359144, '__ci_last_regenerate|i:1477359113;'),
	(51, 'ff86b22f84a607fd2a4bba259fd3062e6f43de9c', '::1', 1477359285, '__ci_last_regenerate|i:1477359107;CMOT_USER|s:1:"4";');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
