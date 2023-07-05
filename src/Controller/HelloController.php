<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    private array $words = ["Am", "I ", "a", "computer?"];
    #[Route('/', name: 'app_index')]
    public function index() : Response {
        return new Response(implode(" ", $this->words));
    }

    #[Route('/messages/{id}', name: 'app_show')]
    public function showOne($id) : Response {
        return new Response($this->words[$id]);
    }
}
