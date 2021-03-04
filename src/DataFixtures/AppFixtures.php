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

        for ($i = 0; $i < 15; $i++) {
            $article = new Article();
            $article->setThumb("randomThumbs/thumb-" . $i . ".jpeg");
            $article->setTitle($faker->sentence(6, true));
            $article->setContent($faker->text(200));
            $article->setIsPublished($faker->boolean(80));
            $article->setPublishedAt($faker->dateTimeAD('now', null));
            $article->setUpdatedAt($faker->dateTimeAD('now', null));
            $article->setChapo($faker->sentence(5, true));
            $manager->persist($article);
        }

        // User fake data
        $user = new User();
        $user->setUsername("LeZellus");
        $user->setFirstname("Mathéo");
        $user->setLastname("Zeller");
        $user->setPassword(password_hash("Playmate12", PASSWORD_BCRYPT));
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setEmail("matheo.zeller@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setUsername("Visiteur");
        $user->setFirstname("Jack");
        $user->setLastname("Pot");
        $user->setPassword(password_hash("visiteur", PASSWORD_BCRYPT));
        $user->setRoles(["ROLE_USER"]);
        $user->setEmail("visiteur@exemple.fr");
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
