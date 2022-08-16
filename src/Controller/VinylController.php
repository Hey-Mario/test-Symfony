<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController{

    #[Route('/')]
    public function homepage(){
        return new Response('Something else for the test');
    }
}