<?php

namespace Etki\Specification\Api\Archive\Compressor;

use Etki\Specification\Api\Archive\Exception\InvalidStateException;

/**
 * Interface for a compressor than can resume compressing process after an
 * exception (skipping unreadable parts).
 *
 * todo This flow tightly binds particular compressor to compression process.
 * This is certainly not good and should be revisited.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Archive\Compressor
 * @author  Etki <etki@etki.name>
 */
interface ResumableCompressorInterface extends CompressorInterface
{
    /**
     * Resumes compression process, skipping the last erroneous entry.
     *
     * @throws InvalidStateException Should be thrown if is called not on
     *                               interrupted compressor.
     *
     * @return void
     * @since 0.1.0
     */
    public function resume();
}
