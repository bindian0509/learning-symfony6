<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {



    private array $words = ["Am", "I ", "a", "computer?"];

    #[Route('/', name: 'app_index')]
    public function index() : Response {
        return new Response("<h1>".implode(" : ", $this->words)."</h1>");
    }

    #[Route('/messages/{id}', name: 'app_show', requirements: ['id' => '\d+'])]
    public function showOne($id) : Response {
        return new Response($this->words[$id]);
    }
}
