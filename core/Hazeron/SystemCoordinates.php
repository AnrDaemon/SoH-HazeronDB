<?php
/** System coordinates class
*
* @version $Id: SystemCoordinates.php 50 2016-02-24 11:16:33Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class SystemCoordinates extends CartesianCoordinates
  implements Contracts\Translatable
{
  public static function fromGPS($x, $y, $z)
  {
    if(!is_numeric($x) || !is_numeric($y) || !is_numeric($z))
      throw new \InvalidArgumentException('All arguments must be numeric.');

    return new static($x, $y, $z, 3);
  }

  public static function fromMap($x, $y, $z, SectorCoordinates $sector)
  {
    if(!is_numeric($x) || !is_numeric($y) || !is_numeric($z))
      throw new \InvalidArgumentException('Coordinate arguments must be numeric.');

    if(!isset($sector))
      throw new \InvalidArgumentException('Needs a contaning sector to base coordinates from.');

    if(abs($x) > 5 || abs($y) > 5 || abs($z) > 5)
      throw new \OutOfBoundsException('Provided coordinates are out of sector boundaries.');

    return new static($sector->x + $x, $sector->y + $y, $sector->z + $z, 3);
  }

  public function translate()
  {
    $sector = SectorCoordinates::fromGPS($this->x, $this->y, $this->z);
    return new parent($this->x - $sector->x, $this->y - $sector->y, $this->z - $sector->z, 1);
  }
}
