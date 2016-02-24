SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `mapSystems`
-- -----------------------------------------------------

CREATE TABLE `mapSystems` (
  `objId` INT UNSIGNED NOT NULL,
  `objType` INT UNSIGNED NOT NULL,
  `mapId` INT UNSIGNED NOT NULL,
  `parentObj` INT UNSIGNED NULL,
  `orbitId` INT UNSIGNED NOT NULL
    COMMENT 'Numeric orbit ID for sorting purposes.',
  `orbitName` VARCHAR(255) NOT NULL
    COMMENT 'Orbit name, like "Beta IIa".',
  PRIMARY KEY (`objId`),
  INDEX `fk_mapSystemsToGalaxy` (`mapId` ASC),
  INDEX `fk_mapSystemsTypes` (`objType` ASC),
  INDEX `fk_parentOrbit` (`parentObj` ASC),
  CONSTRAINT `fk_mapSystemsToGalaxy`
    FOREIGN KEY (`mapId`)
    REFERENCES `mapUniverse` (`mapId`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_mapSystemsTypes`
    FOREIGN KEY (`objType`)
    REFERENCES `dctMapTypes` (`typeId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_parentOrbit`
    FOREIGN KEY (`parentObj`)
    REFERENCES `mapSystems` (`objId`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
