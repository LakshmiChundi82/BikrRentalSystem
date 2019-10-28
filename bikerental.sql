

CREATE TABLE IF NOT EXISTS `Reservation` (
  `ID Bike` int(10) unsigned NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `RentSTART` date NOT NULL,
  `STARTTime` time NOT NULL,
  `RentEND` date NOT NULL,
  `ENDTime` time NOT NULL,
  `Coments` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `Users`(
`ID Bike` int(10) unsigned NOT NULL,
`UserName` varchar(50) NOT NULL,
`Email` varchar(50) NOT NULL,
`Password ` varchar(50) NOT NULL) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `contactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

