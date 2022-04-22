DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `EID` int(11) NOT NULL,
  `EName` varchar(30) DEFAULT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`EID`),
  KEY `Gender` (`Gender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `staff` (`EID`, `EName`, `Gender`) VALUES
(1021, 'John Doe', 'M');
