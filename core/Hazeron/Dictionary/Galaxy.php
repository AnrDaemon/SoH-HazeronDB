<?php
/** Galaxies dictionary
*
* @version $Id: Galaxy.php 47 2016-02-24 01:53:03Z anrdaemon $
*/

namespace AnrDaemon\Hazeron\Dictionary;

final class Galaxy
{
  private static $dict = array(
  0 => array('name' => 'Andromeda Rising', 'shortName' => 'ARi'),
  1 => array('name' => 'Black Hole', 'shortName' => 'BHo'),
  2 => array('name' => 'Core', 'shortName' => 'Cor'),
  3 => array('name' => 'Crown of Othon', 'shortName' => 'CoO'),
  4 => array('name' => 'Dyrathon\'s Retreat', 'shortName' => 'DRe'),
  5 => array('name' => 'Edge of the Rift', 'shortName' => 'EoR'),
  6 => array('name' => 'Falla\'s Embrace', 'shortName' => 'FEm'),
  7 => array('name' => 'Fallen Legions of Muturon', 'shortName' => 'FLM'),
  8 => array('name' => 'Heart of Victorius', 'shortName' => 'HoV'),
  9 => array('name' => 'House Zanathar', 'shortName' => 'HZa'),
  10 => array('name' => 'Indigo Sea', 'shortName' => 'ISe'),
  11 => array('name' => 'In\'kar Border Region', 'shortName' => 'IBR'),
  12 => array('name' => 'Muturon Encounter', 'shortName' => 'MEn'),
  13 => array('name' => 'Ransuul\'s Flaming Sword', 'shortName' => 'RFS'),
  14 => array('name' => 'Seven Ten', 'shortName' => 'STe'),
  15 => array('name' => 'Shores of Hazeron', 'shortName' => 'SoH'),
  16 => array('name' => 'Thustra\'s Eye', 'shortName' => 'TEy'),
  17 => array('name' => 'Veil of Targoss', 'shortName' => 'VoT'),
  18 => array('name' => 'Vreenox Eclipse', 'shortName' => 'VEc'),
  19 => array('name' => 'Vulcan\'s Forge', 'shortName' => 'VFo')
  );

  public static function byName($name)
  {
    if(!strlen($name))
      throw new \InvalidArgumentException('Name must not be empty.');

    foreach(self::$dict as $id => $galaxy)
    {
      if($galaxy['name'] == $name)
        return self::byId($id);
    }

    throw new \OutOfBoundsException('Name unrecognized.');
  }

  public static function byShortName($name)
  {
    if(!strlen($name))
      throw new \InvalidArgumentException('Name must not be empty.');

    foreach(self::$dict as $id => $galaxy)
    {
      if($galaxy['shortName'] == $name)
        return self::byId($id);
    }

    throw new \OutOfBoundsException('Name unrecognized.');
  }

  public static function byId($id)
  {
    if(isset(self::$dict[$id]))
      return new \AnrDaemon\Hazeron\Galaxy($id, self::$dict[$id]['name']);

    throw new \OutOfBoundsException('Name unrecognized.');
  }
}
