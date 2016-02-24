<?php
/** Starsystem class
*
* $Id: Starsystem.php 43 2016-02-24 01:48:52Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class Starsystem extends Universe
{
  protected static $_readable = '["id","name","coords","parent"]';

  public $registry;

  public function __construct($id, $name, SystemCoordinates $coords)
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

  protected function setCoords(SystemCoordinates $coords)
  {
    if(!isset($coords))
      throw new \InvalidArgumentException('Can\'t register starsystem in the middle of nowhere. Yet.');

    $this->properties['coords'] = $coords;
  }

  protected function setParent(Sector $parent)
  {
    if(!isset($parent))
      throw new \InvalidArgumentException('Can\'t register starsystem in the middle of nowhere. Yet.');

    $this->properties['parent'] = $parent;
  }

  public function __toString()
  {
    return $this->name;
  }
}
