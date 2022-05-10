

SET FOREIGN_KEY_CHECKS=0
;
/* Drop Tables */

DROP TABLE IF EXISTS `Clients` CASCADE
;

DROP TABLE IF EXISTS `Clips` CASCADE
;

DROP TABLE IF EXISTS `Lanyards` CASCADE
;

DROP TABLE IF EXISTS `OtherAccesories` CASCADE
;

DROP TABLE IF EXISTS `Sides` CASCADE
;

/*  Tables */

CREATE TABLE `Clients`
(
	`idClient` VARCHAR(50) NOT NULL,
	`Name` VARCHAR(50) NULL,
	`Phone` VARCHAR(50) NULL,
	`Email` VARCHAR(50) NULL,
	`Password` VARCHAR(50) NULL,
	CONSTRAINT `PK_Clients` PRIMARY KEY (`idClient` ASC)
)
;

CREATE TABLE `Clips`
(
	`idAccessories` INT NOT NULL AUTO_INCREMENT,
	`Name` VARCHAR(50) NULL,
	`Size` VARCHAR(50) NULL,
	`Price` FLOAT(0,0) NULL,
	`Img` VARCHAR(50) NULL,
	`Number` INT NULL,
	`idLanyard` INT NULL,
	CONSTRAINT `PK_Clips` PRIMARY KEY (`idAccessories` ASC)
)

;

CREATE TABLE `Lanyards`
(
	`idLanyard` INT NOT NULL AUTO_INCREMENT,
	`Material` VARCHAR(50) NULL,
	`With` VARCHAR(50) NULL,
	`Ammount` VARCHAR(50) NULL,
	`Printed` VARCHAR(50) NULL,
	`Side1` VARCHAR(50) NULL,
	`Side2` VARCHAR(50) NULL,
	`isStandar` VARCHAR(50) NULL,
	`imgExample` VARCHAR(300) NULL,
	`idClient` VARCHAR(50) NULL,
	CONSTRAINT `PK_Lanyards` PRIMARY KEY (`idLanyard` ASC)
)

;

CREATE TABLE `Other Accesories`
(
	`idAccessories` INT NOT NULL AUTO_INCREMENT,
	`Name` VARCHAR(50) NULL,
	`Type` VARCHAR(50) NULL,
	`Price` FLOAT(0,0) NULL,
	`Img` VARCHAR(50) NULL,
	CONSTRAINT `PK_Other Accesories` PRIMARY KEY (`idAccessories` ASC)
)

;

CREATE TABLE `Sides`
(
	`idLanyard` INT NOT NULL,
	`Side` VARCHAR(50) NOT NULL,
	`Color` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_Sides` PRIMARY KEY (`idLanyard` ASC)
)

;

/*  Primary Keys */

ALTER TABLE `Clips`
 ADD INDEX `IXFK_Clips_Lanyards` (`idLanyard` ASC)
;

ALTER TABLE `Lanyards`
 ADD INDEX `IXFK_Lanyards_Clients` (`idClient` ASC)
;

ALTER TABLE `Other Accesories`
 ADD INDEX `IXFK_Other Accesories_Lanyards` (`idAccessories` ASC)
;

ALTER TABLE `Sides`
 ADD INDEX `IXFK_Sides_Lanyards` (`idLanyard` ASC)
;

/*  Foreign Key Constraints */

ALTER TABLE `Clips`
 ADD CONSTRAINT `FK_Clips_Lanyards`
	FOREIGN KEY (`idLanyard`) REFERENCES `Lanyards` (`idLanyard`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards`
 ADD CONSTRAINT `FK_Lanyards_Clients`
	FOREIGN KEY (`idClient`) REFERENCES `Clients` (`idClient`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Other Accesories`
 ADD CONSTRAINT `FK_Other Accesories_Lanyards`
	FOREIGN KEY (`idAccessories`) REFERENCES `Lanyards` (`idLanyard`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Sides`
 ADD CONSTRAINT `FK_Sides_Lanyards`
	FOREIGN KEY (`idLanyard`) REFERENCES `Lanyards` (`idLanyard`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1
;
