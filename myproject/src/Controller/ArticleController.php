<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function homepage()
    {
        return new Response('TEST');
    }

    /**
     * @Route("/articles/{titre}")
     */
    public function show($titre)
    {
        $comments = ["Commentaire1", "Commentaire2", "Commentaire3"];

        return $this->render('article/show.html.twig',[
            "titre"=>$titre,
            "maVariable"=>"test",
            "comments"=>$comments,
        ]);
    }

}