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

class adresseRestController extends FosRestController
{
	/**
	 * Get All adresses,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets All adresses  /v1/adresse.{_format} ",
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
	 * 
	 */

    public function getAdresseAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
    	$offset = $paramFetcher->get('offset');
        $offset = null == $offset ? 0 : $offset;
        $limit = $paramFetcher->get('limit');

       $entities= $this->container
        ->get('rest.adresse.handler')
        ->getAll($limit, $offset);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }


    /**
	 * Get All villes by Goves,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets All villes  /v1/adressevilles/{gouvernorat}.{_format}  ",
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
	 * 
	 */

   
    public function getAdressevilleAction($gouvernorat){

    	

       $entities= $this->container
        ->get('rest.adresse.handler')
        ->getByGov($gouvernorat);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }

 	/**
	 * Get All codes by villes,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets All codes  ANY  /v1/adresses/{ville}/code.{_format} ",
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
	 * 
	 */



    public function getAdresseCodeAction($ville){

    	$entities= $this->container
        ->get('rest.adresse.handler')
        ->getByVille($ville);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }

 	/**
	 * Get All adresses by codes,
	 *
	 * @ApiDoc(
	 *   resource = true,
	 *   description = "Gets All codes  ANY  /v1/adresses/{code}/by/code.{_format} ",
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
	 * 
	 */



    public function getAdresseByCodeAction($code){

    	$entities= $this->container
        ->get('rest.adresse.handler')
        ->getByCode($code);

	    $view = $this->view($entities, 200)
	      ->setTemplate("sprint2restBundle:Default:index.html.twig")
	      ->setTemplateVar('entities') ;

        return $this->handleView($view);
    }

    
}
