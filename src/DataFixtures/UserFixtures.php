<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 3; $i++) {
            $user = new User();
            $user->setFirstName('firstName-'. $i);
            $user->setLastName('lastName-'. $i);
            $user->setEmail($i. '@gmail.com');
            $user->setPassword('Test');
            $user->setRoles('roles-'. $i);
            $user->setGroupID($i);
            $user->setLoan(NULL);
            $manager->persist($user);
        }

        $manager->flush();
    }
}