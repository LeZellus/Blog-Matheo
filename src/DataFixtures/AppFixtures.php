<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Comment;
use Faker;

class AppFixtures extends Fixture
{
    private $faker;

    private $articles;

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->faker = Faker\Factory::create();
        $this->addArticles($manager);
        $this->addUsers($manager);
        $this->addComments($manager);
        $this->addCategories($manager);
    }

    /**
     * @param $manager
     * User fake data
     */
    public function addUsers($manager)
    {
        $user = new User();
        $user->setUsername("LeZellus");
        $user->setFirstname("Mathéo");
        $user->setLastname("Zeller");
        $user->setPassword(password_hash("Playmate12", PASSWORD_BCRYPT));
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setEmail("matheo.zeller@gmail.com");
        $user->setPseudo('Sasuke');
        $manager->persist($user);

        $user = new User();
        $user->setUsername("Visiteur");
        $user->setFirstname("Jack");
        $user->setLastname("Pot");
        $user->setPassword(password_hash("visiteur", PASSWORD_BCRYPT));
        $user->setRoles(["ROLE_USER"]);
        $user->setEmail("visiteur@exemple.fr");
        $user->setPseudo('hitachi');
        $manager->persist($user);

        $manager->flush();
    }

    /**
     * @param $manager
     * Article fake data
     */
    public function addArticles($manager)
    {
        for ($i = 0; $i < 15; $i++) {

            $article = new Article();
            $article->setThumb("randomThumbs/thumb-" . $i . ".jpeg");
            $article->setTitle($this->faker->sentence(6, true));
            $article->setContent($this->faker->text(200));
            $article->setIsPublished($this->faker->boolean(80));
            $article->setPublishedAt($this->faker->dateTimeAD('now', null));
            $article->setUpdatedAt($this->faker->dateTimeAD('now', null));
            $article->setChapo($this->faker->sentence(5, true));
            $manager->persist($article);

            $this->articles[] = $article;
        }

        $manager->flush();
    }

    /**
     * @param $manager
     * Comment fake data
     * @param User $user
     */
    public function addComments($manager)
    {
        $articles = $manager->getRepository(Article::class)->findAll();

        for ($i = 0; $i < 60; $i++) {

            $article = $articles[array_rand($articles)];

            $comment = new Comment();
            $comment->setContent($this->faker->sentence(rand(1, 20), true));
            $comment->setAuthor("Utilisateur");
            $comment->setCreatedAt($this->faker->dateTimeAD('now', null));
            $comment->setIsValid($this->faker->boolean(50));
            $comment->setArticle($article);
            $manager->persist($comment);
        }

        $manager->flush();
    }

    /**
     * @param $manager
     * Category fake data
     */
    public function addCategories($manager)
    {
        $articles = $manager->getRepository(Article::class)->findAll();

        for ($i = 0; $i < 10; $i++) {

            $article = $articles[array_rand($articles)];
            $category = new Category();
            $category->setLabel($this->faker->word);
            $category->addArticle($article);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
