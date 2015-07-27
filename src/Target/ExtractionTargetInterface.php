<?php

namespace Etki\Specification\Api\Archive\Target;

use Etki\Specification\Api\Archive\Content\ExtractedArchiveEntryInterface;

/**
 * Simple interface for a manager that 
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Target
 * @author  Etki <etki@etki.name>
 */
interface ExtractionTargetInterface
{
    /**
     * Saves single archive entry.
     *
     * @param ExtractedArchiveEntryInterface $entry Entry to be saved.
     *
     * @return void
     * @since 0.1.0
     */
    public function saveArchiveEntry(ExtractedArchiveEntryInterface $entry);
}
