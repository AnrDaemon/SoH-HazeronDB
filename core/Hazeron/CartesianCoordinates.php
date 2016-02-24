<?php
/** Base GPS coordinates class
*
* @version $Id: CartesianCoordinates.php 45 2016-02-24 01:50:28Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class CartesianCoordinates
{

  protected $gps = array(
    'x' => 0,
    'y' => 0,
    'z' => 0,
  );

  protected $precision = 2;

  protected function __construct($x, $y, $z, $precision = 2)
  {
    $this->gps['x'] = (float)$x;
    $this->gps['y'] = (float)$y;
    $this->gps['z'] = (float)$z;
    $this->precision = $precision;
  }

  public static function fromGPS($x, $y, $z)
  {
    if(!is_numeric($x) || !is_numeric($y) || !is_numeric($z) || !is_numeric($precision))
      throw new \InvalidArgumentException('All arguments must be numeric.');

    return new static($x, $y, $z);
  }

  public function distance(CartesianCoordinates $target)
  {
    $_x = $this->gps['x'] - $target->gps['x'];
    $_y = $this->gps['y'] - $target->gps['y'];
    $_z = $this->gps['z'] - $target->gps['z'];
    return sqrt($_x*$_x + $_y*$_y + $_z*$_z);
  }

  public function format($format = null)
  {
    return sprintf('%s, %s, %s',
      number_format($this->gps['x'], $this->precision, '.', "'"),
      number_format($this->gps['y'], $this->precision, '.', "'"),
      number_format($this->gps['z'], $this->precision, '.', "'")
      );
  }

  final public function __get($name)
  {
    if(isset($this->gps[$name]))
      return $this->gps[$name];

    throw new \LogicException('No such property or property is not readable.');
  }

  final public function __toString()
  {
    return $this->format();
  }
}
