<?php

namespace ControlBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ControlBundle\Entity\Client;
use ControlBundle\Form\ClientType;

class ClientController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('ControlBundle:Client')->findAll();
        
        return $this->render('ControlBundle:Client:index.html.twig',array('clients' => $clients));
    }
    
    public function AddAction()
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client, array(
            'action'=> $this->generateUrl('control_client_create'), 
            'method' => 'POST'
            ));
        
        return $this->render('ControlBundle:Client:add.html.twig', array('form' => $form->createView()));
        
    }
    
    public function createAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client, array(
            'action'=> $this->generateUrl('control_client_create'), 
            'method' => 'POST'
            ));
        $form->handleRequest($request);
        
        if( $form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            
            $em->flush();
            
            return $this->redirectToRoute('control_client_index');
        }

        return $this->render('ControlBundle:Client:add.html.twig', array('form' => $form->createView()));
        
    }
    
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ControlBundle:Client')->findAll($id);
        
        if(!$client)
        {
            throw $this->createNotFoundException('no hay un cliente con dicho id');
        }
        $form = $this->createForm(ClientType::class, $client, array(
            'action' => $this->generateUrl('control_client_update', array('id' => $client->getId())),
            'method' => 'POST'
            ));
        
        return $this->render('ControlBundle:Client:edit.html.twig', array('client' => $client, 'form' => $form->createView()));
    }

}
