<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response;

/**
 * Description of GouvernoratHandler
 *
 * @author seif
 */
class GouvernoratHandler {
    /**
     * @param ViewHandler $viewHandler
     * @param View $view
     * @param Request $request
     * @param string $format
     *
     * @return Response
     */
    public function createResponse(ViewHandler $handler, View $view, Request $request, $format)
    {
        $gouv = '<?xml version="1.0" encoding="ISO-8859-1"?>';
        $gouv .= '<gouvernorats version="2.0">';
        $gouv .= '<gouvernorat>';
       
        return new Response($gouv, 200, $view->getHeaders());
    }
}