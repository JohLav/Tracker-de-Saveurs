<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        // TODO : Suppr. Repository + Form & Utiliser app.user.firstname, app.user.lastname, etc. dans page Twig

        return $this->render('profil/profil.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
}
