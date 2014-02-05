<?php

namespace Jktravis\FbstatusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
	/**
	 * @Route("/api/status.json", name="status.json")
	 */
	public function indexAction()
	{
		return new Response("json");
	}
}
