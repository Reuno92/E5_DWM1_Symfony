<?php


namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManager;

use App\Entity\Users;
use App\Entity\Questions;
use App\Entity\Answers;


class mainController
{
    private $manager;
    private $userManager;

    public function __construct(
    )
    {
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index()
    {
        return new Response("Response !");
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