<?php

namespace sprint2\GerantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\GerantBundle\Entity\Boitemessages;
use sprint2\GerantBundle\Entity\Offre;

class DefaultController extends Controller {

    public function indexAction($id) {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if ($hasCompte && $session->get('type') == "Gerant" && $id==$session->get('compte')->getId()) {
            $em = $this->getDoctrine()->getManager();
            $current_user = $em->getRepository("sprint2GerantBundle:Utilisateur")->find($id);
            $offres = $em->getRepository("sprint2GerantBundle:Offre")->BestoffreDQL($id);
            $nonVu = $em->getRepository('sprint2GerantBundle:Boitemessages')->nonVuCountDQL($id);
            return $this->render('sprint2GerantBundle:Default:index.html.twig', array('gerant' => $current_user, 'offres' => $offres, 'nonvu' => $nonVu));
    
        }

        else{
            return $this->redirect($this->generateUrl('sprint2_authandlog_login'));
        }
    }

    public function listeAction($id) {

        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if ($hasCompte && $session->get('type') == "Gerant" && $id==$session->get('compte')->getId()) {
            $em = $this->getDoctrine()->getManager();
            $current_user = $em->getRepository("sprint2GerantBundle:Utilisateur")->find($id);
            $offres = $em->getRepository("sprint2GerantBundle:Offre")->findoffreDQL($id);
            $nonVu = $em->getRepository('sprint2GerantBundle:Boitemessages')->nonVuCountDQL($id);
        return $this->render('sprint2GerantBundle:Default:listeoffres.html.twig', array('gerant' => $current_user, 'offres' => $offres, 'nonvu' => $nonVu)); 
        }
        else{
            return $this->redirect($this->generateUrl('sprint2_authandlog_login'));
        }
       
    }

    public function mailAction($id) {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if ($hasCompte && $session->get('type') == "Gerant" && $id==$session->get('compte')->getId()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('sprint2GerantBundle:Boitemessages')->vueDQL($id);
            $current_user = $em->getRepository("sprint2GerantBundle:Utilisateur")->find($id);
            $messages = $em->getRepository('sprint2GerantBundle:Boitemessages')->findboitemessagesDQL($id);
            return $this->render('sprint2GerantBundle:Default:mail.html.twig', array('gerant' => $current_user, 'messages' => $messages));
        
        }

        else{
        return $this->redirect($this->generateUrl('sprint2_authandlog_login'));
        }
    }

    public function updateAction($id, $ido) {
        $em = $this->getDoctrine()->getManager();
        $current_user = $em->getRepository("sprint2GerantBundle:Utilisateur")->find($id);
        $offre_old = $em->getRepository("sprint2GerantBundle:Offre")->find($ido);
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {
            $offre = new Offre();
            $offre->setIdGerant($current_user->getId());
            $offre->setIdAdresse($offre_old->getIdAdresse());
            $offre->setPayement($request->get('prix'));
            $offre->setSurface($request->get('surface'));
            $offre->setNbrpiece($request->get('nbrpieces'));
            $offre->setEtage($request->get('etage'));
            $offre->setEtat($request->get('etat'));
            $offre->setTypeimmob($request->get('typeimmob'));
            $offre->setNature($request->get('nature'));
            $offre->setUrlimage($offre_old->getUrlimage());
            $offre->setDatepublication(new \DateTime("now"));
            if($request->get('ascenceur') != null){
                $offre->setAscenceur("1");
            }
            if($request->get('chauffage') != null){
                $offre->setChauffage("1");
            }
            if($request->get('gaz') != null){
                $offre->setGazdeville("1");
            }
            if($request->get('meuble') != null){
                $offre->setMeuble("1");
            }
            $em->persist($offre);
            $em->remove($offre_old);
            $em->flush();
            return $this->redirect($this->generateUrl('sprint2_gerant_listeoffres', array('id' => $id)));
        }
        return $this->render('sprint2GerantBundle:Default:update.html.twig', array('gerant' => $current_user, 'offre' => $offre_old));
    }

    public function suppmailAction($id, $idm) {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('sprint2GerantBundle:Boitemessages')->find($idm);
        $em->remove($message);
        $em->flush();
        return $this->redirect($this->generateUrl('sprint2_gerant_mail', array('id' => $id)));
    }

    public function suppoffreAction($id, $ido) {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository('sprint2GerantBundle:Offre')->find($ido);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl('sprint2_gerant_listeoffres', array('id' => $id)));
    }

    public function envoyerAction() {
        $request = $this->getRequest();
        $message = new Boitemessages();
        if ($request->getMethod() == "POST") {
            $text = $request->get("text");
            $idExpediteur = $request->get('idexp');
            $idDestinataire = $request->get("iddest");
            
            $em = $this->getDoctrine()->getManager();
            
            $message->setContenu($text);
            $message->setIdDestinataire( $em->getRepository("sprint2GerantBundle:Utilisateur")->find($idDestinataire) );
            $message->setIdExpediteur( $em->getRepository("sprint2GerantBundle:Utilisateur")->find($idExpediteur) );
            $message->setTempsEnvoi(new \DateTime("now"));
            
            $em->persist($message);
            $em->flush();
        }
        return $this->render('sprint2GerantBundle:Default:envoyermessage.html.twig',array('message' => $message));
    }

}
