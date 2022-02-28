<?php

namespace App\DataFixtures;

use App\Entity\Ressource;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RessourceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 3; $i++) {
            $ressource = new Ressource();
            $ressource->setLabel('label-'. $i);
            $ressource->setImage('image-'. $i);
            $ressource->setDescription('description-'. $i);
            $ressource->setQuantityTotal($i);
            $ressource->setLoan(NULL);
            $manager->persist($ressource);
        }

        $manager->flush();
    }
}