<?php

namespace App\Controller\Api;

use App\Entity\Software;
use App\Form\SoftwareCustomerType;
use App\Repository\SoftwareRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SoftwareApiController extends AbstractController{
    #[Route('/api/produits', name: 'app_api_allSoftware')]
    public function index(Request $request, SoftwareRepository $softwareRepository): Response
    {
        $softwareList = $softwareRepository->findAllProducts();
         return $this->json($softwareList);
    }

    #[Route('/produit/{id}/edit', name: 'software.edit')]
    public function editProduct(Software $software): Response
    {
        $formSoftwareCustomer = $this->createForm(SoftwareCustomerType::class, $software);
        return $this->render('software/customerSoftware.html.twig',[
            'produit'=> $software,
            'editSoftware'=> $formSoftwareCustomer
        ]);
    }
}
