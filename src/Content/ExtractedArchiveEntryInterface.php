<?php

namespace Etki\Specification\Api\Archive\Content;

use Etki\Specification\Api\Stream\ReadableStreamInterface;

/**
 * Interface for entry that has already been extracted.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface ExtractedArchiveEntryInterface extends ArchiveEntryInterface
{
    /**
     * Returns readable stream of entry wherever it has been saved.
     * Please note that null is a valid returned value in case some entries like
     * directories are present.
     *
     * @return ReadableStreamInterface|null
     * @since 0.1.0
     */
    public function getOutputStream() : ReadableStreamInterface;
}
