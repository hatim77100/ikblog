<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Articles extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence(6));
            $article->setMainImg('https://picsum.photos/600/400');
            $article->setContent($faker->text(1000));
            $article->setSummary($faker->text(200));
            $article->setPublishedDate($faker->dateTimeBetween('-1 years', 'now'));
            $article->setCreationDate($faker->dateTimeBetween('-2 years', '-1 years'));
            $article->setUpdateDate($faker->dateTimeBetween('-1 years', 'now'));
            $article->setPublished($faker->boolean());
            $manager->persist($article);
        }

        $manager->flush();
    }
}
