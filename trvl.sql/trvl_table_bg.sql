DROP TABLE IF EXISTS `bg`;
CREATE TABLE IF NOT EXISTS `bg` (
  `Gender` varchar(5) NOT NULL,
  PRIMARY KEY (`Gender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `bg` (`Gender`) VALUES
('M'),
('F'),
('R'),

