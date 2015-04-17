<?php

namespace sprint2\AuthandlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormError;
use sprint2\RealEstate\AdminBundle\Models\Document;
use sprint2\AuthandlogBundle\Entity\Utilisateur;


class DefaultController extends Controller
{
    
    public function indexloginAction(){
    	return $this->render('sprint2AuthandlogBundle:Default:connection.html.twig');
    }

     public function loginAction()
    {
        
          $em = $this->getDoctrine()->getManager();
          $session = $this->getRequest()->getSession();
          $hasCompte = $session->has('compte');
          
          //**************Si déja connecté (possede une session avec compte)
          if ($hasCompte){
            //var_dump('Vous etes connecté :'.$session->get('compte')->getNom());
              //$compteUser = $session->get('compte');
              //die("vous etes deja connecté");
              //return $this->render('vue d'acceuil ');
             //return $this->render('realEstateBundle   :Default:offreCard.html.twig');
             //à return $this->redirectToRoute('real_estate_homepage', array(), 301);
                 die("je suis un client !!!!!");
          }

           //***************Si formulaire request 
          $request = $this->get('request_stack')->getCurrentRequest();
          if ($request->getMethod() == "POST") {
            $login=$request->get('mail');
            $password=$request->get('password');
             
            //Remplissage des Comptes 
            $queryR = $em->createQuery('SELECT u FROM sprint2AuthandlogBundle:Utilisateur u WHERE u.mail =?1 and u.password=?2');
            $queryR->setParameter(1, $login);
            $queryR->setParameter(2, $password);
            $compteUser = $queryR->getOneOrNullResult();
           

           //Affectation compte à la session
            //il est gerant
            if ( $compteUser->getRole() ==1)
            {
                $session->set('compte', $compteUser);
                $session->set('type', 'gerant');
               // die("je suis un gerant !!!");
                //return $this->redirectToRoute('homepage', array(), 301);
                //return $this->render('PerfectJobFreelancerBundle:MisEnPage:slideAccueil.html.twig');

            }

            // Il est client
            else if  ( $compteUser->getRole() ==2) {
                 $session->set('compte', $compteUser);
                 $session->set('type', 'client');
                 //return $this->redirectToRoute('real_estate_offre', array(), 301);
                 die("je suis un client !!!!!");
                 //return $this->render('PerfectJobFreelancerBundle:MisEnPage:slideAccueil.html.twig');
          
            }else//INCORRECT
                
                var_dump('compte inexistant');
            }

               //ELSE Pas de compte et pas de request formulaire
                return $this->render('sprint2AuthandlogBundle:Default:connection.html.twig');

    }

    public function logoutAction()
    {
         // page d index a ajouter 
    	 if($this->getRequest()->getSession()->has('compte')){
            
            $this->getRequest()->getSession()->clear();
        }
        return $this->redirect('http://127.0.0.1:8000');

    }

    public function registerAction()
    {

        if($this->getRequest()->getSession()->has('compte')){
            return $this->redirect('http://127.0.0.1:8000');
        }
        
        

        $request = $this->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == "POST") {
            $mailx=$request->get('mail');
            $pwdx=$request->get('pwd');
            $nomx=$request->get('nom');
            $prenomx=$request->get('prenom');
            $typecomptex=$request->get('typecompte');
            $statmatrix=$request->get('statmatri');
            $nummobilex=$request->get('nummobile');
            $numfixx=$request->get('numfix');
            $user= new Utilisateur(); 
            $user->setMail($mailx);
            $user->setPassword($pwdx);
            $user->setNom($nomx);
            $user->setPrenom($prenomx);
            $user->setNummobile($nummobilex);
            $user->setNumfix($numfixx);
            $user->setStatusMatrimonial($statmatrix);
            $user->setRole($typecomptex);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
             return $this->redirect('http://127.0.0.1:8000');
        }
    	
        
        return $this->render('sprint2AuthandlogBundle:Default:registration.html.twig');
    }

     public function otherAction()
    {
    	die("other !");
    }


     
    
}
