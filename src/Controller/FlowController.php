<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FlowController extends AbstractController
{
    #[Route('/v1/flows', methods: ['POST'])]
    public function createFlow(): Response
    {
        throw new HttpException("Not implemented");
    }

    #[Route('/v1/flows/search', methods: ['POST'])]
    public function searchFlow(): Response
    {
        return $this->json([]);
    }

    #[Route('/v1/flows/{flowId}', methods: ['GET'])]
    public function getFlow(string $flowId): Response
    {
        throw $this->createNotFoundException();
    }
}
