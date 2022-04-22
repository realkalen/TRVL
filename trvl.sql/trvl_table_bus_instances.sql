DROP TABLE IF EXISTS `bus_instances`;
CREATE TABLE IF NOT EXISTS `bus_instances` (
  `BID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `Seats_Left` int(11) NOT NULL,
  `BusDate` date DEFAULT NULL,
  `DepTime` time DEFAULT NULL,
  PRIMARY KEY (`BID`),
  KEY `RID` (`RID`),
  KEY `Capacity` (`Seats_Left`),
  KEY `DepTime` (`DepTime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `bus_instances` (`BID`, `RID`, `Seats_Left`, `BusDate`, `DepTime`) VALUES
(30, 11540, 50, '2018-11-27', '15:40:00'),
(31, 21615, 50, '2018-11-27', '16:15:00'),
(32, 21655, 50, '2018-11-27', '16:55:00'),
(33, 11720, 50, '2018-11-27', '17:20:00'),
(34, 11750, 50, '2018-11-27', '17:50:00'),
(35, 21830, 50, '2018-11-27', '18:30:00'),
(36, 11940, 50, '2018-11-27', '19:40:00'),
(37, 22020, 49, '2018-11-27', '20:20:00'),
(38, 12100, 50, '2018-11-27', '21:00:00'),
(39, 22140, 50, '2018-11-27', '21:40:00'),
(40, 11540, 50, '2018-11-28', '15:40:00'),
(41, 21615, 50, '2018-11-28', '16:15:00'),
(42, 21655, 50, '2018-11-28', '16:55:00'),
(43, 11720, 50, '2018-11-28', '17:20:00'),
(44, 11750, 50, '2018-11-28', '17:50:00'),
(45, 21830, 50, '2018-11-28', '18:30:00'),
(46, 11940, 50, '2018-11-28', '19:40:00'),
(47, 22020, 50, '2018-11-28', '20:20:00'),
(48, 12100, 50, '2018-11-28', '21:00:00'),
(49, 22140, 50, '2018-11-28', '21:40:00');