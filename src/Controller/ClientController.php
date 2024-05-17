<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/client/dashboard", name="client_dashboard")
     */
    public function index(): Response
    {
        return $this->render('client/dashboard.html.twig', [
            'message' => 'Bonjour Client',
        ]);
    }
}
