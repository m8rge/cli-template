<?php

/** @var \Composer\Autoload\ClassLoader $autoLoader */
$autoLoader = require_once __DIR__.'/vendor/autoload.php';
$autoLoader->addPsr4('m8rge\\', __DIR__);

$app = new Silly\Application('app', 'dev-master');
