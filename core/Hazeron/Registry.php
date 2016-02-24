<?php
/** Object repository with type control
*
* @version $Id: Registry.php 40 2016-02-23 20:51:37Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

class Registry implements
  \ArrayAccess,
  \Countable,
  \Iterator,
  \Serializable
{
  protected $container = array();
  protected $position = 0;
  protected $type;

  public function __construct($typehint)
  {
    if(!class_exists(__NAMESPACE__ . "\\{$typehint}"))
      throw new \InvalidArgumentException('Registry restricted to local classes.');

    $this->type = __NAMESPACE__ . "\\{$typehint}";
  }

  public function byName($name)
  {
    if(!strlen($name))
      throw new \InvalidArgumentException('Name must not be empty.');

    foreach($this as $item)
      if($item->name == $name)
        return $item;

    return null;
  }

// ArrayAccess

  public function offsetSet($offset, $value)
  {
    if(is_null($offset))
    {
      if($value instanceof $this->type)
        $this->container[$value->id] = $value;
      else
        throw new \InvalidArgumentException('Object type doesn\'t match registry restrictions.');
    }
    else
      throw new \BadMethodCallException('You\'re not supposed to alter existing objects.');
  }

  public function offsetExists($offset)
  {
    return isset($this->container[$offset]);
  }

  public function offsetUnset($offset)
  {
    unset($this->container[$offset]);
  }

  public function offsetGet($offset)
  {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

// Countable

  public function count()
  {
    return count($this->container);
  }

// Iterator

  public function current()
  {
    return $this->valid() ? current($this->container) : null;
  }

  public function key()
  {
    return $this->valid() ? key($this->container) : null;
  }

  public function next()
  {
    if($this->valid())
    {
      $this->position++;
      return next($this->container);
    }
    return null;
  }

  public function rewind()
  {
    $this->position = 0;
    return reset($this->container);
  }

  public function valid()
  {
    return $this->position < sizeof($this->container);
  }

// Serializable
  public function serialize()
  {
    return serialize(array('data' => $this->container, 'type' => $this->type));
  }

  public function unserialize($data)
  {
    $_tmp = unserialize($data);
    $this->type = $_tmp['type'];
    $this->container = $_tmp['data'];
  }
}
