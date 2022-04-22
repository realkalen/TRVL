ALTER TABLE `bus_instances`
  ADD CONSTRAINT `bus_instances_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `bus_instances_ibfk_3` FOREIGN KEY (`DepTime`) REFERENCES `routes` (`STime`);

ALTER TABLE `seat_matrix`
  ADD CONSTRAINT `seat_matrix_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `routes` (`RID`),
  ADD CONSTRAINT `seat_matrix_ibfk_2` FOREIGN KEY (`Passenger`) REFERENCES `passenger` (`ID`);
