<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passEncoder;

    public function __construct(UserPasswordHasherInterface $passEncoder)
    {
        $this->passEncoder = $passEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setPassword($this->passEncoder->hashPassword($admin,'pass'));
        $admin->setEmail('admin@admin.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        $manager->flush();
    }
}
