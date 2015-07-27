<?php

namespace Etki\Specification\Api\Archive\Content;

/**
 * Interface of archive content representation.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface ArchiveEntryCollectionInterface
{
    /**
     * Retrieves set of registered entries.
     *
     * @return ArchiveEntryInterface[]
     * @since 0.1.0
     */
    public function getEntries() : array;
}
