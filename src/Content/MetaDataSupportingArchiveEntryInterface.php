<?php

namespace Etki\Specification\Api\Archive\Content;

use Etki\Specification\Api\Archive\MetaDataCollectionInterface;

/**
 * Interface that specifies an entry with metadata.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Content
 * @author  Etki <etki@etki.name>
 */
interface MetaDataSupportingArchiveEntryInterface extends ArchiveEntryInterface
{
    /**
     * Return entry metadata.
     *
     * @return MetaDataCollectionInterface
     * @since 0.1.0
     */
    public function getMetaData() : MetaDataCollectionInterface;
}
