<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/default', name: 'app_default')]

    public function index(): Response
    {
        $bonjour = "Bienvenue dans cette initiation à Symfony ! :)";
        # Vous ne pourrez JAMAIS rien écrire après le mot-clé "return"
        return $this->render('default/index.html.twig', [
            'bonjour' => $bonjour,
        ]);
    }
    // exemple 2 : Avec l'objet Response directement.
    /*
    * Attetion : ceci ne vaut que pour l'exemple, dans la réalité on ne procède pas de cette façon.
    * On ecrit jamais de html dans un controller!
    */
    #[Route('/', name: 'default_home')]
    public function home(): Response
    {
        return new Response(
            content: '<html><body><h1>Réponse du serveur grâce à l\'objet Response</h1></body></html>'
        );
    }
} // end class
