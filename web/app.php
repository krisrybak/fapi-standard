<?php

/**
 * Fapi-standard bootstarp file
 * @author  Kris Rybak <kris@krisrybak.com>
 */

// Autoload Classes
$loader = require_once __DIR__.'/../vendor/autoload.php';

// Load AppKernel
require_once __DIR__.'/../app/AppKernel.php';

// Start application
$kernel = new AppKernel();
$kernel->run();
