<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AutoRotateController extends AbstractController
{
    /**
     * @Route("/auto_rotate", name="auto_rotate")
     */
    public function index(): Response
    {
        return $this->render('auto_rotate.html.twig');
    }
}
