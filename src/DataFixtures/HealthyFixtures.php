<?php

namespace App\DataFixtures;

use App\Entity\Healthy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HealthyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $healthy = new Healthy();
        $healthy->setName("Cucumber");
        $healthy->setPid(1);
        $healthy->setPrice(100);
        $healthy->setImg('/assets/image/healthy.jpg');
        $manager->persist($healthy);

        $healthy1 = new Healthy();
        $healthy1->setName("Cucumber");
        $healthy1->setPid(1);
        $healthy1->setPrice(100);
        $healthy1->setImg('/assets/image/healthy.jpg');
        $manager->persist($healthy1);

        $healthy2 = new Healthy();
        $healthy2->setName("Cucumber");
        $healthy2->setPid(1);
        $healthy2->setPrice(100);
        $healthy2->setImg('/assets/image/healthy.jpg');
        $manager->persist($healthy2);

        $healthy3 = new Healthy();
        $healthy3->setName("Cucumber");
        $healthy3->setPid(1);
        $healthy3->setPrice(100);
        $healthy3->setImg('/assets/image/healthy.jpg');
        $manager->persist($healthy3);


        $manager->flush();
    }
}
