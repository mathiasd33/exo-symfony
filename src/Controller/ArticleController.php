<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{

    /**
     * @Route ("/article", name="article")
     */
    public function articles(){
        var_dump('listeArticle'); die;
    }
}