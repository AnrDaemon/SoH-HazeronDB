SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- Table `dctGalaxies`
-- -----------------------------------------------------

CREATE TABLE `dctGalaxies` (
  `galaxyId` INT UNSIGNED NOT NULL,
  `galaxyName` VARCHAR(255) NOT NULL,
  `galaxyShortName` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`galaxyId`),
  UNIQUE INDEX `galaxyName` (`galaxyName` ASC)
) ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Data for table `dctGalaxies`
-- -----------------------------------------------------

INSERT INTO `dctGalaxies` (`galaxyId`, `galaxyName`, `galaxyShortName`) VALUES
  (0, 'Andromeda Rising', 'ARi'),
  (1, 'Black Hole', 'BHo'),
  (2, 'Core', 'Cor'),
  (3, 'Crown of Othon', 'CoO'),
  (4, 'Dyrathon\'s Retreat', 'DRe'),
  (5, 'Edge of the Rift', 'EoR'),
  (6, 'Falla\'s Embrace', 'FEm'),
  (7, 'Fallen Legions of Muturon', 'FLM'),
  (8, 'Heart of Victorius', 'HoV'),
  (9, 'House Zanathar', 'HZa'),
  (10, 'Indigo Sea', 'ISe'),
  (11, 'In\'kar Border Region', 'IBR'),
  (12, 'Muturon Encounter', 'MEn'),
  (13, 'Ransuul\'s Flaming Sword', 'RFS'),
  (14, 'Seven Ten', 'STe'),
  (15, 'Shores of Hazeron', 'SoH'),
  (16, 'Thustra\'s Eye', 'TEy'),
  (17, 'Veil of Targoss', 'VoT'),
  (18, 'Vreenox Eclipse', 'VEc'),
  (19, 'Vulcan\'s Forge', 'VFo');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
