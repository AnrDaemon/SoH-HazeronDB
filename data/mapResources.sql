SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `mapResources`
-- -----------------------------------------------------

CREATE TABLE `mapResources` (
  `objId` INT UNSIGNED NOT NULL,
  `resId` INT UNSIGNED NOT NULL,
  `resZone` INT UNSIGNED NOT NULL,
  `quality` INT UNSIGNED NOT NULL,
  `density` INT UNSIGNED NULL DEFAULT NULL,
  INDEX `fk_mapResourcesWhere` (`objId` ASC),
  INDEX `fk_mapResourcesWhich` (`resId` ASC),
  UNIQUE INDEX `Consistency` (`objId` ASC, `resId` ASC, `resZone` ASC),
  CONSTRAINT `fk_mapResourcesWhere`
    FOREIGN KEY (`objId`)
    REFERENCES `mapSystems` (`objId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_mapResourcesWhich`
    FOREIGN KEY (`resId`)
    REFERENCES `dctResources` (`resId`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
