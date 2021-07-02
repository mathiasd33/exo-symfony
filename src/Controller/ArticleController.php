<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route ("/articles", name="articles")
     */
    public function articlesListe()
    {
        return new Response('articles');
    }

    //@route = creation page
    /**
     * @Route ("/article/{id}", name="articleShow")
     */

    //create function container a table with title, content and an id
    public function articleShow($id){

        $articles = [
            1 => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1
            ],
            2 => [
                "title" => "La vaccination c'est pas trop géniale",
                "content" => "blablablabla",
                "id" => 2
            ],
            3 => [
                "title" => "Balkany c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
            ],
            4 => [
                "title" => "Balkany c'est pas trop génial",
                 "content" => "balblalblalb",
                "id" => 4
            ]
        ];

        //redirection to page html with render calling function
        $article = $articles[$id];
        return $this->render("articleShow.html.twig", [
            'article' => $article
        ]);
    }
}