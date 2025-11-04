<?php

namespace App\Controller\Api;;

use App\Repository\ClientsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class CustomerApiController extends AbstractController
{
    #[Route('/api/customers', name: 'app_api_customer',methods: ['GET'])]

    public function index(Request $request, ClientsRepository $clientsRepository, EntityManagerInterface $em): JsonResponse
    {
        
        $customerList = $clientsRepository->findAllCustomerOrderByName();
        $data = json_encode($customerList);
         return $this->json([$data
        ]);
    }
}
