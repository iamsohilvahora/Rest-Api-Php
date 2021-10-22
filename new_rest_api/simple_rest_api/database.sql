CREATE TABLE IF NOT EXISTS `transactions` (
`id` int(20) NOT NULL AUTO_INCREMENT,
`order_id` int(50) NOT NULL,
`amount` decimal(9,2) NOT NULL,
`response_code` int(10) NOT NULL,
`response_desc` varchar(50) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;