<?php
/** Translatable (human-readable) interface
*
* @version SVN: $Id: Translatable.php 50 2016-02-24 11:16:33Z anrdaemon $
*/

namespace AnrDaemon\Hazeron\Contracts;

interface Translatable
{
  /** A method to turn object into a manageable presentation
  *
  * Like GPS coordinates (thousand, million, something) turned into single
  * digits suitable for human brain consumption.
  *
  * @return mixed Translated object equivalent or string representation, whichever is more appropriate.
  */
  public function translate();
}
