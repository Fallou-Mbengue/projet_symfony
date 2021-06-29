<?php

namespace App\DataFixtures;

use App\Entity\Annonce;
use App\Entity\Comment;
use App\Entity\Image;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Cocur\Slugify\Slugify;

class AppFixtures extends Fixture {
    public function load( ObjectManager $manager )  {
        $faker = Factory :: create( 'fr_FR' );
        $sluger = new Slugify();
        for ( $i = 1; $i < 19; $i++ )  {
            $annonce = new Annonce();
            $annonce->setTitle( $faker->sentence( 3, false ) );
            $annonce->setIntroduction($faker->sentence(5));
            //$annonce->setSlug( $sluger->slugify( $annonce->getTitle() ) );
            $annonce->setDescription( $faker->text( 400 ));
            $annonce->setDate( $faker->dateTimeBetween( '-3 month', 'now' ) );
            $annonce->setPrice( mt_rand( 30000, 60000 ) );
            $annonce->setAdress($faker->address() );
            $annonce->setImage( 'https://picsum.photos/768/400?random=' . mt_rand(1,5000) );
            $annonce->setRoms( mt_rand( 0, 5 ) );
            $annonce->setIsavailable( 0, 1 );

            for ( $j = 1; $j<19; $j++ ) {
                $comment = new Comment();
                $comment->setAutor($faker->name());
                $comment->setEmail($faker->email());
                $comment->setContent($faker->text(200));
                $comment->setCreatedAt($faker->dateTimeBetween('-3 month', 'now'));
                $comment->setAnnonce($annonce);
                //$manager->persist($comment);
                $annonce->addComment($comment);

            }

            for($k = 1; $k<10; $k++){
                $image = new Image();
                $image->setImageUrl('https://picsum.photos/768/400?random=' . mt_rand(1,5000));
                $image->setDescription($faker->sentence());
                $image->setAnnonce($annonce);
                //$manager->persist($image);
                $annonce->addImage($image);

            }

            //Persiste à doctrine d'enregistrer dans la base de donnée
            $manager->persist( $annonce );
            
        }

        // exécute l'enregistrement dans la base de donner
            $manager->flush();

        }

    }

