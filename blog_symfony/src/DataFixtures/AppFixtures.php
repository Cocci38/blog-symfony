<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i <= 10; $i++) { 
        $article = new Article();
        $article->setTitle("Titre de l'article n°$i")
                ->setContent("<p>Contenu de l'article n°$i</p>")
                ->setImage("https://via.placeholder.com/350x150")
                ->setCreatedAt(new \DateTimeImmutable());

        $manager->persist($article);
        }
        
        $manager->flush();
    }
}
