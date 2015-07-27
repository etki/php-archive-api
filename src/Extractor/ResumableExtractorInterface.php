<?php

namespace Etki\Specification\Api\Archive\Extractor;

use Etki\Specification\Api\Archive\Exception\InvalidStateException;

/**
 * Interface of archive extractor that may resume extraction after exception has
 * been thrown (skipping unreadable parts).
 * 
 * todo This flow tightly binds particular extractor to extraction process. This
 * is certainly not good and should be revisited.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Extractor
 * @author  Etki <etki@etki.name>
 */
interface ResumableExtractorInterface extends ExtractorInterface
{
    /**
     * Resumes extraction process.
     *
     * @throws InvalidStateException Should be thrown if called when extractor
     *                               is not in interrupted state.
     *
     * @return void
     * @since 0.1.0
     */
    public function resume();
}
