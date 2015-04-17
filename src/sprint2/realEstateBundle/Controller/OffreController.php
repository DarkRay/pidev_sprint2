<?php

namespace sprint2\realEstateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\realEstateBundle\Entity\Adresse;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Form\OffreType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use sprint2\realEstateBundle\Models\Document;

/**
 * Offre controller.
 *
 */
class OffreController extends Controller
{

    /**
     * Lists all Offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('realEstateBundle:Offre')->findAll();
        $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleDistinct();
        $gouvernorat='';

        $session = $this->getRequest()->getSession();
        
          
        
        return $this->render('realEstateBundle:Offre:OffreCard.html.twig', array(
            'entities' => $entities,'villes'=>$villes,'gouvernorat'=>$gouvernorat

        ));
    }
    /**
     * Creates a new Offre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Offre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offre_show', array('id' => $entity->getId())));
        }

        return $this->render('realEstateBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Offre entity.
     *
     * @param Offre $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Offre $entity)
    {
        $form = $this->createForm(new OffreType(), $entity, array(
            'action' => $this->generateUrl('offre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Offre entity.
     *
     */
    public function newAction()
    {
        $latitude='-24';
        $longitude='142';
        $adr='Australie';
        

        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if ($hasCompte && $session->get('type') == "Gerant") {

        $entity = new Offre();
        $em = $this->getDoctrine()->getManager();
        $gouvernorats=$em->getRepository('realEstateBundle:Adresse')->findGouvernorat(24);
        $request = $this->container->get('request');
        $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>'ariana'));
        $codes=$em->getRepository('realEstateBundle:Adresse')->findCodeVille(array('ville'=>'Raoued')); 
        $adresse=new Adresse();

            $erreur=false;

        if($request->getMethod()=="POST"){
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
            $urlimage=$this->upload();
            $idGerant=$session->get('compte')->getId();
            $codepostal=$request->get('code');
           
            $adresse  = $em->getRepository('realEstateBundle:Adresse')->findOneBy(array('codepostal'=>$codepostal));
           
            //return new Response ($adresse[0]->getId());
            $entity->setClimatisation($clim);
            $entity->setMeuble($meuble);
            $entity->setGazdeville($gaz);
            $entity->setChauffage($chauf);
            $entity->setEntreeindep($acc);
            $entity->setJardin($jar);
            $entity->setCuisineequipe($cuis);
            $entity->setAscenceur($asc);
            $entity->setEtat($etat);
            $entity->setTypeimmob($typeimmob);
            $entity->setNature($nature);
            $entity->setNbrpiece($nbrpiece);
            $entity->setUrlimage($urlimage);
            $entity->setIdGerant($idGerant);
            $entity->setSurface($surface);
            $entity->setAdresse($adresse);
            $entity->setPayement($prix);
            $entity->setPosition("48.829677,2.331086");

            $validator = $this->get('validator');

            $errorList = $validator->validate($entity);

            
            if (count($errorList) > 0) {
             $erreur=true;
                return $this->render('realEstateBundle:Offre:new.html.twig', array(
                    'entity' => $entity,
                    'gouvernorats'=>$gouvernorats,
                    'villes'=>$villes,
                    'codes'=>$codes,
                    'erreur'=>$erreur,
                ));

            } else {
               $em->persist($entity);
               $em->flush();
               return $this->redirect($this->generateUrl('offre_show', array('id' => $entity->getId())));
            }
        }
        
        return $this->render('realEstateBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'gouvernorats'=>$gouvernorats,
            'villes'=>$villes,
            'codes'=>$codes,
            'erreur'=>$erreur,
            'latitude'=>$latitude,
            'longitude'=> $longitude,'adr'=>$adr
        ));

        }
        else{
            return $this->redirect($this->generateUrl('sprint2_authandlog_login'));
        }
        
    }

    /**
     * Finds and displays a Offre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        
        $gerant=$em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($entity->getIdGerant());

        
        $idUser =1; //normalement m session
        $countNbOffr=0;

        // nombre de vote
        $qb =  $em->createQueryBuilder();
        $qb->select('count(Vote.idOffre)');
        $qb->from('realEstateBundle:Vote','Vote');
        $countNbOffre = $qb->getQuery()->getSingleScalarResult();
        if($countNbOffre==0)
            $countNbOffre=1;
        //note
        $qb->select('SUM(V.note)');
        $qb->from('realEstateBundle:Vote','V');
        $qb->where('V.idOffre = :id');
        $qb->setParameter('id', $id);
        $note = $qb->getQuery()->getSingleScalarResult();
        $note=$note/$countNbOffre;

        $vote=$em->getRepository('realEstateBundle:Vote')->findBy(array('idOffre'=>$id,'idUtilisateur'=>$idUser));
            
         if($vote !=null)
            $found=true;
         else
            $found=false;

        return $this->render('realEstateBundle:Offre:show.html.twig', array(
            'entity'      => $entity,
            'found' => $found,
            'countNbOffre' => $countNbOffre,
            'note'=>$note,
            'gerant'=>$gerant,
        ));
        /*
        $vote=$em->getRepository('realEstateBundle:Offre')->findBY('idOffre'=>$id);
        $userID=$vote->getIdUtilisateur();
        */


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('realEstateBundle:Offre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Offre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('realEstateBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Offre entity.
    *
    * @param Offre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Offre $entity)
    {
        $form = $this->createForm(new OffreType(), $entity, array(
            'action' => $this->generateUrl('offre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Offre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }

        return $this->render('realEstateBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Offre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('realEstateBundle:Offre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('offre'));
    }

    /**
     * Creates a form to delete a Offre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }







//rechercher Par gouvernorat avec la methode POST Or get

    public function searchGouvernoratAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $entities = $em->getRepository('realEstateBundle:Offre')->findAll();
        
        if ($request->getMethod() == "POST") {  
            $gouvernorat=$request->get('gouvernorat')  ;
            $adresse  = $em->getRepository('realEstateBundle:Adresse')->findBy(array('gouvernorat'=>$gouvernorat));
            $entities = $em->getRepository('realEstateBundle:Offre')->findBy(array('Adresse' => $adresse));
            $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
        }
       if($request->getMethod() == "GET"){
            $gouvernorat=$request->get('gouvernorat')  ;
            $adresse  = $em->getRepository('realEstateBundle:Adresse')->findBy(array('gouvernorat'=>$gouvernorat));
            $entities = $em->getRepository('realEstateBundle:Offre')->findBy(array('Adresse' => $adresse));
            $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
        
       }
        return $this->render('realEstateBundle:Offre:OffreCard.html.twig', array(
            'entities' => $entities,'villes'=>$villes,'gouvernorat'=>$gouvernorat

        ));
    }

    public function searchAjaxAction(){

         $request = $this->container->get('request');
         $em = $this->getDoctrine()->getManager();
         $entities = $em->getRepository('realEstateBundle:Offre')->findAll();
         /*
            get deffirent responses from the request type
         */
           $entitie_room=array();
           $entitie_Etat=array();
           $roomType=$request->get('room_types');
           $etat=$request->get('Etat');
           $max=$request->get('maxprice');
           $min=$request->get('minprice');
           $chambre=$request->get('min_bedrooms');

           if($max === null){
                $max="100000";
           }
           if($min===null){
                $min="0";
           }
         if($request->isXmlHttpRequest()){
            
                if($roomType!=-1&&$roomType!==null)
                    $entitie_room=$em->getRepository('realEstateBundle:Offre')->findBy(array('typeimmob'=>$roomType));
                else
                     $entitie_room = $em->getRepository('realEstateBundle:Offre')->findAll();
               
                if($etat!=-1&&$etat!==null)
                    $entitie_Etat=$em->getRepository('realEstateBundle:Offre')->findBy(array('etat'=>$etat));
                else
                   $entitie_Etat=$em->getRepository('realEstateBundle:Offre')->findAll();

                if($chambre!=-1&&$chambre!==null)
                    $entitie_chambre=$em->getRepository('realEstateBundle:Offre')->findBy(array('nbrpiece'=>$chambre));
                else
                    $entitie_chambre=$em->getRepository('realEstateBundle:Offre')->findAll();

                    $entities_price=(array)$this->searchByPrice($min,$max);
                    $entities_roomA=(array)$entitie_room;
                    $entities_roomE=(array)$entitie_Etat;
                    $entities_chambre=(array)$entitie_chambre;

                    $entities_RE=$this->intersection($entities_roomA,$entities_roomE);
                    $entities_REC=$this->intersection($entities_RE,$entities_chambre);

                    $entities=$this->intersection($entities_price,$entities_REC);
       
                    return $this->container->get('templating')->renderResponse('realEstateBundle:Offre:offreCards.html.twig', array(
                     'entities' => $entities
                    ));

        }
        return  new Response("<p>".count($entities_roomE)."</p>");
    }


    public function searchByPrice($min,$max){

        $request=$this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        

        $query = $em->createQuery(
                'SELECT o
                FROM realEstateBundle:Offre o
                WHERE o.payement BETWEEN ?1 AND ?2
               '
            )->setParameter(1,$min)
            ->setParameter(2,$max);

            $entities = $query->getResult();

         return $entities;

    }

    public function intersection($arr1,$arr2){
        $result=array();
        foreach($arr1 as $ob)
            foreach($arr2 as $obj){
                if ($obj->getId()==$ob->getId())
                    array_push($result,$obj);
            }

            return $result;
    }

    public function searchVilleAction(){
         $request = $this->container->get('request');
         $em = $this->getDoctrine()->getManager();
         $gouvernorat=$request->get('gouvernorats');
         $villes=$em->getRepository('realEstateBundle:Adresse')->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
          
         if($request->isXmlHttpRequest()){

            return $this->container->get('templating')->renderResponse('realEstateBundle:Offre:Filtres/ville.html.twig', array(
                     'villes' => $villes
                    ));
         }

    }

    public function searchCodeAction(){
         $request = $this->container->get('request');
         $em = $this->getDoctrine()->getManager();
         $ville=$request->get('Villes');
         $codes=$em->getRepository('realEstateBundle:Adresse')->findCodeVille(array('ville'=>$ville));   
         if($request->isXmlHttpRequest()){

            return $this->container->get('templating')->renderResponse('realEstateBundle:Offre:Filtres/code.html.twig', array(
                     'codes' => $codes
                    ));
         }

    }

        public function upload() {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    return "http://localhost/image/". basename( $_FILES["fileToUpload"]["name"]);
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
}

        }  
    

   function str_random($length = 16)
   {
       $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

       return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
   }
   

}
