<?php

namespace Fr\LdapBundle\Controller;

use Fr\ProjetBundle\Controller\MasterController;

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

class LdapController extends MasterController
{
   
    public function loginAction(Request $request)
    {
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
    
    public function annuaireAction()
    {

      $ds = ldap_connect("ldap://ldap.42.fr", 389);
      ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

      $myDn = "uid=aollivie,ou=september,ou=2014,ou=paris,ou=people,dc=42,dc=fr";
      $myPwd = "nuB-3xcO";

      if ($ds) { 
          $result = ldap_bind($ds, $myDn, $myPwd);
   return new Response("okk annuaire");
  //  echo 'Result = ' . $result . '' . PHP_EOL;
/*
$dn = "dc=42, dc=fr";
$filter="(|(uid=aollivie)(givenname=aollivie))";
$justthese = array("jpegphoto");
 
//$sr=ldap_search($ds, $dn, $filter, $justthese);
 
$sr=ldap_search($ds, $dn, $filter, $justthese);
$info = ldap_get_entries($ds, $sr);
 
//echo $info["count"]." entries returned\n";
//print_r($info);
$data = $info[0]["jpegphoto"][0];
//$data = $info[0]["jpegphoto"];


header("content-type: image/jpeg");

//if (base64_decode($data) === FALSE)
  // print("NO");
imagejpeg(imagecreatefromstring($data));
*/


      ldap_close($ds);
      }
    else {

      return new Response("pas okk annuaire");
    }

}

}
