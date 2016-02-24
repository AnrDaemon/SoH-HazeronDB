SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `dctMapTypes`
-- -----------------------------------------------------

CREATE TABLE `dctMapTypes` (
  `typeId` INT UNSIGNED NOT NULL,
  `typeName` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`typeId`),
  UNIQUE INDEX `typeName` (`typeName` ASC)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Data for table `dctMapTypes`
-- -----------------------------------------------------

INSERT INTO `dctMapTypes` (`typeId`, `typeName`) VALUES
   (0, 'Universe'),  (1, 'Galaxy'),      (2, 'Sector'),
   (3, 'System'),    (4, 'Star (Main)'), (5, 'Star (Companion)'),
   (6, 'Gas Giant'), (7, 'Planet'),      (8, 'Large Moon'),
   (9, 'Moon'),     (10, 'Ring'),       (11, 'Ringworld'),
  (12, 'Blackhole');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
