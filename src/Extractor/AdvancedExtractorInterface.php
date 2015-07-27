<?php

namespace Etki\Specification\Api\Archive\Extractor;

use Etki\Specification\Api\Archive\Content\ArchiveEntryCollectionInterface;
use Etki\Specification\Api\Archive\Exception\Extractor\ExtractionException;
use Etki\Specification\Api\Archive\Target\ExtractionTargetInterface;
use Etki\Specification\Api\Stream\ReadableStreamInterface;

/**
 * This interface describes extractor with rich functionality.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface AdvancedExtractorInterface
{
    /**
     * Extracts particular entries from archive.
     *
     * @param ReadableStreamInterface         $archive Archive stream.
     * @param ArchiveEntryCollectionInterface $entries Entries to extract.
     * @param ExtractionTargetInterface       $target  Reference to where
     *                                                 archive entries should
     *                                                 turn up.
     *
     * @throws ExtractionException
     *
     * @return void
     * @since 0.1.0
     */
    public function extractEntries(
        ReadableStreamInterface $archive,
        ArchiveEntryCollectionInterface $entries,
        ExtractionTargetInterface $target
    );
}
