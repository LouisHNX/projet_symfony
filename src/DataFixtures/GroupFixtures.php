<?php

namespace App\DataFixtures;

use App\Entity\Group;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GroupFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 3; $i++) {
            $group = new Group();
            $group->setLabel('label-'. $i);
            $group->setUser(NULL);
            $manager->persist($group);
        }

        $manager->flush();
    }
}