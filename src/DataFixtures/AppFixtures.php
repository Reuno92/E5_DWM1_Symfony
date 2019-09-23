<?php

namespace App\DataFixtures;

use App\Entity\Answers;
use App\Entity\Questions;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Faker;

class AppFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        $user = new Users;
        $user->setName($faker->userName);
        $manager->persist($user);

        $question = new Questions;
        $question->setTitle($faker->text(100));
        $question->setContent($faker->text(255));
        $question->setUserId($user->getId());
        $manager->persist($question);

        $answer = new Answers;
        $answer->setContent($faker->text(255));
        $answer->setStatus($faker->boolean(30));
        $answer->setQuestionId($question->getId());
        $manager->persist($answer);

        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 1;
    }
}
