<?php
/** Core classloader
*
* $Id: classloader.php 29 2016-02-23 04:25:01Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

function spl_autoload($className)
{
  $file = new \SplFileInfo(__DIR__ . strtr(substr("$className.php", 9), '\\', '/'));
  $path = $file->getRealPath();
  if(empty($path))
  {
    return false;
  }
  else
  {
    return include_once $path;
  }
}

spl_autoload_register('\AnrDaemon\Hazeron\spl_autoload');
