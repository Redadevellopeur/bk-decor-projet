<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Carousel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarouselFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Category Renovation Esthetique
        $carousel= new Carousel();
        $carousel->setTitle("Rénovation Esthétique");
        $carousel->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat..");

        $carousel->setimageName("esthetique.jpg");
        $carousel->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($carousel);
        //  Creation reference 


        // Category Renovation Confort
        $carousel = new Carousel();
        $carousel->setTitle("Rénovation Confort");
        $carousel->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");

        $carousel->setimageName("renovationInterieur.jpg");
        $carousel->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($carousel);
        //  creattion reference 


        // Category Renovation Complet
        $carousel = new Carousel();
        $carousel->setTitle("Rénovation Complète");
        $carousel->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");

        $carousel->setimageName("interieur.jpg");
        $carousel->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($carousel);
        //  creattion reference 


        // Category Local-Commercial-Bureaux
        $carousel = new Carousel();
        $carousel->setTitle("Rénovation Local-Commercial-Bureaux");
        $carousel->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");

        $carousel->setimageName("renovationBureau.jpg");
        $carousel->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($carousel);
        //  creattion reference 


        // Category Renovation Facade exterieur
        $carousel = new Carousel();
        $carousel->setTitle("Rénovation Façade");
        $carousel->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");

        $carousel->setimageName("facade.jpg");
        $carousel->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($carousel);
        //  creattion reference 


        // Mise en base de donnée
        $manager->flush();
    }
}
