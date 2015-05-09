<?php
namespace sprint2\realEstateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Entity\Vote;
use Symfony\Component\HttpFoundation\Response;

/**
 * Vote controller.
 *
 */
class VoteController extends Controller
{

     public function createAction()
    {
         $session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');

        if ($hasCompte && $session->get('type') == "Client") {

            $id =$session->get('compte')->getId(); 
        }


        $entitie=new Vote();
        $user=new Utilisateur();
        $offre=new Offre();
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');

        $idOffre=$request->get('id');

        $user=$em->getRepository('realEstateBundle:Utilisateur')->find($id);
        $offre=$em->getRepository('realEstateBundle:Offre')->find($idOffre);

      
        $note=$request->get('group-2');
        $entitie->setNote($note);
        $entitie->setIdUtilisateur($user);
        $entitie->setIdOffre($offre);

        $vote=$em->getRepository('realEstateBundle:Vote')->findBy(array('idOffre'=>$idOffre,'idUtilisateur'=>$id));
            
         if($vote ==null)
            {
                 $em->persist($entitie);
                 $em->flush();
            }

       

         return $this->redirect($this->generateUrl('offre_show', array('id' => $id)));

    }
    
}