<?php

namespace Etki\Specification\Api\Archive;

/**
 * Simple data wrapper.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface MetaDataCollectionInterface
{
    /**
     * Retrieves specific metadata.
     *
     * @param string $key Key to return metadata for.
     *
     * @return mixed|null
     * @since 0.1.0
     */
    public function getMetaData(string $key);
}
