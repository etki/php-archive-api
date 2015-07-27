<?php

namespace Etki\Specification\Api\Archive\Exception;

use RuntimeException as SplRuntimeException;

/**
 * Base runtime exception.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Exception
 * @author  Etki <etki@etki.name>
 */
class RuntimeException extends SplRuntimeException implements ExceptionInterface
{
}
