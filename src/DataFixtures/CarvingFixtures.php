<?php

namespace App\DataFixtures;
use App\Entity\Carving;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CarvingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

    // add sculpture en bois
    $carvingwoods = [];
    for($i = 1; $i <= 8; $i++){
        $carvingwood = new Carving();
        $carvingwood->setTitle('sculpture bois n°'.$i)
        ->setSupport("bois")
        ->setImg('img/sculptures/sculptures-bois/bois'.$i.'.jpg');
        
        $manager->persist($carvingwood);
        $carvingwoods[] = $carvingwood;
    }
    // add sculpture en bois
    $carvingstones = [];
    for($i = 1; $i <= 27; $i++){
        $carvingstone = new Carving();
        $carvingstone->setTitle('sculpture pierre n°'.$i)
        ->setSupport("pierre")
        ->setImg('img/sculptures/sculptures-pierre/pierre'.$i.'.jpg');
        
        $manager->persist($carvingstone);
        $carvingstones[] = $carvingstone;
    }
        $manager->flush();
    }
}
