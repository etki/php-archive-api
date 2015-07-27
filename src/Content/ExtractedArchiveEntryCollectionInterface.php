<?php

namespace Etki\Specification\Api\Archive\Content;

/**
 * An interface for collection of extracted archive contents.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Content
 * @author  Etki <etki@etki.name>
 */
interface ExtractedArchiveEntryCollectionInterface extends
    ArchiveEntryCollectionInterface
{
    /**
     * Returns list of extracted entries.
     *
     * @return ExtractedArchiveEntryInterface[]
     * @since 0.1.0
     */
    public function getEntries() : array;
}
