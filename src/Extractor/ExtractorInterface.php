<?php

namespace Etki\Specification\Api\Archive\Extractor;

use Etki\Specification\Api\Archive\Content\ExtractedArchiveEntryCollectionInterface;
use Etki\Specification\Api\Archive\Exception\Extractor\ExtractionException;
use Etki\Specification\Api\Archive\Target\ExtractionTargetInterface;
use Etki\Specification\Api\Stream\ReadableStreamInterface;

/**
 * Defines extractor API.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Archive\Api
 * @author  Etki <etki@etki.name>
 */
interface ExtractorInterface
{
    /**
     * Extracts archive to specified target.
     *
     * @param ReadableStreamInterface   $archive Archive stream.
     * @param ExtractionTargetInterface $target  Target to extract to.
     *
     * @throws ExtractionException
     *
     * @return ExtractedArchiveEntryCollectionInterface Entry collection that
     *                                                  lists extracted entries.
     * @since 0.1.0
     */
    public function extract(
        ReadableStreamInterface $archive,
        ExtractionTargetInterface $target
    );
}
