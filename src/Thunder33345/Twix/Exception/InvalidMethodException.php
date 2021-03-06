<?php
/** Created By Thunder33345 **/

namespace Thunder33345\Twix\Exception;
class InvalidMethodException extends \InvalidArgumentException implements TwixExceptionInterface
{
  static public function render($invalid) {
    return new static('Invalid Method "'.$invalid.'", Expecting Twix::REQUEST_GET OR Twix::REQUEST_POST');
  }
}