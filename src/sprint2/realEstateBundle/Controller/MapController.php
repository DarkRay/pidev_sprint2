<?php

namespace sprint2\realEstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapController extends Controller{
   public function indexAction()

    {
        $request = $this->getRequest();
        if ($request->getMethod()=="POST" ){ 
            
            
            $latitude = $request->get('lat');
            $longitude = $request->get('long');    
            $adr = $request->get('adr'); 
            
            return $this->render('realEstateBundle:Offre:base1.html.twig', array('latitude'=>$latitude,
            'longitude'=> $longitude,'adr'=>$adr));
        }
        $latitude='-24';
        $longitude='142';
        $adr='Australie';
        return $this->render('realEstateBundle:Offre:base1.html.twig', array('latitude'=>$latitude,
            'longitude'=> $longitude,'adr'=>$adr));
	
    }
   
}