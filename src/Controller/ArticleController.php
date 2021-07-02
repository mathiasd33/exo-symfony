<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route ("/articles", name="articles")
     */
    public function articlesListe()
    {
        return new Response('articles');
    }

    /**
     * @Route ("/article/{id}", name="articleShow")
     */
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

        $articles = $articles[$id];
        return new Response("Le titre de l'article : ". $articles['title']);
    }
}