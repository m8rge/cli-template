<?php

use m8rge\GreetCommand;

/** @var Composer\Autoload\ClassLoader $autoLoader */
$autoLoader = require __DIR__ . '/vendor/autoload.php';
$autoLoader->addPsr4('m8rge\\', __DIR__. '/src');

$app = new Silly\Application('Application name', '@version@');
$container = \DI\ContainerBuilder::buildDevContainer();
$app->useContainer($container, true, true);

$container->set('app', $app);

$app->command('greet name [--greeting=]', GreetCommand::class)
    ->descriptions('Greets person', [
        'name' => 'Person name',
        '--greeting' => 'Greeting phrase',
    ]);
$app->run();