<?php

// src/Controller/WelcomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class WelcomeController
{
    public function hello()
    {
        $name = 'Maxime';

        return new Response(
            '<html><body>Hello '.$name.'</body></html>'
        );
    }
}
