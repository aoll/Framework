<?php

namespace Fr\LdapBundle\Controller;

use Fr\LogBundle\Controller\LogasController;

use Fr\LdapBundle\Entity\People;
use Fr\UserBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class LdapController extends LogasController
{
   
    public function loginAction(Request $request)
    {

	      $people = new People();

	  $form = $this->get('form.factory')->createBuilder('form', $people)
      	  	->add('login', 'text')
      		->add('pass', 'password')
      		->add('save', 'submit')
      		->getForm();



    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($people);
      /*
       *on bind le serveur ldap avec $people->login & $people->pass
       *
       *si reponse ok, on set l'user courant: TODO MTN
       */
      //$em->flush();

      //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      $nb = time();
        
      $user = new User();
      $user->setUsername($people->getLogin());
      $user->setEmail($nb);
      $user->setPassword($people->getPass());
    //  $em->persist($user);
		//  $em->flush();

     // $repo  = $em->getRepository("UserBundle:User"); //Entity Repository
      //$user = $repo->loadUserByUsername($people->getLogin());
    if (!$user) {
      throw new UsernameNotFoundException("User not found");
    } else {
      $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
    $this->get("security.context")->setToken($token); //now the user is logged in
     
    //now dispatch the login event
    $request = $this->get("request");
    $event = new InteractiveLoginEvent($request, $token);
    $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
  }
		//$this->logasAction($user->getId(), $request);
		
/*
$user = $em->getRepository('FrUserBundle:User')->find($user);
       $this->container->get('security.context')->getToken()->setUser($user);
   
	   //return new Response($people->getPass());
*/
     return $this->redirect($this->generateUrl('fr_projet_home_fr'));
    }

//	return new Response("ldap login ok2");
   return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),));

    }
    




}
