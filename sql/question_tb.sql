CREATE TABLE `question_tb` (
  `question_id` int(4) NOT NULL AUTO_INCREMENT,
  `purchase_date` date DEFAULT NULL,
  `purchase_price` int(8) DEFAULT NULL,
  `star` int(1) DEFAULT NULL,
  `lang_php` tinyint(1) DEFAULT NULL,
  `lang_perl` tinyint(1) DEFAULT NULL,
  `lang_java` tinyint(1) DEFAULT NULL,
  `lang_cs` tinyint(1) DEFAULT NULL,
  `lang_cpp` tinyint(1) DEFAULT NULL,
  `lang_basic` tinyint(1) DEFAULT NULL,
  `job` varchar(20) DEFAULT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;