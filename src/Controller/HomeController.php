<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        'application' => 'TaskFlow',
        'slogan' => 'Organisez vos projets simplement',
        ]);
    }
    #[Route('/apropos', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }
    #[Route('/bonjour/{prenom}', name: 'app_hello')]
    public function hello(string $prenom): Response
    {
        return $this->render('home/hello.html.twig', [
        'prenom' => $prenom,
        ]);
    }
}
