DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `FID` int(11) NOT NULL,
  `FName` varchar(30) DEFAULT NULL,
  `Dept` varchar(5) NOT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`FID`),
  KEY `Gender` (`Gender`),
  KEY `Dept` (`Dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `faculty` (`FID`, `FName`, `Dept`, `Gender`) VALUES
(50215, 'Alex Jones', 'CSE', 'M');
