DROP TABLE IF EXISTS `p_type`;
CREATE TABLE IF NOT EXISTS `p_type` (
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `p_type` (`type`) VALUES
('Faculty'),
('Guest'),
('Staff'),
('Student');
