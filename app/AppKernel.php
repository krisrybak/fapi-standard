<?php

use Fapi\Component\HttpKernel\Kernel;

/**
 * AppKernel
 * Application Kernel. Handles all logic.
 *
 * @author  Kris Rybak <kris@krisrybak.com>
 */
class AppKernel extends Kernel
{
    public function loadConfiguration()
    {
        $this->loadConfig('config.yml');
    }
}
