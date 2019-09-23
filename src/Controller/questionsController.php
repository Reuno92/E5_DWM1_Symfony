<?php


namespace App\Controller;

use App\Entity\Users;
use App\Entity\Questions;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Response;

class questionsController
{
    private $em;

    public function __construct(
        ObjectManager $em
    )
    {
        $this->em = $em;
        $this->em->getRepository(Questions::class);
    }

    public function createQuestion(Questions $question)
    {
        $newQuestion = new Questions;

        $newQuestion->setTitle($question->getTitle());
        $newQuestion->setContent($question->getContent());
        $newQuestion->setUserId($question->getUserId());
        $newQuestion->addAnswer($question->getAnswers());

        $this->em->persist($newQuestion);
        $this->em->flush();
    }

    public function getQuestions()
    {
        return $this->em->getRepository(Questions::class)->findAll();
    }

    public function getQuestion(int $id)
    {
        return $this->em->getRepository(Questions::class)->find($id);
    }

    public function updateQuestion(Questions $questions, ObjectManager $manager)
    {
        $updateQuestion = $this->getQuestion($questions->getId());
        $updateQuestion->setTitle($questions->getTitle());
        $updateQuestion->setContent($questions->getContent());
        $updateQuestion->addAnswer($questions->getAnswers());

        $manager->persist($updateQuestion);
        $manager->flush();
    }

    public function deleteQuestion(int $id)
    {
        $deleteQuestion = $this->getQuestion($id);

        $this->em->remove($deleteQuestion);

        return new Response("Questions has been deleted");
    }

}