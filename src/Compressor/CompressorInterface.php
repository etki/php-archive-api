<?php

namespace Etki\Specification\Api\Archive\Compressor;

use Etki\Specification\Api\Archive\Content\ArchiveEntryCollectionInterface;
use Etki\Specification\Api\Archive\Exception\Compressor\CompressionException;
use Etki\Specification\Api\Archive\MetaDataCollectionInterface;
use Etki\Specification\Api\Stream\WritableStreamInterface;

/**
 * Generic compressor interface.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Archive\Api
 * @author  Etki <etki@etki.name>
 */
interface CompressorInterface
{
    /**
     * Compresses provided sources into single archive.
     *
     * @param ArchiveEntryCollectionInterface $entries  List of entries to
     *                                                  archive.
     * @param WritableStreamInterface         $target   Target stream to write
     *                                                  to.
     * @param MetaDataCollectionInterface     $metaData Additional archive
     *                                                  metadata, if any.
     *
     * @throws CompressionException
     *
     * @return void
     * @since 0.1.0
     */
    public function compress(
        ArchiveEntryCollectionInterface $entries,
        WritableStreamInterface $target,
        MetaDataCollectionInterface $metaData = null
    );
}
