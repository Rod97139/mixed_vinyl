<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Twig\Environment;

use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    
    // php bin/console debug:autowiring   (services are tools)
    // public function homepage(Environment $twig): Response
    
    #[Route("/", name: "app_homepage")]
    public function homepage(): Response
    {

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
            ['song' => 'Another Night', 'artist' => 'Real McCoy'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey']
            
        ];

        

        // $html = $twig->render('vinyl/homepage.html.twig', [
            return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB and Jams',
            'tracks' => $tracks,
        ]); 

        // return new Response($html);
    }

    #[Route("/browse/{slug}", name: "app_browse")]
    public function browse(string $slug = null): Response
    {
        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;
        

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
           ]);
        
    }
}