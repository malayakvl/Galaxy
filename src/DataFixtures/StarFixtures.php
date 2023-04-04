<?php

namespace App\DataFixtures;

use App\Entity\Star;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StarFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $star1 = new Star();
        $star1->setName('Star1');
        $star1->setGalaxyId(1);
        $star1->setRadius(1);
        $star1->setTemperature(1);
        $manager->persist($star1);
        $manager->flush();

        $star2 = new Star();
        $star2->setName('Star2');
        $star2->setGalaxyId(1);
        $star2->setRadius(1);
        $star2->setTemperature(1);
        $manager->persist($star2);
        $manager->flush();

        $star3 = new Star();
        $star3->setName('Star3');
        $star3->setGalaxyId(2);
        $star3->setRadius(1);
        $star3->setTemperature(1);
        $manager->persist($star3);
        $manager->flush();

        $star4 = new Star();
        $star4->setName('Star4');
        $star4->setGalaxyId(1);
        $star4->setRadius(1);
        $star4->setTemperature(1);
        $manager->persist($star4);
        $manager->flush();

        $star5 = new Star();
        $star5->setName('Star5');
        $star5->setGalaxyId(1);
        $star5->setRadius(1);
        $star5->setTemperature(1);
        $manager->persist($star5);
        $manager->flush();

        $star6 = new Star();
        $star6->setName('Star6');
        $star6->setGalaxyId(1);
        $star6->setRadius(1);
        $star6->setTemperature(1);
        $manager->persist($star6);
        $manager->flush();

        $star7 = new Star();
        $star7->setName('Star7');
        $star7->setGalaxyId(2);
        $star7->setRadius(1);
        $star7->setTemperature(1);
        $manager->persist($star7);
        $manager->flush();

        $star8 = new Star();
        $star8->setName('Star8');
        $star8->setGalaxyId(1);
        $star8->setRadius(1);
        $star8->setTemperature(1);
        $manager->persist($star8);
        $manager->flush();

        $star9 = new Star();
        $star9->setName('Star9');
        $star9->setGalaxyId(1);
        $star9->setRadius(1);
        $star9->setTemperature(1);
        $manager->persist($star9);
        $manager->flush();
    }
}
