<?php

namespace Etki\Specification\Api\Archive\Exception\Extractor;

use Etki\Specification\Api\Archive\Exception\RuntimeException;

/**
 * Exception designed to be thrown whenever malformed archive is being
 * extracted.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Exception
 * @author  Etki <etki@etki.name>
 */
class CorruptedArchiveException extends RuntimeException
{
}
