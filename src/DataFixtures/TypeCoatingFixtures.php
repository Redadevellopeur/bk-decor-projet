<?php

namespace App\DataFixtures;

use App\Entity\TypeCoating;
use App\DataFixtures\CategoryFixtures;
use App\DataFixtures\TypeWorkFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class TypeCoatingFixtures extends Fixture implements DependentFixtureInterface
{
// ====================================================== //
// =========================PROPRIETES=================== //
// ====================================================== //

// public const TYPEWORK_RENOVATION_SALLE_DE_BAIN = "Renovation salle de bain";
// public const TYPEWORK_RENOVATION_CUISINE = "Rénovation-Cuisine";
// public const TYPEWORK_SOL_MURS_PLAFONDS = "Sol-Murs-Plafonds";
// public const TYPEWORK_AMENAGEMENT_COMBLES = "Aménagement combles";
// public const TYPEWORK_ISOLATION_INTERIEUR = "Isolations intérieur";
// public const TYPEWORK_FACADE_EXTERIEUR = "Façade exterieur";
// public const TYPEWORK_SALON = "Salon";
// public const TYPEWORK_AUTRES_PIECES = "Autres pièces";
// public const TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR = "Aménagement espace d'intérieur";
// public const TYPEWORK_RENOVATION_FACADE_BUREAUX = "Rénovation facade de bureaux";
// public const TYPEWORK_RENOVATION_FACADE_LOCAL_COMMERCIAL = "rénovation facade local commercial ";
// public const TYPEWORK_RENOVATION_INTERIEUR_BUREAUX = "Rénovation intérieur bureaux";
// public const TYPEWORK_RENOVATION_INTERIEUR_LOCAL_COMMERCIAL = "Rénovation intérieur local commercial";


// ====================================================== //
// =======================METHODES======================= //
// ====================================================== //

    public function load(ObjectManager $manager): void
    {
        // Type de revetement Sol 
        // Type Beton Ciré
        $coating = new TypeCoating();
        $coating->setTitle("Béton ciré");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Carrelage
        $coating = new TypeCoating();
        $coating->setTitle("Carrelage");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Parquet et rénovation de parquet
        $coating = new TypeCoating();
        $coating->setTitle("Parquet et rénovation de parquet");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Sol stratifié et Sol PVC
        $coating = new TypeCoating();
        $coating->setTitle("Sol stratifié et Sol PVC");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Peinture de Sol
        $coating = new TypeCoating();
        $coating->setTitle("Peinture de Sol");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        //Type de revetement Mural
        // Type Lambris
        $coating = new TypeCoating();
        $coating->setTitle("Lambris");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Parement
        $coating = new TypeCoating();
        $coating->setTitle("Parement");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Papier peint 
        $coating = new TypeCoating();
        $coating->setTitle("Papier peint");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Carrelage 
        $coating = new TypeCoating();
        $coating->setTitle("Carrelage");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_RENOVATION_CUISINE));
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));

        // Type Faience
        $coating = new TypeCoating();
        $coating->setTitle("Faience");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_RENOVATION_SALLE_DE_BAIN));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Liège
        $coating = new TypeCoating();
        $coating->setTitle("Liège");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Enduit Muraux
        $coating = new TypeCoating();
        $coating->setTitle("Enduit Muraux");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Enduit à Chaux
        $coating = new TypeCoating();
        $coating->setTitle("Enduit à Chaux");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Crépi
        $coating = new TypeCoating();
        $coating->setTitle("Crépi");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_FACADE_EXTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Verriere
        $coating = new TypeCoating();
        $coating->setTitle("Verrière");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Cloison
        $coating = new TypeCoating();
        $coating->setTitle("Cloison");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Démolition de Mur
        $coating = new TypeCoating();
        $coating->setTitle("Démolition de Mur");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_AMENAGEMENT_ESPACE_INTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type faux-Plafond
        $coating = new TypeCoating();
        $coating->setTitle("Faux-plafond");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit   Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_SOL_MURS_PLAFONDS));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        //Type de revetement Facade
        // Type Bardage
        $coating = new TypeCoating();
        $coating->setTitle("Bardage");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_FACADE_EXTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Enduit ou Crépi 
        $coating = new TypeCoating();
        $coating->setTitle("Enduit ou Crépi");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_FACADE_EXTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Isolation thermique par exterieur
        $coating = new TypeCoating();
        $coating->setTitle("Isolation thermique par exterieur");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_FACADE_EXTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);

        // Type Ravalement
        $coating = new TypeCoating();
        $coating->setTitle("Ravalement");
        $coating->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit.Namhendreritnisisedsollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.");
        // Appel reference
        $coating->setTypeWork($this->getReference(TypeWorkFixtures::TYPEWORK_FACADE_EXTERIEUR));
        
        // Mise en memoire tampom
        $manager->persist($coating);


        // Mise dans la base de donnée
        $manager->flush();
    }

    // Appel de la function fixture Work avant Coating
    public function getDependencies()
    {
        return[
            TypeWorkFixtures::class,
        ];
    }
}
