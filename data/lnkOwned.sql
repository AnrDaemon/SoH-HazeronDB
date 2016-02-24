SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `lnkOwned`
-- -----------------------------------------------------

CREATE TABLE `lnkOwned` (
  `empireId` INT UNSIGNED NOT NULL,
  `mapId` INT UNSIGNED NOT NULL,
  INDEX `iD_Empire` (`empireId` ASC),
  INDEX `iD_System` (`mapId` ASC),
  UNIQUE INDEX `Consistency` (`empireId` ASC, `mapId` ASC),
  CONSTRAINT `fk_lnkOwnedBy`
    FOREIGN KEY (`empireId`)
    REFERENCES `dctEmpires` (`empireId`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_lnkOwnedWhat`
    FOREIGN KEY (`mapId`)
    REFERENCES `mapUniverse` (`mapId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
