<?php

namespace ControlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('ControlBundle:Client')->findAll();
        
        return $this->render('ControlBundle:Client:index.html.twig',array('clients' => $clients));
    }
}
