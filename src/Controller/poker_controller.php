<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class poker_controller extends AbstractController
{
    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {
        $request = Request::createFromGlobals();

        $age = $request->query->get('age');

        if ($age >= 18) {
            return $this->render("index.html");
        } else {
            //  redirection vers la route digimon
            // grâce à la méthode redirectToRoute qui existe dans
            // l'AbstractController
            // classe PageController hérite d'AbstractController
            // et méthode redirectToRoute en herite aussi
            return $this->render("pokemon.html");
        }
    }

    ///**
    // * @Route("/digimon", name="digimon")
     //*/
    //public function digimon()
    //{
//  new Response("Les digimons");
    //}

}