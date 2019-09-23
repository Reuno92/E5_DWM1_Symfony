<?php


namespace App\Controller;

use App\Entity\Answers;

use Doctrine\Common\Persistence\ObjectManager;

class answersController
{
    private $em;

    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
        $this->em->getRepository(Answers::class);
    }

    public function createAnswer(Answers $answer)
    {
        $newAnswer = new Answers;
        $newAnswer->setContent($answer->getContent());
        $newAnswer->setStatus($answer->getStatus());
        $newAnswer->setQuestionId($answer->getQuestionId());

        $this->em->persist($newAnswer);
        $this->em->flush();
    }

    public function getAnswers()
    {
        return $this->em->getRepository(Answers::class)->findAll();
    }

    public function getAnswer(int $id)
    {
        return $this->em->getRepository(Answers::class)->find($id);
    }

    public function updateAnswer(Answers $answers)
    {
        $updateAnswers = $this->getAnswer($answers->getId());
        $updateAnswers->setContent($answers->getContent());
        $updateAnswers->setStatus($answers->getStatus());
        $updateAnswers->setQuestionId($answers->getQuestionId());

        $this->em->persist($updateAnswers);
        $this->em->flush();
    }

    public function deleteQuestion(int $id)
    {
        $deleteQuestion = $this->em->getRepository(Answers::class)->find($id);
        $this->em->remove($deleteQuestion);
    }
}