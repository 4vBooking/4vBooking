<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
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
    
    /**
     * @Route("/bungalow-list/{id}/update", name="bungalow-update", methods="put")
     */
    public function bungalowedit($id, Request $request): Response
    {
        $em = $this->doctrine->getManager();

        $data = $request->getContent();
        $content = json_decode($data);
        $bungalow_stdClass = $content->bungalow;

        $bungalow = $this->getDoctrine()->getRepository(Bungalow::class)->find($id);
        $bungalow->setId_zona($bungalow_stdClass->id_zona);
        $bungalow->setTitle($bungalow_stdClass->title);
        $bungalow->setPrice($bungalow_stdClass->price);
        $bungalow->setPeople_cantity($bungalow_stdClass->people_cantity);
        $bungalow->setDescription($bungalow_stdClass->description);
        $bungalow->setImage($bungalow_stdClass->image);
        // Actualizamos el valor
        $em->flush();
        
        return $this->json([
            "message" => "Bungalow update",
            $bungalow_stdClass
        ]);
    }
    /**
     * @Route("/bungalow/{id}/delete", name="bungalow-delete", methods="delete")
     */
    public function productDelete($id){

        $em = $this->doctrine->getManager();
        $bungalow = $this->getDoctrine()->getRepository(Bungalow::class)->find($id);

        $em->remove($bungalow);
        $em->flush();

        return $this->json([
            "message" =>"Bungalow deleted"
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

