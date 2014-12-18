<?php

/**
 * Fapi-standard bootstarp file
 * @author  Kris Rybak <kris@krisrybak.com>
 */

use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\HttpFoundation\Request;

// Autoload Classes
$loader = require_once __DIR__.'/../vendor/autoload.php';

// Load AppKernel
require_once __DIR__.'/../app/AppKernel.php';

// Start application
$request = Request::createFromGlobals();

$kernel     = new AppKernel();
$response   = $kernel->handle($request);
