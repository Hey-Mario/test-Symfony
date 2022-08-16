<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class VinylController{

    #[Route('/')]
    public function homepage(){
        die("It's my first time using symfony madafaka");
    }
}