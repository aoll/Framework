<?php
// src/Fr/ProjetBundle/Controller/MasterController

namespace Fr\ProjetBundle\Controller;

use Fr\LogBundle\Entity\Log;
use Fr\ProjetBundle\Entity\Admin;
//use Fr\ProjetBundle\Controller\BundleController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;


class MasterController extends Controller
{
    protected $myDn = "uid=aollivie,ou=september,ou=2014,ou=paris,ou=people,dc=42,dc=fr";
    protected $myPwd = "nuB-3xcO";
    protected $newDn;
    
  public function addLog($action = NULL)
    {
        $em = $this->getDoctrine()->getManager();
        $log = new Log();

	$user = $this->container->get('security.context')->getToken()->getUser();
        $log->setUsername($user);

	$date = new \DateTime();
	$log->setDate($date);

        $log->setAction($action);

        $url = $this->container->get('request')->headers->get('referer');
	$log->setUrl($url);


   
        $log->setAction('visited');
    if (strstr($url, 'login') !== FALSE)
        $log->setAction('login');

	$em->persist($log);
        $em->flush();
        return;
        }
}