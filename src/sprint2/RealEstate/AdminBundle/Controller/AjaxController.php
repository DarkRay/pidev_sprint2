<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\RealEstate\AdminBundle\Entity\Boitemessages;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Description of AjaxController
 *
 * @author FATHALLAH Wael
 */
class AjaxController extends Controller
{
    public function getListOfMailAction($id)
    {
        $em = $this->getDoctrine()->getManager();    
        $query = $em->createQuery('SELECT b FROM sprint2RealEstateAdminBundle:Boitemessages b WHERE b.idExpediteur = :key ORDER BY b.id DESC')->setParameter('key', $id);
        try {
            $listofmailt = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            //Handle No Result Exception here
        }
        $query1 = $em->createQuery('SELECT b FROM sprint2RealEstateAdminBundle:Boitemessages b WHERE b.idDestinataire = :key ORDER BY b.id DESC')->setParameter('key', $id);
        try {
            $listofmailr = $query1->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            //Handle No Result Exception here
        }
        //$listofmailtone = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findOneBy(array('idDestinataire'=>$id));;
        //$listofmailr = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idDestinataire'=>$id));;
        $response = new JsonResponse();
        $fnfjn = array();
        //$nowx = next($listofmailtone);
        $fnfjn2 = array();
        
        for($i=0; $i<count($listofmailt); $i++){
            $now = $listofmailt[$i];
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu()));
        }
        
        for($i=0; $i<count($listofmailr); $i++){
            $now1 = $listofmailr[$i];
            array_push($fnfjn2,  array($now1->getIdExpediteur()->getNom()." ".$now1->getIdExpediteur()->getPrenom(), $now1->getContenu()));
        }
        
        return $response->setData(array('datalist'=>$fnfjn,'datalist1'=>$fnfjn2));
    }
    
    public function getInboxListOfMailAction($id)
    {
        $em = $this->getDoctrine()->getManager();     
        
        $listofmailt1 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0"));
        $listofmailt4 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail = count($listofmailt1);
        $countmail4 = count($listofmailt4);
        $listofmailt = array_slice($listofmailt1,$id."0",10);
        $response = new JsonResponse();
        $fnfjn = array();
        
        
        
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            if ($now->getVu()== 1)
            {
                $vuex = '<img src="https://cdn4.iconfinder.com/data/icons/email/500/Email_envelope_fast_internet_letter_mail_message_network_news_send_sending_address_communication_contactdocument_file_opened-512.png" alt="Mountain View" style="width:22px;height:22px">';
            } else{
                $vuex = '<img src="https://cdn1.iconfinder.com/data/icons/emails-set-2/104/New-Mail-512.png" alt="Mountain View" style="width:22px;height:22px">';
            }
            
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu(), $now->getId(), $vuex));
        }
                
        return $response->setData(array('datalist'=>$fnfjn, 'cmail'=>$countmail, 'cmail4'=>$countmail4));
    }
    
    public function dellInboxOneMailAction($id, $idp)
    {
        $em = $this->getDoctrine()->getManager();     
        $mailforremove = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->find($idp);
        $em->remove($mailforremove);
        $em->flush();
        $listofmailt1 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0"));
        $listofmailt = array_slice($listofmailt1,$id."0",10);
        $response = new JsonResponse();
        $fnfjn = array();
        
        
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            if ($now->getVu()== 1)
            {
                $vuex = '<img src="https://cdn4.iconfinder.com/data/icons/email/500/Email_envelope_fast_internet_letter_mail_message_network_news_send_sending_address_communication_contactdocument_file_opened-512.png" alt="Mountain View" style="width:22px;height:22px">';
            } else{
                $vuex = '<img src="https://cdn1.iconfinder.com/data/icons/emails-set-2/104/New-Mail-512.png" alt="Mountain View" style="width:22px;height:22px">';
            }
            
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu(), $now->getId(), $vuex));
        }
                
        return $response->setData(array('datalist'=>$fnfjn));
    }
    
    public function findListOfMailAction($id, $find)
    {
        $em = $this->getDoctrine()->getManager();  
        $query = $em->createQuery('SELECT b FROM sprint2RealEstateAdminBundle:Boitemessages b JOIN b.idDestinataire u WHERE u.nom LIKE :key or u.prenom LIKE :key or b.contenu LIKE :key ORDER BY b.idDestinataire DESC')->setParameter('key', '%'.$find.'%');
        try {
            $listofmailt = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            //Handle No Result Exception here
        }

        $response = new JsonResponse();
        $fnfjn = array();
        $countmail = count($listofmailt);      
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            if ($now->getVu()== 1)
            {
                $vuex = '<img src="https://cdn4.iconfinder.com/data/icons/email/500/Email_envelope_fast_internet_letter_mail_message_network_news_send_sending_address_communication_contactdocument_file_opened-512.png" alt="Mountain View" style="width:22px;height:22px">';
            } else{
                $vuex = '<img src="https://cdn1.iconfinder.com/data/icons/emails-set-2/104/New-Mail-512.png" alt="Mountain View" style="width:22px;height:22px">';
            }
            
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu(), $now->getId(), $vuex));
        }                
        return $response->setData(array('datalist'=>$fnfjn, 'cmail'=>$countmail));
    }
       
    public function getInboxOneMailAction($id)
    {
        $em = $this->getDoctrine()->getManager();     
        $mailforremove = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->find($id);
        $mailforremove->setVu(1);
        $em->persist($mailforremove);
        $em->flush();
        $response = new JsonResponse();
        return $response->setData(array('datamail'=>$mailforremove->getContenu()));
        
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////:
    
   
    public function getInboxListOfMailSAction($id)
    {
        $em = $this->getDoctrine()->getManager();     
        
        $listofmailt1 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idDestinataire'=>"0"));
        $listofmailt4 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
        $countmail = count($listofmailt1);
        $countmail4 = count($listofmailt4);
        $listofmailt = array_slice($listofmailt1,$id."0",10);
        $response = new JsonResponse();
        $fnfjn = array();
        
        
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            if ($now->getVu()== 1)
            {
                $vuex = '<img src="https://cdn4.iconfinder.com/data/icons/email/500/Email_envelope_fast_internet_letter_mail_message_network_news_send_sending_address_communication_contactdocument_file_opened-512.png" alt="Mountain View" style="width:22px;height:22px">';
            } else{
                $vuex = '<img src="https://cdn1.iconfinder.com/data/icons/emails-set-2/104/New-Mail-512.png" alt="Mountain View" style="width:22px;height:22px">';
            }
            
            array_push($fnfjn,  array($now->getIdExpediteur()->getNom()." ".$now->getIdExpediteur()->getPrenom(), $now->getContenu(), $now->getId(), $vuex));
        }
                
        return $response->setData(array('datalist'=>$fnfjn, 'cmail'=>$countmail, 'cmail4'=>$countmail4));
    }
    
    public function dellInboxOneMailSAction($id, $idp)
    {
        $em = $this->getDoctrine()->getManager();     
        $mailforremove = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->find($idp);
        $em->remove($mailforremove);
        $em->flush();
        $listofmailt1 = $em->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idDestinataire'=>"0"));
        $listofmailt = array_slice($listofmailt1,$id."0",10);
        $response = new JsonResponse();
        $fnfjn = array();
        
        
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            
            
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdExpediteur()->getPrenom(), $now->getContenu(), $now->getId()));
        }
                
        return $response->setData(array('datalist'=>$fnfjn));
    }
    
    public function findListOfMailSAction($id, $find)
    {
        $em = $this->getDoctrine()->getManager();  
        $query = $em->createQuery('SELECT b FROM sprint2RealEstateAdminBundle:Boitemessages b JOIN b.idDestinataire u WHERE u.nom LIKE :key or u.prenom LIKE :key or b.contenu LIKE :key ORDER BY b.idDestinataire DESC')->setParameter('key', '%'.$find.'%');
        try {
            $listofmailt = $query->getResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            //Handle No Result Exception here
        }

        $response = new JsonResponse();
        $fnfjn = array();
        $countmail = count($listofmailt);      
        for($i=0; $i<count($listofmailt); $i++)
        {   
            $now = $listofmailt[$i];
            if ($now->getVu()== 1)
            {
                $vuex = '<img src="https://cdn4.iconfinder.com/data/icons/email/500/Email_envelope_fast_internet_letter_mail_message_network_news_send_sending_address_communication_contactdocument_file_opened-512.png" alt="Mountain View" style="width:22px;height:22px">';
            } else{
                $vuex = '<img src="https://cdn1.iconfinder.com/data/icons/emails-set-2/104/New-Mail-512.png" alt="Mountain View" style="width:22px;height:22px">';
            }
            
            array_push($fnfjn,  array($now->getIdDestinataire()->getNom()." ".$now->getIdDestinataire()->getPrenom(), $now->getContenu(), $now->getId(), $vuex));
        }                
        return $response->setData(array('datalist'=>$fnfjn, 'cmail'=>$countmail));
    }
    
    function has_next($array) {
    if (is_array($array)) {
        if (next($array) === false) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
    
}
}
