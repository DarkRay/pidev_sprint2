<?php
namespace sprint2\restBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use sprint2\RealEstate\AdminBundle\Entity\Archive;
use sprint2\realEstateBundle\Models\Document;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class archiveRestController extends FosRestController
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

    public function getArchivesAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
    	$offset = $paramFetcher->get('offset');
        $offset = null == $offset ? 0 : $offset;
        $limit = $paramFetcher->get('limit');

       $entities= $this->container
        ->get('rest.archive.handler')
        ->getAll($limit, $offset);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }

}
