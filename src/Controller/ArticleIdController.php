<?php
// src/Controller/ArticleIdController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleIdController extends AbstractController
{
    #[Route('/article/{articleId<\d+>}', name: 'show-article', methods: "GET")]
    
    public function show($articleId = 1)
    {
        // Nous retrouvons la valeur de la variable $articleId à partir de l'URI
        // Par exemple /article/1234 => $articleId = '1234'
        return new Response(" Voici le contenu de l'article avec l'ID $articleId ");
    }
}
