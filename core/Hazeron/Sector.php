<?php
/** Sector class
*
* @version $Id: Sector.php 40 2016-02-23 20:51:37Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class Sector extends Universe
{
  protected static $_readable = '["id","name","coords","parent"]';

  public $registry;

  public function __construct($id, $name, SectorCoordinates $coords)
  {
    parent::__construct();

    $this->id = $id;
    $this->name = $name;
    $this->coords = $coords;
    $this->registry = new Registry('Starsystem');
  }

  protected function setId($id)
  {
    if(!is_integer($id))
      throw new \InvalidArgumentException('Id must be a number. Use conversion functions to pass base26 HazId strings.');

    $this->properties['id'] = $id;
  }

  protected function setName($name)
  {
    if(!strlen($name))
      throw new \InvalidArgumentException('Name must not be empty.');

    $this->properties['name'] = $name;
  }

  protected function setCoords(SectorCoordinates $coords)
  {
    if(!isset($coords))
      throw new \InvalidArgumentException('Can\'t register sector in the middle of nowhere. Yet.');

    $this->properties['coords'] = $coords;
  }

  protected function setParent(Galaxy $parent)
  {
    if(!isset($parent))
      throw new \InvalidArgumentException('Can\'t register sector in the middle of nowhere. Yet.');

    $this->properties['parent'] = $parent;
  }

  public function __toString()
  {
    return $this->name;
  }
}
