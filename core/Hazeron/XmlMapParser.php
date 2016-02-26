<?php
/** Map parser class
*
* @version $Id: XmlMapParser.php 53 2016-02-26 08:24:16Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;
use AnrDaemon\Interfaces\XmlParser as Features;

class XmlMapParser extends \AnrDaemon\Wrappers\XmlParser
  implements Features\IXmlBasicParser
{
  public $universe;
  protected $_galaxy;
  protected $_sector;
  protected $_system;
  protected $_current;

  function __construct(Registry $universe)
  {
    if(!isset($universe))
      throw new \InvalidArgumentException('Create an universe first, will ya?');

    $this->universe = $universe;
    $this->setOption(XML_OPTION_CASE_FOLDING, false);
  }

  protected function start_galaxy($attrs)
  {
    $this->_galaxy = Dictionary\Galaxy::byName($attrs['name']);
    $this->universe[] = $this->_galaxy;
  }

  protected function start_sector($attrs)
  {
    $this->_sector = new Sector(Tools::id2int($attrs['sectorId'], 'UTF-8'), $attrs['name'],
      SectorCoordinates::fromMap($attrs['x'], $attrs['y'], $attrs['z']));
    $this->_galaxy->registry[] = $this->_sector;
  }

  protected function start_system($attrs)
  {
    $this->_system = new Starsystem(Tools::id2int($attrs['systemId'], 'UTF-8'), $attrs['name'],
      SystemCoordinates::fromGPS($attrs['x'], $attrs['y'], $attrs['z']));
    $this->_sector->registry[] = $this->_system;
  }

// IXmlBasicParser
  function element_start($self, $name, $attrs)
  {
    if(method_exists($this, "start_{$name}"))
    {
      if(\tool::debug()) error_log(__FUNCTION__ . "::$name:" . @json_encode($attrs, 832));
      return call_user_func(array($this, "start_{$name}"), $attrs);
    }
  }

  function element_end($self, $name)
  {
    if(method_exists($this, "end_{$name}"))
    {
      if(\tool::debug()) error_log(__FUNCTION__ . "::$name");
      call_user_func(array($this, "end_{$name}"));
    }
  }

  function cdata_handler($self, $data)
  {
    if(\tool::debug()) if(trim($data)) error_log(__FUNCTION__ . ":" . @json_encode(trim($data), 832));
  }
}
