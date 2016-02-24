<?php
/** Universe (abstract) class
*
* @version $Id: Universe.php 44 2016-02-24 01:49:48Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

abstract class Universe
{
  protected static $_readable = '["id"]';

  protected static $_writable;

  protected static $_callable;

  protected $properties = array();

  public function __construct()
  {
    // Init property names
    $this->_decodeNames();
  }

  /*

  From the PHP documentation:

    Note:

    PHP implements a superset of JSON - it will also encode and decode scalar
    types and NULL. The JSON standard only supports these values when they are
    nested inside an array or an object.

  Here we are trying to utilize this "superset decoding" to simplify the code.
  In case it may fail in the future, the generic exception is stuffed behind a
  decoding result check.
  (In case you fail the inheritance, you're the one to be blamed.)

  */
  protected function _decodeNames()
  {
    if(!is_array(static::$_readable))
    {
      if(!is_array($names = json_decode(static::$_readable)))
        throw new \Exception('PHP/JSON "superset decoding" failed.');
      static::$_readable = array_fill_keys($names, true);
    }
  }

  public function __call($method, $arguments)
  {
    if(static::$_callable[$method])
    {
      throw new \LogicException('Unimplemented.');
    }

    throw new \BadMethodCallException('No such method.');
  }

  public function __get($name)
  {
    if(static::$_readable[$name])
    {
      return $this->properties[$name];
    }

    throw new \LogicException('No such property or property is not readable.');
  }

  public function __set($name, $value)
  {
    if(static::$_writable[$name])
    {
      $this->properties[$name] = $value;
    }
    else if(method_exists($this, "set" . ucfirst($name)))
    {
      call_user_func(array($this, "set" . ucfirst($name)), $value);
    }
    else
      throw new \LogicException('No such property or property is not writable.');
  }

  abstract public function __toString();
}
