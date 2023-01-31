<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    #[Route('/wishlist', name: 'wishlist')]
    public function wishlist(): Response
    {
        return $this->render('wish/list.twig', [
            'controller_name' => 'WishController',
        ]);
    }


    #[Route('/wishdetails', name: 'wishdetails')]
    public function wishdetails(): Response
    {
        return $this->render('wish/details.twig', [
            'controller_name' => 'WishController', ]);

    }
}


