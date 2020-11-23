<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Visiteur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Validator\Constraints\DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');

        //Création rôle VISITEUR 
        $visiteurRole = new Role();
        $visiteurRole->setLibelle('ROLE_VISITEUR');
        $manager->persist($visiteurRole);

        //Création rôle COMPTABLE 
        $comptableRole = new Role();
        $comptableRole->setLibelle('ROLE_COMPTABLE');
        $manager->persist($comptableRole);


        //Création faux user
        $users= [];
        for($i=1 ; $i <=5;$i++){
            $user = new User();
       
            $user->setRole($comptableRole->getId())
                 ->setLogin($faker->email)
                 ->setPassword("password");

            $manager->persist($user);
            $users [] = $user;
        }

        $manager->flush();
    }
}
