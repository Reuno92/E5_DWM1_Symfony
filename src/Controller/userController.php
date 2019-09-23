<?php


namespace App\Controller;


use App\Entity\Questions;
use App\Entity\Users;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class userController
{
    private $user;
    private $em;

    public function __construct(
        ObjectManager $em
    )
    {
        $this->em = $em;
        $this->em->getRepository(Users::class);
    }

    public function createUsers(string $name, Questions $question)
    {
        $user = new Users;
        $user->setName($name);
        $user->addQuestion($question);

        $this->em->persist($user);
        $this->em->flush();
    }

    public function getUser(int $id)
    {
        return $this->em->find(Users::class, $id);
    }

    public function getUsers()
    {
        return $this->em->getRepository(Users::class)->findAll();
    }

    public function updateUsers(Users $users, LoggerInterface $logger, EntityManagerInterface $manager)
    {
        $updateUser = new Users;
        $updateUser->getId();
        $updateUser->setName($users->getName());

        $manager->persist($updateUser);
        $manager->flush();
    }

    public function deleteUsers(int $id, ObjectManager $manager)
    {
        $deleteUsers = $this->em->getRepository(Users::class)->find($id);
        $manager->remove($deleteUsers);

        return new Response("Entity has been deleted !");
    }
}