<?php

namespace App\DataFixtures;

use App\Entity\Atom2Star;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Atom2StarFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $fix1 = new Atom2Star();
        $fix1->setAtomId(1);
        $fix1->setStarId(1);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(2);
        $fix1->setStarId(1);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(12);
        $fix1->setStarId(1);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(1);
        $fix1->setStarId(2);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(2);
        $fix1->setStarId(2);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(1);
        $fix1->setStarId(3);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(2);
        $fix1->setStarId(3);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(1);
        $fix1->setStarId(4);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(10);
        $fix1->setStarId(4);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(11);
        $fix1->setStarId(5);
        $manager->persist($fix1);
        $manager->flush();

        $fix1 = new Atom2Star();
        $fix1->setAtomId(12);
        $fix1->setStarId(8);
        $manager->persist($fix1);
        $manager->flush();
    }
}
