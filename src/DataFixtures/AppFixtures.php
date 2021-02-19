<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setThumb("https://i.pinimg.com/originals/fe/78/bb/fe78bbb25f35d56b502327fb6d43b309.png");
            $article->setTitle($faker->sentence(6, true));
            $article->setContent($faker->text(200));
            $article->setIsPublished($faker->boolean(80));
            $article->setPublishedAt($faker->dateTimeAD('now', null));
            $article->setUpdatedAt($faker->dateTimeAD('now',null));
            $article->setChapo($faker->sentence(5,true));
            $manager->persist($article);
        }

        // User fake data
        $user = new User();
        $user->setUsername("LeZellus");
        $user->setFirstname("Mathéo");
        $user->setLastname("Zeller");
        $user->setPassword(password_hash ( "Playmate12" , PASSWORD_BCRYPT));
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setEmail("matheo.zeller@gmail.com");
        $manager->persist($user);


        // Category() fake data

        for ($i = 0; $i < 10; $i++) {
            // Article fake data
            $user = new Category();
            $user->setLabel($faker->word);
            $manager->persist($user);
        }

        $manager->flush();

        $manager->flush();
    }
}
