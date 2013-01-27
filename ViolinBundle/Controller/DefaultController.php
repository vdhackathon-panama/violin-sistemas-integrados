<?php

namespace VDHackaton\ViolinBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	public function indexAction($page) {
		return $this->render("VDHackatonViolinBundle:Default:$page.html.twig");
	}
}
