SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `mapWormholes`
-- -----------------------------------------------------

CREATE TABLE `mapWormholes` (
  `whId` INT UNSIGNED NOT NULL,
  `SysIn` INT UNSIGNED NOT NULL,
  `SysOut` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`whId`),
  UNIQUE INDEX `Consistency` (`SysIn` ASC, `SysOut` ASC),
  INDEX `fk_mapWormholesIn` (`SysIn` ASC),
  INDEX `fk_mapWormholesOut` (`SysOut` ASC),
  CONSTRAINT `fk_mapWormholesIn`
    FOREIGN KEY (`SysIn`)
    REFERENCES `mapUniverse` (`mapId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_mapWormholesOut`
    FOREIGN KEY (`SysOut`)
    REFERENCES `mapUniverse` (`mapId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
