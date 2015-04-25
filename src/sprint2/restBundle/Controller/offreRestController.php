<?php
namespace sprint2\restBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use sprint2\realEstateBundle\Entity\Adresse;
use sprint2\realEstateBundle\Entity\Offre;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Form\OffreType;
use sprint2\realEstateBundle\Models\Document;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class offreRestController extends FosRestController
{

	/**
	 * Get All Offres,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets All offres ",
	 *   
	 *   statusCodes = {
	 *     200 = "Returned when successful",
	 *    
	 *   }
	 * )
	 *
	 *@Annotations\View(templateVar="entities")
	 *@Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing pages.")
     *@Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many pages to return.")
	 * 
	 * 
	 *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * 
	 * @return array
	 *
	 * @throws NotFoundHttpException when offres not exist
	 */

    public function getOffresAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
    	$offset = $paramFetcher->get('offset');
        $offset = null == $offset ? 0 : $offset;
        $limit = $paramFetcher->get('limit');

       $entities= $this->container
        ->get('rest.offre.handler')
        ->getAll($limit, $offset);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }

     /**
     * Get single offre.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Gets a offre for a given id",
     *   output = "sprint2\restBundle\Entity\offre",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the page is not found"
     *   }
     * )
     *
     * @Annotations\View(templateVar="entitie")
     *
     * @param int     $id      the offre id
     *
     * @return array
     *
     * @throws NotFoundHttpException when page not exist
     */
    public function getOffreAction($id)
    {
        
       $entitie= $this->container
        ->get('rest.offre.handler')
        ->get($id);

	    $view = $this->view($entitie, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entitie') ;

        return $this->handleView($view);
    }
    
   /**
     * Create an Offre from the submitted data.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Creates a new offre from the submitted data.",
     *   input = "sprint2\realEstateBundle\Form\OffreType",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *  template = "sprint2restBundle:Default:index.html.twig",
     *  statusCode = Codes::HTTP_BAD_REQUEST,
     *  templateVar = "form"
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface|View
     */
    public function postOffreAction(Request $request)
    {


        	$newOffre=new Offre();
            $newOffre = $this->container->get('rest.offre.handler')->post(
                $request
            );
            $routeOptions = array(
                'id' => $newOffre->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView('get_offre', $routeOptions, Codes::HTTP_CREATED);
       
    }

    /**
     * delete an Offre from the submitted data.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Creates a new offre from the submitted data.",
     *   input = "id",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *  template = "sprint2restBundle:Default:index.html.twig",
     *  statusCode = Codes::HTTP_BAD_REQUEST,
     *  templateVar = "form"
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface|View
     */


    public function deleteOffreAction($id)
    {
    	

    	$this->container->get('rest.offre.handler')->delete(
                $id
            );
    	return new Response(Codes::HTTP_OK);
    }


}
