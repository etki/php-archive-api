<?php

namespace Etki\Specification\Api\Archive\Exception;

/**
 * Exception that is being thrown whenever user does something against the
 * program logic, e.g. tries to resume process that didn't exist at all in the
 * first place.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Exception
 * @author  Etki <etki@etki.name>
 */
class InvalidStateException extends LogicException
{
}
