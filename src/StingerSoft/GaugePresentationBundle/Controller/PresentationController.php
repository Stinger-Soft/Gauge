<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class PresentationController extends BaseController {

	public function indexAction(Request $request, $presentation) {
		$presentation = $this->getPresentationById($presentation);
		
		
		return $this->render('StingerSoftGaugePresentationBundle:Presentation:index.html.twig', array(
			'presentation' => $presentation,
			'slide' => $presentation->getSlides()->first()
		));
	}
}