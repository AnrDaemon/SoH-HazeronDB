<?php
/** Sector coordinates class
*
* @version $Id: SectorCoordinates.php 50 2016-02-24 11:16:33Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class SectorCoordinates extends CartesianCoordinates
  implements Contracts\Translatable
{
  public static function fromGPS($x, $y, $z)
  {
    if(!is_numeric($x) || !is_numeric($y) || !is_numeric($z))
      throw new \InvalidArgumentException('All arguments must be numeric.');

    switch(Tools::compat())
    {
      case 'U3':
        return new static(floor($x / 10) * 10 + 5, floor($y / 10) * 10 + 5, floor($z / 10) * 10 + 5, 0);
      case 'U5':
      default:
        return new static(round($x, -1), round($y, -1), round($z, -1), 0);
    }
  }

  public static function fromMap($x, $y, $z)
  {
    if(!is_numeric($x) || !is_numeric($y) || !is_numeric($z))
      throw new \InvalidArgumentException('All arguments must be numeric.');

    switch(Tools::compat())
    {
      case 'U3':
        return new static((int)$x * 10 + 5, (int)$y * 10 + 5, (int)$z * 10 + 5, 0);
      case 'U5':
      default:
        return new static((int)$x * 10, (int)$y * 10, (int)$z * 10, 0);
    }
  }

  public function translate()
  {
    switch(Tools::compat())
    {
      case 'U3':
        return new parent(floor($this->x / 10), floor($this->y / 10), floor($this->z / 10), 0);
      case 'U5':
      default:
        return new parent(round($this->x / 10), round($this->y / 10), round($this->z / 10), 0);
    }
  }
}
