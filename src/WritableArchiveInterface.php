<?php

namespace Etki\Specification\Api\Archive;

use Etki\Specification\Api\Stream\WritableStreamInterface;

/**
 * Specifies interface of nothing more but simple stream wrapper.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface WritableArchiveInterface extends ArchiveInterface
{
    /**
     * Returns archive stream.
     *
     * @return WritableStreamInterface
     * @since 0.1.0
     */
    public function getOutputStream() : WritableStreamInterface;
}
