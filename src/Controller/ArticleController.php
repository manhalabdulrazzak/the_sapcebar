<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article")
     */
    public function show ($slug)
    {
        return $this->render('article/show.html.twig',[
            'title'=> ucwords(str_replace('-','',$slug))
        ]);
    }
}
