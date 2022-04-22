DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `RollNo` int(11) NOT NULL,
  `SName` varchar(30) DEFAULT NULL,
  `Batch` year(4) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`RollNo`),
  KEY `Branch` (`Branch`),
  KEY `Gender` (`Gender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `student` (`RollNo`, `SName`, `Batch`, `Branch`, `Gender`) VALUES
(2017324, 'Kaushal Sharma', 2018, 'CSE', 'M'),
(2017333, 'Ajwad Shaikh', 2017, 'CSE', 'F');
