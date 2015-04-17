<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\RealEstate\AdminBundle\Entity\Archive;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuteurController
 *
 * @author ulrich
 */
class ArchiveController extends Controller {

    public function addArchiveAction() {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $a = new Archive();
        $form = $this->createForm(new ArchiveForm(), $a);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($a);
            $em->flush();
        }
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        return $this->render("sprint2RealEstateAdminBundle:Pages:addArchive.html.twig", array('Form' => $form->createView(), 'image' => $Image));
        }  else {
            return $this->redirect('Login');
        }
    }

    /* public function listeArchiveAction()
      {

      $em = $this->getDoctrine()->getManager();
      $m= $em->getRepository('sprint2RealEstateAdminBundle:Archive')->findAll();
      return $this->render('sprint2RealEstateAdminBundle:Pages:Archive.html.twig', array('mod'=>$m));

      } */

    public function deleteArchiveAction($id) {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $em = $this->getDoctrine()->getManager();
        $Archive = $em->getRepository('sprint2RealEstateAdminBundle:Archive')->find($id);
        $em->remove($Archive);
        $em->flush();


        return $this->redirectToRoute("Archive_search");
        }  else {
            return $this->redirect('Login');
        }
    }

    public function updateArchiveAction($id) {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $em = $this->getDoctrine()->getManager();
        $Archive = $em->getRepository('sprint2RealEstateAdminBundle:Archive')
                ->find($id);
        $form = $this->createForm(new ArchiveForm(), $Archive);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($Archive);
            $em->flush();
            return $this->redirectToRoute("Archive_liste");
        }


        $Image = $this->get_gravatar($session->get('compte')->getMail());
        return $this->render('sprint2RealEstateAdminBundle:Archive:addArchive.html.twig', array('Form' => $form->createView(), 'image' => $Image));
        }  else {
            return $this->redirect('Login');
        }
    }

    public function searchAction() {
        $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
        $Request = $this->getRequest(); //on recupere la requete
        //créer une instance de l'entity manager
        $em = $this->getDoctrine()->getEntityManager();
        $mod = $em->getRepository('sprint2RealEstateAdminBundle:Archive')->findAll();

        if ($Request->getMethod() == "POST") {

            $search = $Request->get('idGerant');
            $mod = $em->getRepository('sprint2RealEstateAdminBundle:Archive')->findBy(array('idGerant' => $search));
            //créer une instance de l'entity manager
        }
        $Image = $this->get_gravatar($session->get('compte')->getMail());
        return $this->render('sprint2RealEstateAdminBundle:Pages:Archive.html.twig', array('models' => $mod , 'image' => $Image));
        }  else {
            return $this->redirect('Login');
        }
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

}


