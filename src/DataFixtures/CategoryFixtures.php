<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{   
// ====================================================== //
// ======================PROPRIETES====================== //
// ====================================================== //

// association Categorie pour relation Coating et Work
public const CATEGORY_ESTHETIQUE = "categorie-esthetique";
public const CATEGORY_CONFORT = "categorie-confort";
public const CATEGORY_COMPLET = "categorie-complet";
public const CATEGORY_COMMERCE = "categorie-commerce";
public const CATEGORY_FACADE = "categorie-facade";


// ====================================================== //
// ========================METHODES====================== //
// ====================================================== //

// implements DependentFixtureInterface function


    public function load(ObjectManager $manager): void
    {
        // Category Renovation Esthetique
        $cat = new Category();
        $cat->setTitle("Rénovation Esthétique");
        $cat->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat..");
        $cat->setSlug("Rénovation Esthétique");
        $cat->setimageName("esthetique.jpg");
        $cat->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($cat);
        //  Creation reference 
        $this->addReference(self::CATEGORY_ESTHETIQUE, $cat);

        // Category Renovation Confort
        $cat = new Category();
        $cat->setTitle("Rénovation Confort");
        $cat->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");
        $cat->setSlug("Rénovation Confort");
        $cat->setimageName("renovationInterieur.jpg");
        $cat->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($cat);
        //  creattion reference 
        $this->addReference(self::CATEGORY_CONFORT, $cat);

        // Category Renovation Complet
        $cat = new Category();
        $cat->setTitle("Rénovation Complète");
        $cat->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");
        $cat->setSlug("Rénovation Complet");
        $cat->setimageName("interieur.jpg");
        $cat->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($cat);
        //  creattion reference 
        $this->addReference(self::CATEGORY_COMPLET, $cat);

        // Category Local-Commercial-Bureaux
        $cat = new Category();
        $cat->setTitle("Rénovation Local-Commercial-Bureaux");
        $cat->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");
        $cat->setSlug("Rénovation Local-Commercial-Bureaux");
        $cat->setimageName("renovationBureau.jpg");
        $cat->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($cat);
        //  creattion reference 
        $this->addReference(self::CATEGORY_COMMERCE, $cat);

        // Category Renovation Facade exterieur
        $cat = new Category();
        $cat->setTitle("Rénovation Façade");
        $cat->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat.");
        $cat->setSlug("Rénovation Facade extérieur");
        $cat->setimageName("facade.jpg");
        $cat->setUpdateAt(new DateTimeImmutable());
        // Mise en memoire tampom
        $manager->persist($cat);
        //  creattion reference 
        $this->addReference(self::CATEGORY_FACADE, $cat);

        // Mise en base de donnée
        $manager->flush();
    }
}
