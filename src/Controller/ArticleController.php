<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(): Response
    {
        $articles = ['Artcile1', 'Article 2','Article 3'];
        return $this->render('article/index.html.twig',[
            'articles' => $articles
        ]);
    }
}
