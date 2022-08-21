<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController{

    // Ajout des landings pages avec le Response
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Our landing page');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if($slug){
            $title = 'Genre : '.u(str_replace('-', ' ', $slug))->title(true);
        } else{
            $title = 'All Genre';
        }
        return new Response($title);
    }

}