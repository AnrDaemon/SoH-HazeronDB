SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- View `viewOwnership`
-- -----------------------------------------------------

DELIMITER $$
CREATE VIEW `viewOwnership` AS
  SELECT
    e.`empireId` `empireId`, e.`empireName` `empireName`,
    u.`mapId` `systemId`, u.`objName` `systemName`,
    u.`galaxyId` `galaxyId`, g.`galaxyName` `galaxyName`
  FROM `dctEmpires` e
  LEFT JOIN `lnkOwned` l ON e.`empireId` = l.`empireId`
  LEFT JOIN `mapUniverse` u ON u.`mapId` = l.`mapId`
  LEFT JOIN `dctGalaxies` g ON u.`galaxyId` = g.`galaxyId`;
$$
DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
