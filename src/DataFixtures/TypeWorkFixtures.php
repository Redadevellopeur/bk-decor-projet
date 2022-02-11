<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\TypeWork;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

// Appel de la DependentFixtureInterface pour charger Work avant Coating
class TypeWorkFixtures extends Fixture 
{
// ====================================================== //
// =========================PROPRIETES=================== //
// ====================================================== //
// association Categorie pour relation Coating et Work
public const TYPEWORK_RENOVATION_SALLE_DE_BAIN = "Renovation salle de bain";
public const TYPEWORK_RENOVATION_CUISINE = "Rénovation-Cuisine";
public const TYPEWORK_SOL_MURS_PLAFONDS = "Sol-Murs-Plafonds";
public const TYPEWORK_AMENAGEMENT_COMBLES = "Aménagement combles";
public const TYPEWORK_ISOLATION_INTERIEUR = "Isolations intérieur";
public const TYPEWORK_FACADE_EXTERIEUR = "Façade exterieur";
public const TYPEWORK_SALON = "Salon";
public const TYPEWORK_AUTRES_PIECES = "Autres pièces";
public const TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR = "Aménagement espace d'intérieur";
public const TYPEWORK_RENOVATION_FACADE_BUREAUX = "Rénovation facade de bureaux";
public const TYPEWORK_RENOVATION_FACADE_LOCAL_COMMERCIAL = "rénovation facade local commercial ";
public const TYPEWORK_RENOVATION_INTERIEUR_BUREAUX = "Rénovation intérieur bureaux";
public const TYPEWORK_RENOVATION_INTERIEUR_LOCAL_COMMERCIAL = "Rénovation intérieur local commercial";



// ====================================================== //
// =======================METHODES======================= //
// ====================================================== //

    public function load(ObjectManager $manager): void
    {
        // Type de travaux salle de bain
        $work = new TypeWork();
        $work->setTitle("Salle de bain");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("amenagement_interieur.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_CONFORT));
        // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_SALLE_DE_BAIN, $work);

         // Mise en memoire tampom
        $manager->persist($work);

        // Type de tarvaux Cuisine
        $work = new TypeWork();
        $work->setTitle("Cuisine");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_sol.jpg");
        $work->setUpdateAt(new DateTimeImmutable());

        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_CONFORT));
         // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_CUISINE, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux Salon
        $work = new TypeWork();
        $work->setTitle("Salon");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup variousfonts for a type specimen book.");
        $work->setImageName("verriere.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_ESTHETIQUE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_SALON, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux Sol-Murs_plafonds
        $work = new TypeWork();
        $work->setTitle("Sol-Murs-Plafonds");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_interieur.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_CONFORT));
        // Creation reference 
        $this->addReference(self::TYPEWORK_SOL_MURS_PLAFONDS, $work);

        // Mise en memoire tampom
        $manager->persist($work);


        // Type de travaux Amenagement Combles
        $work = new TypeWork();
        $work->setTitle("Aménagement Combles");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("verriere.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMPLET));
        // Creation reference 
        $this->addReference(self::TYPEWORK_AMENAGEMENT_COMBLES, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        

         // Type de travaux Isolations interieur
        $work = new TypeWork();
        $work->setTitle("Isolation Intérieur");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("faux_plafond.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMPLET));
        // Creation reference 
        $this->addReference(self::TYPEWORK_ISOLATION_INTERIEUR, $work);

        // Mise en memoire tampom
        $manager->persist($work);
        

        // Type de travaux Isolation exterieur
        $work = new TypeWork();
        $work->setTitle("Façade exterieur");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_FACADE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_FACADE_EXTERIEUR, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux Aménagement d'Espace intérieur
        $work = new TypeWork();
        $work->setTitle("Aménagement d'Espace intérieur");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMPLET));
        // Creation reference 
        $this->addReference(self::TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux Interieur Local Commercial
        $work = new TypeWork();
        $work->setTitle("Rénovation Intérieur de Local commercial");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMMERCE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_INTERIEUR_LOCAL_COMMERCIAL, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux Interieur Bureaux
        $work = new TypeWork();
        $work->setTitle("Rénovation Intérieur Bureaux");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMMERCE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_INTERIEUR_BUREAUX, $work);

        // Mise en memoire tampom
        $manager->persist($work);

         // Type de travaux facade Local commercial
        $work = new TypeWork();
        $work->setTitle("Rénovation Facade Local commercial");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMMERCE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_FACADE_LOCAL_COMMERCIAL, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux facade Bureaux
        $work = new TypeWork();
        $work->setTitle("Rénovation Facade Bureaux");
        $work->setDescription("So how did the classical Latin become so incoherent? According toMcClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order toprovide placeholder text to mockup various fonts for a type specimen book.");
        $work->setImageName("renovation_facade.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_COMMERCE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_RENOVATION_FACADE_BUREAUX, $work);

        // Mise en memoire tampom
        $manager->persist($work);

        // Type de travaux autres pièces
        $work = new TypeWork();
        $work->setTitle("Autres pièces");
        $work->setDescription("So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup variousfonts for a type specimen book.");
        $work->setImageName("verriere.jpg");
        $work->setUpdateAt(new DateTimeImmutable());
        
        // Appel reference
        $work->setCategory($this->getReference(CategoryFixtures::CATEGORY_ESTHETIQUE));
        // Creation reference 
        $this->addReference(self::TYPEWORK_AUTRES_PIECES, $work);

        // Mise en memoire tampom
        $manager->persist($work);


        // Mise dans la base de donnée
        $manager->flush();
    }

}
