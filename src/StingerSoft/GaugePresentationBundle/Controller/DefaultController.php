<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use StingerSoft\PlatformBundle\Controller\BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StingerSoft\GaugePresentationBundle\Repository\PresentationRepositoryInterface;
use StingerSoft\GaugePresentationBundle\Entity\Presentation;

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
	
	
	/**
	 * @return PresentationRepositoryInterface
	 */
	protected function getPresentationRepository(){
		return $this->getRepository(Presentation::class);
	}
}
