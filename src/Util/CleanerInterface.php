<?php declare(strict_types = 1);

namespace OctoLab\Cleaner\Util;

/**
 * @author Kamil Samigullin <kamil@samigullin.info>
 */
interface CleanerInterface
{
    /**
     * @param string $packagePath
     * @param array $devFiles
     *
     * @return bool
     *
     * @api
     */
    public function clean($packagePath, array $devFiles);
}