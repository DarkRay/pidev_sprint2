<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // real_estate_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'real_estate_homepage');
            }

            return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'real_estate_homepage',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // real_estate_admins
            if ($pathinfo === '/admins') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  '_route' => 'real_estate_admins',);
            }

            // real_estate_ajoutAdmin
            if ($pathinfo === '/addAdmin') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::ajouterAdminAction',  '_route' => 'real_estate_ajoutAdmin',);
            }

        }

        // real_estate_dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  '_route' => 'real_estate_dashboard',);
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // sprint2_real_estate_admin_homepage
            if (rtrim($pathinfo, '/') === '/Admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sprint2_real_estate_admin_homepage');
                }

                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sprint2_real_estate_admin_homepage',);
            }

            // sprint2_real_estate_admin_mailbox
            if ($pathinfo === '/Admin/MailBox') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::mailAction',  '_route' => 'sprint2_real_estate_admin_mailbox',);
            }

            // sprint2_real_estate_admin_sentmail
            if ($pathinfo === '/Admin/SentMail') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::sentAction',  '_route' => 'sprint2_real_estate_admin_sentmail',);
            }

            // sprint2_real_estate_admin_clients
            if ($pathinfo === '/Admin/Clients') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::clientsAction',  '_route' => 'sprint2_real_estate_admin_clients',);
            }

            // sprint2_real_estate_admin_gerants
            if ($pathinfo === '/Admin/Gerants') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::gerantsAction',  '_route' => 'sprint2_real_estate_admin_gerants',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
