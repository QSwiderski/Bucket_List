<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');

    }

    #[Route('/about_us', name: 'about_us')]
    public function about_us(): Response
    {
        $file = '../team.json';
        $data = file_get_contents($file);
        $obj = json_decode($data, true);


        return $this->render('About-us.html.twig', [
            'json' => $obj
        ]);

    }

}
