<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route ("/contact",name="contact")
     */

    public function contact(){
        $request = Request::createFromGlobals();
        $sent = $request->query->get('sent');

        if ($sent==='yes'){
            return new Response("merci pour le formulaire");
        }else{
            return new Response("formulaire");
        }
    }

}