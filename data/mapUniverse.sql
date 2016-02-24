SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `mapUniverse`
-- -----------------------------------------------------

CREATE TABLE `mapUniverse` (
  `mapId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `galaxyId` INT UNSIGNED NOT NULL,
  `objName` VARCHAR(255) NULL DEFAULT NULL
    COMMENT 'The object given name, like "Sol" or "System ZXCVB".',
  `objType` INT UNSIGNED NOT NULL
    COMMENT 'Object type from dctMapTypes dictionary. Can be Galaxy, Sector or System. (May not be "Galaxy", yet, since galaxies can not be reached through normal space. Yet.)',
  `objId` VARCHAR(255) NULL DEFAULT NULL
    COMMENT 'The unique object ID, like ZXCVB (if known).',
  `X` FLOAT NULL DEFAULT NULL,
  `Y` FLOAT NULL DEFAULT NULL,
  `Z` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`mapId`),
  INDEX `fk_galaxyIds` (`galaxyId` ASC),
  UNIQUE INDEX `Consistency` (`galaxyId` ASC, `X` ASC, `Y` ASC, `Z` ASC, `objType` ASC),
  INDEX `fk_mapTypes` (`objType` ASC),
  CONSTRAINT `fk_galaxyIds`
    FOREIGN KEY (`galaxyId`)
    REFERENCES `dctGalaxies` (`galaxyId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_mapTypes`
    FOREIGN KEY (`objType`)
    REFERENCES `dctMapTypes` (`typeId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
