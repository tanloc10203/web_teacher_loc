<?php

require_once __DIR__ . "/config.php";
require_once VENDOR_PATH . 'Psr4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass;
$loader->register();
$loader->addNamespace('app', '.');
