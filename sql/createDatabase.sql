CREATE DATABASE eccbank;
USE eccbank;

CREATE TABLE `User` (
  `ID` Integer AUTO_INCREMENT,
  `Username` Varchar(100),
  `Password` Char(60),
  PRIMARY KEY (`ID`)
);


