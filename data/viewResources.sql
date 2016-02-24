SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

-- -----------------------------------------------------
-- View `viewResources`
-- -----------------------------------------------------

DELIMITER $$
CREATE VIEW `viewResources` AS
  SELECT
    g.`mapId` `systemId`, g.`objName` `systemName`,
    s.`objId` `objectId`, g.`objName` `objectName`,
    r.`resZone` `resZone`, r.`quality` `quality`, r.`density` `density`
  FROM `mapResources` r
  LEFT JOIN `mapSystems` s ON r.`objId` = s.`objId`
  LEFT JOIN `mapUniverse` g ON s.`mapId` = g.`mapId`;
$$
DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
