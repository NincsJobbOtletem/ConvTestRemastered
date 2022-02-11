<?php

use MyApp\Controller\Controller;

$container = require __DIR__ . '/Config/bootstrap.php';


$obj = $container->call(Controller::class,["repo"=>"sajt"]);

