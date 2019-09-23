<?php


namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManager;

use App\Entity\Users;
use App\Entity\Questions;
use App\Entity\Answers;
use Twig\Environment;


class mainController
{

    public $twig;

    public function __construct(
        Environment $twig
    )
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {


        return new Response($this->twig->render("index.html.twig"));
    }


    /**
     * @Route("getDatas")
     */
    public function fixtureDatas()
    {

    }

    /**
     * @Route("")
     */
}