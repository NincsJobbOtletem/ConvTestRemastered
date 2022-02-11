<?php

namespace MyApp\Controller;

use Twig\Environment;

class Controller
{
    private $twig;
    private $repo;
    
    function __construct(Environment $twig)
    {
        $this->twig = $twig;
        
    }
    public function __invoke($repo)
    {
        
        echo $this->twig->render('index.html.twig', [
        
        ]);
        var_dump($repo);
    }
    
}
//database repository php di
