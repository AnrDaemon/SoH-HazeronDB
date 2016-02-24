<?php
/** Debug wrapper
*
* @version $Id: debug.php 42 2016-02-23 21:39:57Z anrdaemon $
*/

@include_once 'ToolsClass.php';
if(!class_exists('\tool', false))
{
  final class tool
  {
    static function __callStatic($name, $args) {}
  }
}
