<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ProductApiController extends AbstractController
{
    #[Route('/api/products', name: 'api_products', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            [
                'title' => 'Sample Product',
                'description' => 'This is a sample product description.',
            ],
            [
                'title' => 'Another Product',
                'description' => 'Another example description.',
            ],
        ]);
                /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductApiController.php',
        ]);*/
    }
}
