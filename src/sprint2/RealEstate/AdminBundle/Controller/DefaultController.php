<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormError;
use sprint2\RealEstate\AdminBundle\Models\Document;
use sprint2\RealEstate\AdminBundle\Entity\Utilisateur;
use sprint2\RealEstate\AdminBundle\Entity\Offre;
use sprint2\RealEstate\AdminBundle\Entity\Administrateur;
use sprint2\RealEstate\AdminBundle\Form\AjoutAForm;
use sprint2\RealEstate\AdminBundle\Form\AjouCForm;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
            $utilisateur_last_6_gerants= $this->getDoctrine()
            ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
            ->findBy(array('role'=>1));
            $utilisateur_last_6_client= $this->getDoctrine()
            ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
            ->findBy(array('role'=>2));
            $offre_last_6= $this->getDoctrine()
            ->getRepository('sprint2RealEstateAdminBundle:Offre')
            ->findAll();
            $Agance= $this->getDoctrine()
            ->getRepository('sprint2RealEstateAdminBundle:Agence')
            ->findAll();

            $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
            $countmail4 = count($listofmailt4);
            $Image = $this->get_gravatar($session->get('compte')->getMail());
            return $this->render('sprint2RealEstateAdminBundle:Default:index.html.twig',
                    array('utilisateurg'=>array_slice($utilisateur_last_6_gerants,-8), 
                        'utilisateurc'=>array_slice($utilisateur_last_6_client,-8), 
                        'offre'=>array_slice($offre_last_6,-5),
                        'utilisateurgn'=>count($utilisateur_last_6_gerants),
                        'utilisateurcn'=>count($utilisateur_last_6_client),
                        'offren'=>count($offre_last_6),
                        'agancen'=>count($Agance),
                        'agance'=>array_slice($Agance,-5),
                        'image'=>$Image,
                        'countmail4'=>$countmail4));
    }else{
        $this->getRequest()->getSession()->clear();
        return $this->redirect('Login');
    }
    
        }
    
    public function mailAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        
        return $this->render('sprint2RealEstateAdminBundle:Pages:mail.html.twig',
        	array('image'=>$Image));
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    public function sentAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        return $this->render('sprint2RealEstateAdminBundle:Pages:sentmail.html.twig',
        	array('image'=>$Image));
        }else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }

    }

    public function clientsAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            if($request1->get('Submit')=="Modifier"){
                $idx=$request1->get('id');
                $mailx=$request1->get('mail');
                $nomx=$request1->get('nom');
                $prenomx=$request1->get('prenom');
                $statmatrix=$request1->get('statmatri');

                $em1 = $this->getDoctrine()->getManager();
                if($request1->get('id')== NULL){
                   $idx= "0";
                }else{
                    $idx= $request1->get('id');
                }
                $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);

                $utilisateurx->setMail($mailx);
                $utilisateurx->setNom($nomx);
                $utilisateurx->setPrenom($prenomx);
                $utilisateurx->setStatusMatrimonial($statmatrix);

                $em2=$this->getDoctrine()->getManager();
                $em2->persist($utilisateurx);
                $em2->flush();   
                return $this->redirect('Clients');
    //            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
    //                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
            }
            elseif ($request1->get('Submit')=="Envoier") {
                
                $idxc=$request1->get('idxc');
                $mailxc=$request1->get('mailxc');
                $subxc=$request1->get('subxc');
                $bodyxc=$request1->get('bodyxc');
                $this->sendMail($mailxc, "", $subxc, $bodyxc);
                $emS = $this->getDoctrine()->getManager();
                $destinataire = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idxc);
                $expediteur = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find("0");
                $mailx= new \sprint2\RealEstate\AdminBundle\Entity\Boitemessages();
                $mailx->setIdDestinataire($destinataire);
                $mailx->setVu("0");
                $mailx->setContenu($bodyxc);
                $mailx->setIdExpediteur($expediteur);  
                

                $em=$this->getDoctrine()->getManager();
                $em->persist($mailx);
                $em->flush();  
                return $this->redirect('Clients');
                return $this->redirect('Gerants');
                
            
        }
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>2));
        
        $utilisateurf=new Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\Form\AjouCForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);
        $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail4 = count($listofmailt4);
        if($form->isValid())
        {
            
            
            try {
                $cvbnnnn = $this->upload($utilisateurf->getImage());
                $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
                $utilisateurf->setNumfix(NULL);
                $utilisateurf->setNummobile(NULL);
                $utilisateurf->setRole("2");
                $utilisateurf->setUrlp($cvbnnnn);

                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateurf);
                $em->flush();
            } catch(\Exception $e) {
//                die($e->getMessage());
                $findme   = "'mail'";
                $pos = strpos($e->getMessage(), $findme);
                if( $pos !== false )
                {
                    $form->get('mail')->addError(new FormError("L'adresse e-mail existe déjà"));                    
                    return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
                        array('utilisateur'=>$utilisateur, 'form'=>$form->createView(), 'image'=>$Image,
                        'countmail4'=>$countmail4));              
                }
            }           
        }
        
        return $this->render('sprint2RealEstateAdminBundle:Pages:client.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView(), 'image'=>$Image,
                        'countmail4'=>$countmail4));
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function gerantsAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        $request1 = $this->getRequest();
        if ($request1->getMethod()=="POST" ){ 
            if($request1->get('Submit')=="Modifier"){
                $idx=$request1->get('id');
                $mailx=$request1->get('mail');
                $nomx=$request1->get('nom');
                $prenomx=$request1->get('prenom');
                $statmatrix=$request1->get('statmatri');
                $fixex=$request1->get('numfix');
                $mobilx=$request1->get('nummob');
    //            $passx=$request->get('pass');          
                $em1 = $this->getDoctrine()->getManager();
                if($request1->get('id')== NULL){
                   $idx= "0";
                }else{
                    $idx= $request1->get('id');
                }
                $utilisateurx = $em1->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idx);

                $utilisateurx->setMail($mailx);
                $utilisateurx->setNom($nomx);
                $utilisateurx->setPrenom($prenomx);
                $utilisateurx->setStatusMatrimonial($statmatrix);
                $utilisateurx->setNumfix($fixex); 
                $utilisateurx->setNummobile($mobilx); 

                $em2=$this->getDoctrine()->getManager();
                $em2->persist($utilisateurx);
                $em2->flush();
                return $this->redirect('Gerants');
            }
            elseif ($request1->get('Submit')=="Envoier") {
                
                $idxc=$request1->get('idxc');
                $mailxc=$request1->get('mailxc');
                $subxc=$request1->get('subxc');
                $bodyxc=$request1->get('bodyxc');
                
                $emS = $this->getDoctrine()->getManager();
                $destinataire = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($idxc);
                $expediteur = $emS->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find("0");
                $mailx= new \sprint2\RealEstate\AdminBundle\Entity\Boitemessages();
                $mailx->setIdDestinataire($destinataire);
                $mailx->setVu("0");
                $mailx->setContenu($bodyxc);
                $mailx->setIdExpediteur($expediteur);  
                

                $em=$this->getDoctrine()->getManager();
                $em->persist($mailx);
                $em->flush();
                return $this->redirect('Gerants');
            
        }
//            return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
//                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse ));
        }
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $utilisateurf=new \sprint2\RealEstate\AdminBundle\Entity\Utilisateur();
        $form=$this->createForm(new \sprint2\RealEstate\AdminBundle\Form\AjouGForm(),$utilisateurf);#container->get("form.factory")entre this et create#}
        $Request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($Request);//laison entre formulaire  et lentity en question et recuperer les données du requet
        $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail4 = count($listofmailt4);
        if($form->isValid())
        {
            try {
            $cvbnnnn = $this->upload($utilisateurf->getImage());
            $utilisateurf->setPassword(md5($utilisateurf->getPassword()));
            $utilisateurf->setRole("1");
            $utilisateurf->setUrlp($cvbnnnn);
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurf);
            $em->flush();
            } catch(\Exception $e) {
              
                $findme   = "'mail'";
                $findme1   = "'numMobile'";
                $findme2   = "'numFix'";
                $pos = strpos($e->getMessage(), $findme);
                $pos1 = strpos($e->getMessage(), $findme1);
                $pos2 = strpos($e->getMessage(), $findme2);
                if( $pos !== false )
                {
                    $form->get('mail')->addError(new FormError("L'adresse e-mail existe déjà"));                    
//                    return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
//                        array('utilisateur'=>$utilisateur, 'form'=>$form->createView() , 'image'=>$Image));     
                }
                if( $pos1 !== false )
                {
                    $form->get('nummobile')->addError(new FormError("Le numero Mobile existe déjà"));                    
//                    return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
//                        array('utilisateur'=>$utilisateur, 'form'=>$form->createView() , 'image'=>$Image));     
                }
                if( $pos2 !== false )
                {
                    $form->get('numfix')->addError(new FormError("Le numero Fix existe déjà "));                    
                       
                }
                
                return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
                        array('utilisateur'=>$utilisateur, 'form'=>$form->createView() , 'image'=>$Image,
                        'countmail4'=>$countmail4));  
            }        

        }

        return $this->render('sprint2RealEstateAdminBundle:Pages:gerants.html.twig',
        	array('utilisateur'=>$utilisateur, 'form'=>$form->createView() , 'image'=>$Image,
                        'countmail4'=>$countmail4));
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function offresAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        $offre_list= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Offre')
        ->findAll();
        $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail4 = count($listofmailt4);
        return $this->render('sprint2RealEstateAdminBundle:Pages:offres.html.twig',
                array('offre'=>$offre_list, 'image'=>$Image,
                        'countmail4'=>$countmail4));
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function agenceAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        $request = $this->getRequest();
        if ($request->getMethod()=="POST"){  
            $nomx=$request->get('nom');
            $agantx=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Utilisateur")->findOneById($request->get('agant')); 
            $adressex=$this->getDoctrine()->getManager()->getRepository("sprint2RealEstateAdminBundle:Adresse")->findOneById($request->get('adresse'));
            $description=$request->get('description');

            $agencex= new \sprint2\RealEstate\AdminBundle\Entity\Agence();
            $agencex->setNom($nomx);
            $agencex->setIdGerant($agantx);
            $agencex->setIdAdresse($adressex);
            $agencex->setDescription($description);            

            $em=$this->getDoctrine()->getManager();
            $em->persist($agencex);
            $em->flush();     
        }
      
        $Agance= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Agence')
        ->findAll();
        
        $utilisateur= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Utilisateur')
        ->findBy(array('role'=>1));
        
        $adresse= $this->getDoctrine()
        ->getRepository('sprint2RealEstateAdminBundle:Adresse')
        ->findALl();
        $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail4 = count($listofmailt4);
        return $this->render('sprint2RealEstateAdminBundle:Pages:agence.html.twig',
                array('agance'=>$Agance, 'utilisateur'=>$utilisateur, 'adresse'=>$adresse, 'image'=>$Image,
                        'countmail4'=>$countmail4));
        
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function supprimerUCAction($id){
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_clients");
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function supprimerUGAction($id){
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('sprint2RealEstateAdminBundle:Utilisateur')->find($id);
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_gerants");
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
    
    public function supprimerAAction($id){
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository('sprint2RealEstateAdminBundle:Agence')->find($id);
        $em->remove($agence);
        $em->flush();
        return $this->redirectToRoute("sprint2_real_estate_admin_agence");
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
       
    }
    public function upload($image) {
  
            $status = 'success';
            $uploadedURL='';
            $message="";
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 100000 )) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                    
                      //Start Uploading File
                      $name =$this->str_random();
                      $document = new Document();
                      $document->setFile($image, $file_type, $name);
                      $document->setSubDirectory('image');
                      $document->processFile();
                      return "http://localhost/image/".$name.".".$file_type;

                    }
                    else {                      
                      return "http://localhost/image/null".".png";                       
                    }
                }
                 else {  }
                 
            }  else {
                
            }
            
        }  
    

   function str_random($length = 16)
   {
       $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

       return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
   }
   
   function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
    return $url;
    }
    
    public function loginAction()
    {

          $em = $this->getDoctrine()->getManager();
          $session = $this->getRequest()->getSession();
          
          $hasCompte = $session->has('compte');

          //**************Si déja connecté (possede une session avec compte)
          if ($hasCompte){
              
                  return $this->redirect('../Admin');
          }

          $request = $this->get('request_stack')->getCurrentRequest();
          if ($request->getMethod() == "POST") {
            $login=$request->get('mail');
            $password=$request->get('password');

            //Remplissage des Comptes
            $queryR = $em->createQuery('SELECT u FROM sprint2RealEstateAdminBundle:Administrateur u WHERE u.mail =?1 and u.motDePasse=?2');
            $queryR->setParameter(1, $login);
            $queryR->setParameter(2, $password);
            $compteAdmin = $queryR->getOneOrNullResult();
            if($compteAdmin){

                $session->set('compte', $compteAdmin);
                $session->set('type', 'Admin');
                //die("je suis un gerant !!!");
                return $this->redirect('../Admin');
            }else{
                return $this->redirect('../Admin');
            }
            
            }else//INCORRECT
            {
//                var_dump('compte inexistant');
            }

                return $this->render('sprint2RealEstateAdminBundle:Default:connect.html.twig');

    }
    public function logoutAction()
    {
         // page d index a ajouter
    	 if($this->getRequest()->getSession()->has('compte')){

            $this->getRequest()->getSession()->clear();
        }
        return $this->redirect('../Admin');

    }
    
    //Amine
    
    
    public function ajoutAdminAction()
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
            $Image = $this->get_gravatar($session->get('compte')->getMail());
               //Créer une instance de l'em*
            $em1 = $this->getDoctrine()->getEntityManager();
            $admins = $em1->getRepository('sprint2RealEstateAdminBundle:Administrateur')->findAll();

          //em
            $Admin=new Administrateur();
            $em = $this->getDoctrine()->getManager();
            //Recuperer l'entité Modele de l'id correspond
            //Recuperer les données
            $Request = $this->get('request');
            // Créer une instance du formulaire
            $form = $this->createForm(new AjoutAForm(),$Admin);
            $form->handleRequest($Request);
            $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
            $countmail4 = count($listofmailt4);
            if($form->isValid())
            { 
                try {
                    $em->persist($Admin);
                    $em->flush();
                } catch(\Exception $e) {

                    $findme   = "'mail'";
                    $pos = strpos($e->getMessage(), $findme);
                    if( $pos !== false )
                    {
                        $form->get('mail')->addError(new FormError("L'adresse e-mail existe déjà"));                    
                      return $this->render('sprint2RealEstateAdminBundle:Pages:admins.html.twig',
                            array('admins'=>$admins, 'form'=>$form->createView(), 'image'=>$Image,
                        'countmail4'=>$countmail4));
                    
                    }
                }
            }
            return $this->render('sprint2RealEstateAdminBundle:Pages:admins.html.twig',array( 'admins'=>$admins ,
                       'form'=>$form->createView(), 'image'=>$Image,
                        'countmail4'=>$countmail4));
        }  else {
            
        }
  
    }
            
    public function supprimerAdminAction($id){
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
            $Image = $this->get_gravatar($session->get('compte')->getMail());
            
            $em->remove($administrateur);
            $em->flush();
            return $this->redirectToRoute("sprint2_real_estate_admin_admins");
        }  else {
            
        }
    }
        
    public function supprimerOAction($id){
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
            $Image = $this->get_gravatar($session->get('compte')->getMail());
            $em = $this->getDoctrine()->getManager();
            $offre = $em->getRepository('sprint2RealEstateAdminBundle:Offre')->find($id);
            $em->remove($offre);
            $em->flush();
            return $this->redirectToRoute("sprint2_real_estate_admin_offres");
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
    }
        
    public function oneoffreAction($id)
    {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());    
            $offre= $this->getDoctrine()
            ->getRepository('sprint2RealEstateAdminBundle:Offre')
            ->find($id);
            $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
            $countmail4 = count($listofmailt4);    
            return $this->render('sprint2RealEstateAdminBundle:Pages:detailsoffre.html.twig',
                    array('offre'=>$offre, 'image'=>$Image,
                        'countmail4'=>$countmail4));
            
        }  else {
            $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
        }
                        
    }
        
    public function redirectionAction()
    {
        return $this->render('sprint2RealEstateAdminBundle:Pages:formMail.html.twig',array());
    }
        
    public function sendMailAction() { 
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        $Request = $this->get('request');
            
        if ($Request->getMethod() == 'POST') { 
	$Subject=$Request->get("Subject");
	$email=$Request->get("email");
	$message=$Request->get("message");
            
	$mailer=  $this->container->get('mailer');
	$transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('stackoverflow.agenceimmob@gmail.com')
                    ->setPassword('esprit3a19') ;
	$mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test')
		    ->setSubject($Subject) 
                    ->setFrom('stackoverflow.agenceimmob@gmail.com') 
                    ->setTo($email) 
                    ->setBody($message); 
	$this->get('mailer')->send($message);
        } 
       $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
       $countmail4 = count($listofmailt4);
       return $this->render('sprint2RealEstateAdminBundle:Pages:formMail.html.twig', array('image'=>$Image,
                        'countmail4'=>$countmail4));
    }  else {
        $this->getRequest()->getSession()->clear();
            return $this->redirect('Login');
    }
    
    
}

    public function sendMail($to, $from, $subject, $body) { 
        $session = $this->getRequest()->getSession();
 
	$Subject= $subject;
	$email= $to;
	$message= $body;
            
	$mailer=  $this->container->get('mailer');
	$transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('stackoverflow.agenceimmob@gmail.com')
                    ->setPassword('esprit3a19') ;
	$mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test')
		    ->setSubject($Subject) 
                    ->setFrom('stackoverflow.agenceimmob@gmail.com') 
                    ->setTo($email) 
                    ->setBody($message); 
	$this->get('mailer')->send($message);
        } 


}
