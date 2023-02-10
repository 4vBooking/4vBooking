<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Bungalow;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;

class BungalowController extends AbstractController{
    
     public function __constructor(ManagerRegistry $doctrine){
      //  $this->doctrine = $doctrine;        
    }

#[Route('/bungalow', name: 'create_bungalow')]
public function createBungalow(Request $request):Response{
    $data = $request->getContent();
    $content = json_decode($data);
    
    
    
    $em = $this->getDoctrine()->getManager();
    
    $bungalow= new Bungalow();
    $en->persist($product);
    $en->flush();
    
    $result = [
        
    ];
    return $this->json([$result]);
}

    #[Route('/bungalow-list', name: 'app_bungalow_list')]
    public function bungalowlist(ManagerRegistry $doctrine): Response
    {
        $bungalows = $doctrine->getRepository(Bungalow::class)->findAll();    
        $bungalows_json=[];
        $tmp=[];
        foreach ($bungalows as $bungalow){
            $tmp = [
                "id" => $bungalow->getId(),
                "id_zona" => $bungalow->getIdZona(),
                "title" => $bungalow->getTitle(),
                "price" => $bungalow->getPrice(),
                "people_cantity" => $bungalow->getPeopleCantity(),
                "description" => $bungalow->getDescription(),
                "image" => $bungalow->getImage()
                
            ];
            $bungalows_json[] = $tmp;
        }
        return $this->json(
            $bungalows_json
        );
    }

    #[Route('/bungalow-list/{id}', name: 'app_bungalow_details')]
    public function bungalowdetails(  $id,ManagerRegistry $doctrine): Response
    {
        //$bungalow = $doctrine->getRepository(bungalow::class)->find($id);
        $bungalow = $doctrine->getRepository(Bungalow::class)->findOneBy([
            "id" => $id
        ]);        
        $bungalow_json = [
                "image" => $bungalow->getImage(),
                "title" => $bungalow->getTitle(),
                "price" => $bungalow->getPrice(),
                "description" => $bungalow->getDescription(),
                "people_cantity" => $bungalow->getPeopleCantity()
        ];       
        return $this->json(
            $bungalow_json 
        );
    }
    
    #[Route('/bungalow/{id}/{id_zona}/{title}/{price}/{people_cantity}/{description}/{image}', name: 'app_bungalow_edit')]
    public function bungalowedit(  $id,$name  ,   ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $bungalow = $doctrine->getRepository(Bungalow::class)->findOneBy([
            "id" => $id
        ]); 
        $bungalow->setId_zona($name);
        $bungalow->setTitle($title);
        $bungalow->setPrice($price);
        $bungalow->setPeople_cantity($people_cantity);
        $bungalow->setDescription($description);
        $bungalow->setImage($image);
        // Actualizamos el valor
        $em->persist($bungalow);
        $em->flush();
        $bungalow1 = $doctrine->getRepository(Bungalow::class)->findOneBy([
            "id" => $id
        ]);
        $bungalow_json = [
                "id" => $bungalow1->getId(),
                "title" => $bungalow->getTitle(),
                "price" => $bungalow->getPrice(),
                "description" => $bungalow->getDescription(),
                "people_cantity" => $bungalow->getPeopleCantity(),
                "image" => $bungalow->getImage()
        ];       
        return $this->json([
            "bungalow" => $bungalow_json 
        ]);
    }

    #[Route('/bungalow', name: 'app_bungalow')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BungalowController.php',
        ]);
    }
}

