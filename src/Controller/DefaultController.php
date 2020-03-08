<?php

namespace App\Controller;

use TegCorp\TestBundle\TwitterClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_doc_default_index")
     */
    public function index(TwitterClient $client): Response
    {
        dd($client->get());


        return $this->render('default/index.html.twig');
    }
}
