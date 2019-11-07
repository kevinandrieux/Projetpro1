<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('demo');
        $user->setPassword($this->encoder->encodePassword($user, 'demo'));
        $user->setMail('demo@gmail.com');

        $manager->persist($user);


        $admin = new User();
        $admin->setUsername('turgis');
        $admin->setPassword($this->encoder->encodePassword($admin, 'heimdall'));
        $admin->setMail('turgiserik@wanadoo.fr');

        $manager->persist($admin);


        $manager->flush();
    }
}
