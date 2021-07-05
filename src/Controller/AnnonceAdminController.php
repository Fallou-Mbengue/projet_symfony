<?php

namespace App\Controller;

use App\Entity\Annonce;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceAdminController extends AbstractController
{
    /**
     * @Route("/annonce/admin", name="annonce_admin")
     */
    public function index(): Response
    {
        
        $annonces = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $annonces->findAll();

        return $this->render('annonce_admin/index.html.twig',
        array('annonces' => $annonces)
    );
    }
}
