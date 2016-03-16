CREATE TABLE `user_tb` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `mailaddress` text,
  `user_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;