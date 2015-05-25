#!/usr/bin/php
<?php

/** @var \Composer\Autoload\ClassLoader $autoLoader */
use DI\Container;
use m8rge\Action;

const AUTH_FILENAME = 'dropbox-auth.json';
const API_IDENTIFIER = 'Dup-finder/dev-master';

$autoLoader = require_once __DIR__.'/vendor/autoload.php';
$autoLoader->addPsr4('m8rge\\', __DIR__. '/src');

$app = new Silly\Edition\PhpDi\Application();

/** @var Container $container */
$container = $app->getContainer();
$container->set('app', $app);

$app->command('action', Action::class)->descriptions('');

$app->run();
