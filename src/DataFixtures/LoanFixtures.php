<?php

namespace App\DataFixtures;

use App\Entity\Loan;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoanFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 3; $i++) {
            $loan = new Loan();
            $loan->setUserID($i);
            $loan->setRessourceID($i);
            $loan->setCreatedAt(new \DateTimeImmutable());
            $loan->setFinishedAt(new \DateTimeImmutable());
            $loan->setReturnedAt(new \DateTimeImmutable());
            $manager->persist($loan);
        }

        $manager->flush();
    }
}