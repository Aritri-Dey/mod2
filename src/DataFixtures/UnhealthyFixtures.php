<?php

namespace App\DataFixtures;

use App\Entity\Unhealthy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UnhealthyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $unhealthy = new Unhealthy();
        $unhealthy->setName("Chips");
        $unhealthy->setPid(1);
        $unhealthy->setPrice(100);
        $unhealthy->setImg('/assets/image/unhealthy.jpg');
        $manager->persist($unhealthy);

        $unhealthy1 = new Unhealthy();
        $unhealthy1->setName("Chips");
        $unhealthy1->setPid(1);
        $unhealthy1->setPrice(100);
        $unhealthy1->setImg('/assets/image/unhealthy.jpg');
        $manager->persist($unhealthy1);

        $uhealthy2 = new Unhealthy();
        $uhealthy2->setName("Chips");
        $uhealthy2->setPid(1);
        $uhealthy2->setPrice(100);
        $uhealthy2->setImg('/assets/image/unhealthy.jpg');
        $manager->persist($uhealthy2);

        $uhealthy3 = new Unhealthy();
        $uhealthy3->setName("Chips");
        $uhealthy3->setPid(1);
        $uhealthy3->setPrice(100);
        $uhealthy3->setImg('/assets/image/unhealthy.jpg');
        $manager->persist($uhealthy3);


        $manager->flush();
    }
}
