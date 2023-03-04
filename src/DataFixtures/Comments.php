<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Article;

class Comments extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = $manager->getRepository(Article::class)->findAll();
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $comment = new Comment();
            $comment->setTitle($faker->sentence);
            $comment->setContent($faker->paragraph);
            $comment->setPublishedDate($faker->dateTimeThisMonth);
            $comment->setCreationDate($faker->dateTimeThisYear);
            $comment->setUpdateDate($faker->dateTimeThisMonth);
            $comment->setAuthorName($faker->name);
            $comment->setArticleId($article[$i]->getId());
        
            $manager->persist($comment);
        }

        $manager->flush();
    }
}
