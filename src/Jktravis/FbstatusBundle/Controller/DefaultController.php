<?php

namespace Jktravis\FbstatusBundle\Controller;

use Jktravis\FbstatusBundle\Entity\Action;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 */
	public function indexAction()
	{
		$actionRepo = $this->getDoctrine()
			->getRepository('JktravisFbstatusBundle:Action');

		if (!$actionRepo) {
			throw $this->createNotFoundException(
				'No Action found for id '.$id
			);
		}

		$actions = $actionRepo->findAll();

		$action = $actionRepo->find(rand(1, count($actions)))->getAction();

		return $this->render('JktravisFbstatusBundle:Default:index.html.twig',
			array('action' => $action));
	}
}
