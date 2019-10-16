<?php

namespace App\DataFixtures;

use App\Entity\Painting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppBrunoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        //                 ADD FAKER LIBRARY                  //
        $faker = Factory::create('fr_FR');

        $aquarelles = [];
        for ($a = 1; $a <= 32; $a++){
            $aquarelle = new Painting();
            $aquarelle->setType('Aquarelle')
                ->setTitle('Titre '.$a)
                ->setDescription($faker->text(200))
                ->setImg('');

            $manager->persist($aquarelle);
            $aquarelles[] = $aquarelle;
        }




        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
