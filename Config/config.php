
<?php

use MyApp\Controller\Controller;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [

    'dbName' => 'test_feladat',
    'dbUser' => 'test_feladat',
    'dbPassword' => 'mPPUsybBQnRVRdJQ',
    'dbHost' => 'db',
    'dbTable' => 'tree_source',
    'dbType' => 'pdo',
    //db
    //Controller::class => function () {
        //connectálás return new
    //}
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../src/twig');
        return new Environment($loader);
    }
];



?>
