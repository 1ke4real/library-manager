<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VueController extends AbstractController
{
    #[Route('/{route}', name: 'vue_index', requirements: ['route' => '.+'])]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
