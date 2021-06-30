<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Repository\AnnonceRepository;
use App\Repository\CommentRepository;
use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonces", name="annonces_index")
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonceRepository->findAll()
        ]);
    }

    /**
     * @Route("/view/{id}", name="annonce_view")
     */
    public function viewAnnonce(int $id, AnnonceRepository $annonceRepository): Response
    {
        $annonce = $annonceRepository->find($id);
        $images = $annonce->getImages();
        $comments = $annonce->getComments();

        if(!$annonce){
            throw $this->createNotFoundException(
                'Aucune annonce pour id' .$id);
            
        }
        return $this->render('annonce/view.html.twig',[
            'annonce' => $annonce,
            'images' => $images,
            'comments' =>$comments,

        ]);

    }

    /**
     * @Route("/annonce/new", name="create_annonce")
     */
    public function createAnnonce(Request $resquest): Response
    {
        //$annonce = new Annonce();

        $form = $this->createFormBuilder()
             ->add('title', TextType::class)
             ->add('slug', TextType::class)
             ->add('description', TextareaType::class)
             ->add('price',IntegerType::class)
             ->add('adress', TextType::class)
             ->add('roms', TextType::class)
             ->add('introduction', TextType::class)
             ->add('save', SubmitType::class, ['label' => 'Creer Annonce'])
             ->getForm();

        $form->handleRequest($resquest);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $data = $form->getData();
            $annonce = new Annonce();
            $annonce->setTitle($data['title']);
            $annonce->setSlug($data['slug']);
            $annonce->setDescription($data['description']);
            $annonce->setPrice($data['price']);
            $annonce->setAdress($data['adress']);
            $annonce->setIsavailable(mt_rand(0,1));
            $annonce->setIntroduction($data['introduction']);
            $annonce->setRoms($data['roms']);
            $annonce->setImage('https://picsum.photos/768/400?random=' . mt_rand(1,200));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('annonces_index');
            
        }

        return $this->render('annonce/new.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/edit/{id}", name="edit_annonce")
     */
    public function editAnnonce(Request $request, $id)
    {
        $annonce = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $annonce->find($id);

        if(!$annonce)
        {
            throw $this->createNotFoundException(
                ' Aucune annonce avec identifiant id'.$id
            );
        }

        $form = $this->createFormBuilder()
             ->add('title', TextType::class)
             ->add('slug', TextType::class)
             ->add('description', TextareaType::class)
             ->add('price',IntegerType::class)
             ->add('adress', TextType::class)
             ->add('roms', TextType::class)
             ->add('introduction', TextType::class)
             ->add('save', SubmitType::class, ['label' => 'Modifier Annonce'])
             ->getForm();

        $form->handleRequest($request);

       if ($form->isSubmitted())
       {
        $em = $this->getDoctrine()->getManager();
        $annonce = $form->getData();
        $em->flush();
        return $this->redirectToRoute('annonces_index');
       }

       return $this->render('annonce/edit.html.twig',[
           'form' =>$form->createView(),
       ]
    );
    
    }

    /**
     * @Route("/delete/{id}", name="delete_annonce")
     */
    public function deleteAnnonce($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $annonce->find($id);

        if(!$annonce)
        {
            throw $this->createNotFoundException(
                'Il y a pas annonce avec identifiant :'.$id
            );
        }
        
        $em->remove($annonce);
        $em->flush();

        //return $this->redirectToRoute('');

    }

    /**
     * @Route("/list", name="annonce_list")
     */
    public function listAnnonce()
    {
        $annonces = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $annonces->findAll();

        return $this->render('annonce/list.html.twig',
        array('annonces' => $annonces)
    );
    }
    
}
