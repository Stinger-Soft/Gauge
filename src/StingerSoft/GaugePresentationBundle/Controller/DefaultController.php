<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseController {

	public function indexAction(Request $request) {
		$presentations = $this->getPaginator()->paginate(
				$this->getPresentationRepository()->paginatePresentationsByUser($this->getUser()),
				$request->get('page', 1),
				15
		);
		
		return $this->render('StingerSoftGaugePresentationBundle:Default:index.html.twig', array(
			'presentations' => $presentations,
		));
	}
	
	

}
