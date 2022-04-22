DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `GID` int(11) NOT NULL,
  `GName` varchar(30) NOT NULL,
  `HostID` int(11) NOT NULL,
  `HostType` varchar(15) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  PRIMARY KEY (`GID`),
  KEY `Gender` (`Gender`),
  KEY `HostID` (`HostID`),
  KEY `HostType` (`HostType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
