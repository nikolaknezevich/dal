<?php
// application.php

require __DIR__.'/vendor/autoload.php';
require "CreateClassCommand.php";
use Symfony\Component\Console\Application;
use Dal\CreateClassCommand;

$application = new Application();

// ... register commands
$application->add(new CreateClassCommand());
$application->run();

