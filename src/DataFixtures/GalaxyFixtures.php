<?php

namespace App\DataFixtures;

use App\Entity\Galaxy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GalaxyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $galaxy1 = new Galaxy();
        $galaxy1->setName('Andromeda');
        $manager->persist($galaxy1);
        $manager->flush();

        $galaxy2 = new Galaxy();
        $galaxy2->setName('Magellanic Clouds');
        $manager->persist($galaxy2);
        $manager->flush();
    }
}
