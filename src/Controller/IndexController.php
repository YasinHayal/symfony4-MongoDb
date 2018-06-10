<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Document\User;
class IndexController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {   

    	// MongoDb İnsert Item

      
    	$product = new User();
    	$product->setFirstname('Yasin');


    	$dm = $this->get('doctrine_mongodb')->getManager();
    	$dm->persist($product);
    	$dm->flush();
    	

        return $this->render('index/index.html.twig', [
            'mongo' => $product->getFirstname(),
        ]);

        
    }
}
