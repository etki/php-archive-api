<?php

namespace Etki\Specification\Api\Archive\Exception;

use LogicException as SplLogicException;

/**
 * Generic logic exception.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Exception
 * @author  Etki <etki@etki.name>
 */
class LogicException extends SplLogicException implements ExceptionInterface
{
}
