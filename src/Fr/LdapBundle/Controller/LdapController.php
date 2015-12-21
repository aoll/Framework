<?php

namespace Fr\LdapBundle\Controller;

use Fr\ProjetBundle\Controller\MasterController;

use Fr\LdapBundle\Entity\People;
use Fr\LdapBundle\Entity\Search;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Fr\ForumBundle\Form\AnswerEditType;
use Fr\ForumBundle\Form\AnswerType;
use Fr\ForumBundle\Entity\Answer;
use Fr\ForumBundle\Entity\Threads;
use Fr\ForumBundle\Entity\SousCategorie;
use Fr\ForumBundle\Entity\Categorie;
use Fr\UserBundle\Entity\User;
use Fr\LogBundle\Entity\Log;
use Fr\LogBundle\Entity\Logas;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class LdapController extends MasterController
{
   
    public function loginAction(Request $request)
    {
        $this->addLog();
       //return new Response($this->test);
	      $people = new People();

	      $form = $this->get('form.factory')->createBuilder('form', $people)
      	  	->add('login', 'text')
      		->add('pass', 'password')
      		->add('save', 'submit')
      		->getForm();

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
     
          $ds = ldap_connect("ldap://ldap.42.fr", 389);
          ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
          $myDn = $this->myDn;
          $myPwd = $this->myPwd;
     
          if ($ds) { 
            $result = ldap_bind($ds, $myDn, $myPwd);

            $dn = "dc=42, dc=fr";
            $tmp = $people->getLogin();
            $filter="(|(uid=$tmp)(givenname=$tmp))";
            $justthese = array("dn");
            $sr=ldap_search($ds, $dn, $filter, $justthese);
            
            $info = ldap_get_entries($ds, $sr);
            
            if (count($info) == 1)
              return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),));
            $newDn = $info[0]["dn"];
            ldap_close($ds);

            $ds = ldap_connect("ldap://ldap.42.fr", 389);
            ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

            $myDn = $newDn;
            $myPwd = $people->getPass();

            $result = 0;

          
           //   $result = ldap_bind($ds, $myDn, $myPwd);

              if ($ds) {
                //$result = ldap_bind($ds, $myDn, $myPwd);
               // ldap_close($ds);
                try
                {
                  if (@ldap_bind($ds, $myDn, $myPwd) == FALSE)
                    return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),));
                }
                catch (Exception $e)
                {
                  return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),));
                }
              }

                else
                  return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),)); }
              
              //$result = ldap_bind($ds, $myDn, $myPwd);
                  $nb = time();
                  $user = new User();
                  $user->setEmail($nb);
          $user->setPassword($people->getPass());
   
          if (!$user) {
            throw new UsernameNotFoundException("User not found");
          } else {
            $token = new UsernamePasswordToken($people->getLogin(), null, "main", $user->getRoles());
            $this->get("security.context")->setToken($token); //now the user is logged in
     
            //now dispatch the login event
            $request = $this->get("request");
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
          }
	
          return $this->redirect($this->generateUrl('fr_projet_home_fr'));
        }

        //	return new Response("ldap login ok2");
        return $this->render('FrLdapBundle:Ldap:ldap_login.html.twig', array('form' => $form->createView(),));

    }
    
    public function annuaireAction(Request $request)
    {
        $search = new Search();

        $form = $this->get('form.factory')->createBuilder('form', $search)
            ->add('Login', 'text')
            ->add('go', 'submit')
            ->getForm();

        if ($form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();

          $ds = ldap_connect("ldap://ldap.42.fr", 389);
          ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
          $myDn = $this->myDn;
          $myPwd = $this->myPwd;

          if ($ds) { 
            $result = ldap_bind($ds, $myDn, $myPwd);

            $dn = "dc=42, dc=fr";
            $tmp = $search->getLogin();
            $filter="(|(uid=$tmp))";
            $justthese = array();
            $sr=ldap_search($ds, $dn, $filter, $justthese);
            
            $info = ldap_get_entries($ds, $sr);

            if (count($info) == 1)
              return $this->render('FrLdapBundle:Ldap:ldap_annuaire.html.twig', array('form' => $form->createView(),));
            ldap_close($ds);
            }
            return $this->render('FrLdapBundle:Ldap:ldap_annuaire_aff.html.twig', array('info' => $info[0]));
         // return new Response("ok request valide");
        }
      
        return $this->render('FrLdapBundle:Ldap:ldap_annuaire.html.twig', array('form' => $form->createView(),));

    }

    public function ldap_logasAction($login, Request $request)
      {
    $this->addLog();

    //return new Response($id);

    $em = $this->getDoctrine()->getManager();
    $logas = new Logas();

    
    $useradmin = $this->container->get('security.context')->getToken()->getUser();
    $logas->setAdmin($useradmin);
  //  return new Response($useradmin);

    
    $logas->setUsername($login);
    //return new Response($user);
       
    $em->persist($logas);
          $em->flush();
    $this->container->get('security.context')->getToken()->setUser($login);
    //return new Response($user);
    //$user = $this->container->get('security.context')->getToken()->getUser();
      //return new Response($user);
    $session = $request->getSession();
    $session->set('admin', $logas->getAdmin());

     $nb = time();
                  $user = new User();
                  $user->setEmail($nb);
          $user->setPassword("jknnk");
   
          if (!$user) {
            throw new UsernameNotFoundException("User not found");
          } else {
            $token = new UsernamePasswordToken($login, null, "main", $user->getRoles());
            $this->get("security.context")->setToken($token); //now the user is logged in
     
            //now dispatch the login event
            $request = $this->get("request");
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
          }
  
          return $this->redirect($this->generateUrl('fr_projet_home_fr'));

    return new Response("okokok");
    return new RedirectResponse('http://localhost:8080/Symfony/web/app_dev.php/fr/home');
    //return $this->redirect($this->generateUrl('fr_projet_login'));//, array('user' => $user)));
  
  }

    public function tofAction($tof)
  {
    header("content-type: image/jpeg"); 
   return imagejpeg(imagecreatefromstring($tof));
    $response = new StreamedResponse(function () use ($tof) {
        echo stream_get_contents($tof);
    });
    $response->headers->set('Content-Type', 'image/jpeg');
 

    return $response;
  }
  
}
