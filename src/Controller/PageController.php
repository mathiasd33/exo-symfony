<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{

    /**
     * @Route ("/", name="home")
     */


    public function home(){
        //retoure d une reponse http valide avec la response
        //du composat http/Fondation
       return new Response('Acceuil');
    }

    /**
     * @Route ("/mention",name="mentionsLegales")
     */
    public function legales(){
        return new Response('mentions-legales');
    }

}