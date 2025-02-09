<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if ($this->getUser()) {
            $this->addFlash('success', 'Connexion réussie');
            return $this->redirectToRoute('home_index');
        }

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @throws Exception
     */
    #[Route('/logout', name: 'logout', methods: ['GET'])]
    public function logout(): Response
    {
        throw new Exception("Don't forget to activate logout in security.yaml");
    }
}
