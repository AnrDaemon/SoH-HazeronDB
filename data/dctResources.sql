SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `dctResources`
-- -----------------------------------------------------

CREATE TABLE `dctResources` (
  `resId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `resName` VARCHAR(255) NOT NULL
    COMMENT 'Resource name as planetary resource. I.e. "Vegetation Density".',
  `minQuality` INT UNSIGNED NOT NULL DEFAULT 0,
  `itemName` VARCHAR(255) NULL
    COMMENT 'Resource name as harvested item. I.e. "Hay".',
  PRIMARY KEY (`resId`),
  UNIQUE INDEX `Name` USING HASH (`resName` ASC)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
