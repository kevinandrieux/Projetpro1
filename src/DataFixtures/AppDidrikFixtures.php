<?php

namespace App\DataFixtures;

use App\Entity\Drawing;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppDidrikFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //                 ADD FAKER LIBRARY                  //
        $faker = Factory::create('fr_FR');

        //                 ADD INK CHINA                        //
        $drawings = [];
        for ($ec = 1; $ec <= 46; $ec++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Encre Chine ' . $ec)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/encre_chine/encre_chine_erik_' . $ec . '.jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  APOCALYPSE   //
        $drawings = [];
        for ($APO = 1; $APO <= 12; $APO++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Apocalypse' . $APO)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/apocalypse/apocalypse (' . $APO . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  Div Architecture   //
        $drawings = [];
        for ($ad = 1; $ad <= 13; $ad++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Architecture divers' . $ad)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/architecdivers/architecdivers (' . $ad . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  fantastical Architecture   //
        $drawings = [];
        for ($af = 1; $af <= 6; $af++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Architecture Fantastique' . $af)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/architecfanta/architecfanta (' . $af . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Mont Saint Michel Architecture   //
        $drawings = [];
        for ($amsm = 1; $amsm <= 12; $amsm++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Architecture Mont Saint Michel ' . $amsm)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/architecmsm/architecmsm (' . $amsm . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Beffroi Architecture   //
        $drawings = [];
        for ($ab = 1; $ab <= 12; $ab++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Architecture beffroi ' . $ab)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/architectbeffhdf/architectbeffhdf (' . $ab . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Baudelaire   //
        $drawings = [];
        for ($ba = 1; $ba <= 9; $ba++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Baudelaire' . $ba)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/baudelaire/baudelaire (' . $ba . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  classical   //
        $drawings = [];
        for ($cl = 1; $cl <= 12; $cl++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Classique ' . $cl)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/classique/classique (' . $cl . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Croquis   //
        $drawings = [];
        for ($cr = 1; $cr <= 33; $cr++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Croquis ' . $cr)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/croquis/croquis (' . $cr . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Danse Macabre   //
        $drawings = [];
        for ($dm = 1; $dm <= 33; $dm++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Danse Macabre ' . $dm)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/dansemacabre/dansemacabre (' . $dm . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  esoterique   //
        $drawings = [];
        for ($er = 1; $er <= 3; $er++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Erotique ' . $er)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/erotique/erotique (' . $er . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Esoterique   //
        $drawings = [];
        for ($es = 1; $es <= 12; $es++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Esotèrique ' . $es)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/esoterique/esoterique (' . $es . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Fantastical   //
        $drawings = [];
        for ($fa = 1; $fa <= 12; $fa++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Fantastique ' . $fa)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/fantastique/fantastique (' . $es . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Humour   //
        $drawings = [];
        for ($hu = 1; $hu <= 6; $hu++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('humour ' . $hu)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/humour/humour (' . $hu . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  Fantastical Mythology   //
        $drawings = [];
        for ($mf = 1; $mf <= 5; $mf++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Mythologie Fantastique ' . $mf)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/mythfanta/mythfanta (' . $mf . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  religion mythology   //
        $drawings = [];
        for ($mr = 1; $mr <= 5; $mr++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Mythologie Religion ' . $mr)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/mythfanta/mythfanta (' . $mr . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  scandinavian mythology   //
        $drawings = [];
        for ($ms = 1; $ms <= 12; $ms++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Mythologie Scandinave ' . $ms)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/mythscandi/mythscandi (' . $ms . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  onirique   //
        $drawings = [];
        for ($o = 1; $o <= 5; $o++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Onirique ' . $o)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/onirique/onirique (' . $o . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  Portrait   //
        $drawings = [];
        for ($p = 1; $p <= 8; $p++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Portrait ' . $p)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/portrait/portrait (' . $p . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        //      ADD  Therapeutic   //
        $drawings = [];
        for ($th = 1; $th <= 5; $th++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Thérapeutique ' . $th)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/therapeutique/therapeutique (' . $th . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }
        //      ADD  zywuikx   //
        $drawings = [];
        for ($z = 1; $z <= 5; $z++) {
            $drawing = new Drawing();
            $drawing->setType('dessin')
                ->setTitle('Zywuikx ' . $z)
                ->setDescription($faker->text(200))
                ->setImg('img/dessin/zywuikx/zywuikx (' . $p . ').jpg');

            $manager->persist($drawing);
            $drawings[] = $drawing;
        }

        $manager->flush();
    }

}
