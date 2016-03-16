CREATE TABLE `message_tb` (
  `message_id` int(8) NOT NULL AUTO_INCREMENT,
  `message_title` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `message` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;