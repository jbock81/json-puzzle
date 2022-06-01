-- phpMiniAdmin dump 1.9.150917
-- Datetime: 2020-08-10 12:23:48
-- Host: db5000733627.hosting-data.io
-- Database: dbs669456

/*!40030 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

DROP TABLE IF EXISTS `answer_puzzle`;
CREATE TABLE `answer_puzzle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `answer_puzzle` DISABLE KEYS */;
INSERT INTO `answer_puzzle` VALUES ('1','1','1','2'),('2','1','1','two'),('3','1','2','9'),('4','1','2','nine'),('5','1','3','49'),('6','1','3','forty nine'),('7','2','4','Meena'),('8','2','5','6'),('9','2','5','six'),('10','2','6','N');
/*!40000 ALTER TABLE `answer_puzzle` ENABLE KEYS */;

DROP TABLE IF EXISTS `master_puzzle`;
CREATE TABLE `master_puzzle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `master_puzzle` DISABLE KEYS */;
INSERT INTO `master_puzzle` VALUES ('1','puzzle 1'),('2','puzzle 2'),('3','puzzle 3'),('4','puzzle 4'),('5','puzzle 5'),('6','puzzle 6');
/*!40000 ALTER TABLE `master_puzzle` ENABLE KEYS */;

DROP TABLE IF EXISTS `question_puzzle`;
CREATE TABLE `question_puzzle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `html_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `question_puzzle` DISABLE KEYS */;
INSERT INTO `question_puzzle` VALUES ('1','1','q1.php'),('2','1','q2.php'),('3','1','q3.php'),('4','2','q4.php'),('5','2','q5.php'),('6','2','q6.php');
/*!40000 ALTER TABLE `question_puzzle` ENABLE KEYS */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;


-- phpMiniAdmin dump end
