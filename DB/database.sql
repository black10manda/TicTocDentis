-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.34-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla tictocdentis.answer_history
CREATE TABLE IF NOT EXISTS `answer_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `question_history_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_answer_history_patient` (`patient_id`),
  KEY `FK_answer_history_question_history` (`question_history_id`),
  CONSTRAINT `FK_answer_history_patient` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  CONSTRAINT `FK_answer_history_question_history` FOREIGN KEY (`question_history_id`) REFERENCES `question_history` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tictocdentis.answer_history: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `answer_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer_history` ENABLE KEYS */;

-- Volcando estructura para tabla tictocdentis.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(199) NOT NULL,
  `email` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phone` char(15) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `brith_date` date NOT NULL,
  `home` varchar(50) NOT NULL,
  `cellphone` char(50) NOT NULL,
  `sex` enum('Masculino','Femenino') NOT NULL DEFAULT 'Masculino',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tictocdentis.patient: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;

-- Volcando estructura para tabla tictocdentis.question_history
CREATE TABLE IF NOT EXISTS `question_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tictocdentis.question_history: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `question_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_history` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
