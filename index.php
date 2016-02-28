<?php

use m8rge\GreetCommand;

$autoLoader = require_once 'vendor/autoload.php';
$autoLoader->addPsr4('m8rge\\', __DIR__. '/src');

$app = new Silly\Application('Application name', '@version@');
$app->command('greet name [--greeting=]', new GreetCommand())
    ->descriptions('Greets person', [
        'name' => 'Person name',
        '--greeting' => 'Greeting phrase',
    ]);
$app->run();