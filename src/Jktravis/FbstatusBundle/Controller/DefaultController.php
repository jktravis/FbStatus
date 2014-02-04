<?php

namespace Jktravis\FbstatusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function indexAction($name)
	{
		return $this->render('JktravisFbstatusBundle:Default:index.html.twig', array('name' => $name));
	}
}
