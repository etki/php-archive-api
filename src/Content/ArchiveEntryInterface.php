<?php

namespace Etki\Specification\Api\Archive\Content;

/**
 * Describes single entry of archive.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive
 * @author  Etki <etki@etki.name>
 */
interface ArchiveEntryInterface
{
    /**
     * Returns relative path of entry in an archive.
     *
     * @return string
     * @since 0.1.0
     */
    public function getRelativePath() : string;
}
