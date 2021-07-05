<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

          private $articles = [
            1 => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1,
                "published"=>true
            ],
            2 => [
                "title" => "La vaccination c'est pas trop géniale",
                "content" => "blablablabla",
                "id" => 2,
                "published"=>true
            ],
            3 => [
                "title" => "Balkany c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3,
                "published"=>false
            ],
            4 => [
                "title" => "Balkany c'est pas trop génial",
                "content" => "balblalblalb",
                "id" => 4,
                "published"=>true
            ]
         ];


    /**
     * @Route ("/articles", name="articles")
     */

    public function articlesListe()
    {
        return $this->render('article_list.html.twig', [
            'articles' =>$this->articles
        ]);
    }

    //@route = creation page
    /**
     * @Route ("/article/{id}", name="articleShow")
     */


       //create function container a table with title, content and an id
       public function articleShow($id){
           //redirection to page html with render calling function
        return $this->render("articleShow.html.twig", [
            'article' => $this->articles[$id]
        ]);
    }
}