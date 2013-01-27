<?php
namespace VDHackaton\ViolinBundle\Controller;

use VDHackaton\ViolinBundle\Entity\Victim;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller {
	public function createAction() {
		// 		$secretKey = $this->get('request')->query->query->get('secret');
		// 		$integratedAccount = $this->getDoctrine()
		// 				->getRepository('VDHackatonViolinBundle:IntegratedAccount')
		// 				->findOneBySecretKey($secretKey);
		$entityType = $this->get('request')->query->get('entity');

		switch ($entityType) {
		case "victim":
			$victim = new Victim();
			$victim->id = $this->get('request')->query->get('id');
			$victim->firstName = $this->get('request')->query->get('firstName');
			$victim->lastName = $this->get('request')->query->get('lastName');
			$victim->birthDate = \DateTime::createFromFormat('Y-m-d',
					$this->get('request')->query->get('birthDate'));

			$em = $this->getDoctrine()->getManager();
			$em->persist($victim);
			$em->flush();

			return new Response($victim->id, 200,
					array('Content-Type' => 'text/plain'));

			break;
		default:
			break;

		}

		return new Response("", 404, array('Content-Type' => 'text/plain'));
	}
	
	public function queryAction()
	{
		
	}
	
	public function  statsAction()
	{
	}
}
