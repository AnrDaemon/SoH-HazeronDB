<?php
/** Galaxy class
*
* @version $Id: Galaxy.php 46 2016-02-24 01:50:48Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class Galaxy extends Universe
{
  protected static $_readable = '["id","name"]';

  public $registry;

  public function __construct($id, $name)
  {
    parent::__construct();

    $this->id = $id;
    $this->name = $name;
    $this->registry = new Registry('Sector');
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

  public function __toString()
  {
    return $this->name;
  }
}
