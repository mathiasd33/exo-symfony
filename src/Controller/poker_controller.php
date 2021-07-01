<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class poker_controller
{
    /**
     * @Route ("/poker", name="poker")
     */
    public function poker(){
        $request = Request::createFromGlobals();
        $age = $request->query->get('age');

        if($age>=18){
            return new Response("poker en ligne");
        }
        return new Response('il faut avoir plus de 18 ans');
    }

}