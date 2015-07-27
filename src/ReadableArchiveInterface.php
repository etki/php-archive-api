<?php

namespace Etki\Specification\Api\Archive;

use Etki\Specification\Api\Stream\ReadableStreamInterface;

/**
 * Specifies interface of nothing more but simple stream wrapper.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface ReadableArchiveInterface extends ArchiveInterface
{
    /**
     * Returns readable stream containing archive.
     *
     * @return ReadableStreamInterface
     * @since 0.1.0
     */
    public function getInputStream() : ReadableStreamInterface;
}
