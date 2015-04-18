<?php
namespace sprint2\restBundle\Handler;

    
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;

use sprint2\realEstateBundle\Entity\Adresse;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Form\OffreType;
use sprint2\realEstateBundle\Models\Document;

class offreHandler 
{

    private $om;
    private $offreClass;
    private $repository;
    private $formFactory;

    // ..
    public function __construct(ObjectManager $om, $offreClass, FormFactoryInterface $formFactory)
    {
        $this->om = $om;
        $this->offreClass = $offreClass;
        $this->repository = $this->om->getRepository($this->offreClass);
        $this->formFactory = $formFactory;
    }


     /**
     * Get a list of offres.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return arra
     */
    public function getAll($limit = 5, $offset = 0)
    {
        return $this->repository->findAll();
    }

    /**
     * Get an offre.
     *
     * @param mixed $id
     *
     * @return offre
     */
    public function get($id)
    {
        return $this->repository->find($id);
    }

     /**
     * Create a new Offre.
     *
     * @param Request $parameters
     *
     * @return Offre
     */
    public function post(Request $parameters)
    {
        $offre = new Offre(); // factory method create an empty Page

        // Process form does all the magic, validate and hydrate the Page Object.
        return $this->processForm($offre, $parameters, 'POST');
    }

    /**
     * Processes the form.
     *
     * @param Offre $offre
     * @param Request         $request
     * @param String        $method
     *
     * @return Offre
     *
     * 
     */
    private function processForm(Offre $offre, Request $request, $method = "POST")
    {
            
            $prix=$request->get('prix');
            $surface=$request->get('surface');
            $typeimmob=$request->get('typeimmob');
            $nature=$request->get('nature');
            $nbrpiece=$request->get('nbrpiece');
            $etat=$request->get('etat');
            $asc=$request->get('Ascenseur');
            $cuis=$request->get('Cuisine');
            $jar=$request->get('Jardin');
            $acc=$request->get('Acces');
            $gaz=$request->get('Gaz');
            $chauf=$request->get('Chauffage');
            $meuble=$request->get('Meuble');
            $clim=$request->get('Climatise');
            $urlimage=$request->get('urlImage');
            $idGerant=$request->get('id_gerant');
            $codepostal=$request->get('code');
           
            $adresse  =  $this->om->getRepository('realEstateBundle:Adresse')->findOneBy(array('codepostal'=>$codepostal));
           
            //return new Response ($adresse[0]->getId());
            $offre->setClimatisation($clim);
            $offre->setMeuble($meuble);
            $offre->setGazdeville($gaz);
            $offre->setChauffage($chauf);
            $offre->setEntreeindep($acc);
            $offre->setJardin($jar);
            $offre->setCuisineequipe($cuis);
            $offre->setAscenceur($asc);
            $offre->setEtat($etat);
            $offre->setTypeimmob($typeimmob);
            $offre->setNature($nature);
            $offre->setNbrpiece($nbrpiece);
            $offre->setUrlimage($urlimage);
            $offre->setIdGerant($idGerant);
            $offre->setSurface($surface);
            $offre->setAdresse($adresse);
            $offre->setPayement($prix);
            $offre->setPosition("48.829677,2.331086");

      

            $this->om->persist($offre);
            $this->om->flush($offre);

            return $offre;
        
    }



}