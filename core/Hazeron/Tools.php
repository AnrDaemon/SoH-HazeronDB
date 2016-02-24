<?php
/** Tools class
*
* @version $Id: Tools.php 34 2016-02-23 14:26:42Z anrdaemon $
*/

namespace AnrDaemon\Hazeron;

final class Tools
{
  const DefaultCharset = 'UTF-16BE';
  const CRLF = "\r\n";
  const ID_BASE = 26;
  const ID_OFFSET = 0x41;
  private static $modes = array(
      'U3' => true
    );

  private static $mode = false;

  private function __construct(){}

  static function int2id($id, $encoding = self::DefaultCharset)
  {
    if(!is_string($encoding))
      $encoding = self::DefaultCharset;

    $_idn = (int)$id;
    if(empty($_idn))
      return iconv('UTF-8', $encoding, chr(self::ID_OFFSET));

    $_id = '';
    while($_idn)
    {
      $_id .= chr(self::ID_OFFSET + $_idn % self::ID_BASE);
      $_idn = floor($_idn / self::ID_BASE);
    }

    return iconv('UTF-8', $encoding, $_id);
  }

  static function id2int($id, $encoding = self::DefaultCharset)
  {
    if(!is_string($encoding))
      $encoding = self::DefaultCharset;

    $_id = iconv($encoding, 'UTF-8', $id);

    if(preg_match('/[^A-Z]/', $_id))
      throw new \InvalidArgumentException('Invalid literals found in Id string.');

    if(!strlen($_id))
      throw new \InvalidArgumentException('Id string is empty.');

    $i = 0;
    $b = 1;
    $_idn = 0;
    while($i < strlen($_id))
    {
      $_idn += (ord($_id[$i]) - 0x41) * $b;
      $b *= 26;
      $i++;
    }
    return $_idn;
  }

  static function setCompat($mode)
  {
    if(self::$modes[$mode])
      self::$mode = $mode;
  }

  static function compat()
  {
    return self::$mode;
  }
}
