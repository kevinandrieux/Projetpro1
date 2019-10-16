<?php

namespace App\DataFixtures;

use App\Entity\Egg;
use App\Entity\Painting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppBrunoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        //                 ADD FAKER LIBRARY                  //
        $faker = Factory::create('fr_FR');

        //                 ADD Watercolor (aquarelle)         //
        $watercolors = [];
        for ($w = 1; $w <= 32; $w++){
            $watercolor = new Painting();
            $watercolor->setType('aquarelle')
                ->setTitle('Peinture aquarelle '.$w)
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/aquarelles/aqua'.$w.'.jpg');

            $manager->persist($watercolor);
            $watercolors[] = $watercolor;
        }
        //                 ADD Oil (huile)                    //
        //classic oil
        $oils = [];
        for ($c = 1; $c <= 15; $c++){
            $classic = new Painting();
            $classic->setType('huile')
                ->setTitle('Peinture classique '.$c)
                ->setCategory('classique')
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/huile/classique/huileC'.$c.'.jpg');

            $manager->persist($classic);
            $oils[] = $classic;
        }
        // fantastic oil
        for ($f = 1; $f <= 36; $f++){
            $fantastic = new Painting();
            $fantastic->setType('huile')
                ->setTitle('Peinture fantastique '.$f)
                ->setCategory('fantastique')
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/huile/fantastique/huileF'.$f.'.jpg');

            $manager->persist($fantastic);
            $oils[] = $fantastic;
        }
        // portrait oil
        for ($p = 1; $p <= 10; $p++){
            $portrait = new Painting();
            $portrait->setType('huile')
                ->setTitle('Peinture portrait '.$p)
                ->setCategory('portrait')
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/huile/portrait/huileP'.$p.'.jpg');

            $manager->persist($portrait);
            $oils[] = $portrait;
        }
        // therapeutic oil
        for ($t = 1; $t <= 8; $t++){
            $therapeutic = new Painting();
            $therapeutic->setType('huile')
                ->setTitle('Peinture therapeutique '.$t)
                ->setCategory('therapeutique')
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/huile/therapeutique/huileT'.$t.'.jpg');

            $manager->persist($therapeutic);
            $oils[] = $therapeutic;
        }
        //                 ADD Laquered (laquée)                    //
        $laquer = [];
        for ($l = 1; $l <= 4; $l++){
            $laquered = new Painting();
            $laquered->setType('laque')
                ->setTitle('Peinture laquée '.$l)
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/laque/laque'.$l.'.jpg');

            $manager->persist($laquered);
            $laquer[] = $laquered;
        }
        //                 ADD Stained Glass (vitrail)                //
        $stainedGlass = [];
        for ($s = 1; $s <= 3; $s++){
            $stained = new Painting();
            $stained->setType('vitrail')
                ->setTitle('Vitrail '.$s)
                ->setDescription($faker->text(200))
                ->setImg('img/peintures/vitrail/vitrail'.$s.'.jpg');

            $manager->persist($stained);
            $stainedGlass[] = $stained;
        }
        //                 ADD Egg                                   //
        $eggs = [];
        for ($e = 1; $e <= 206; $e++){
            $egg = new Egg();
            $egg->setType('oeuf')
                ->setTitle('Oeuf '.$e)
                ->setCategory('')
                ->setDescription($faker->text(100))
                ->setImg('img/oeuf/oeuf'.$e.'.jpg');

            $manager->persist($egg);
            $eggs[] =  $egg;
        }

        $manager->flush();
    }
}
