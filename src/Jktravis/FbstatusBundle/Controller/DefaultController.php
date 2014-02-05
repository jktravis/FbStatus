<?php

namespace Jktravis\FbstatusBundle\Controller;

use Jktravis\FbstatusBundle\Entity\Action;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="home")
	 */
	public function indexAction()
	{
		return $this->render('JktravisFbstatusBundle:Default:index.html.twig',
			array(
				'action' => $this->getStatusElement('action'),
				'noun' => $this->getStatusElement('noun'),
				'verb' => $this->getStatusElement('verb'),
		));
	}

	protected function getStatusElement($element)
	{
		switch($element)
		{
			case 'action':
				$db = 'JktravisFbstatusBundle:Action';
				break;
			case 'noun':
				$db = 'JktravisFbstatusBundle:Noun';
				break;
			case 'verb':
				$db = 'JktravisFbstatusBundle:Verb';
				break;
		}

		$repo = $this->getDoctrine()
			->getRepository($db);

		if (!$repo) {
			throw $this->createNotFoundException(
				'No ' . $element . ' found for id ' . $id
			);
		}

		$collection = $repo->findAll();

		$singularity = $repo->find(rand(1, count($collection)))->getElement();

		return $singularity;
	}
}
