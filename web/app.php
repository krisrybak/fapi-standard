<?php
/**
 * Fapi bootstarp file
 * @author  Kris Rybak <kris@krisrybak.com>
 * @package fapi
 */

use Symfony\Component\HttpFoundation\Request;

require_once __DIR__.'/../app/AppKernel.php';

$app = new AppKernel('prod', false);

$request    = Request::createFromGlobals();
$response   = $app->handle($request);
$response->send();
