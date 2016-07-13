<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class PresentationController extends BaseController {

	public function indexAction(Request $request, $presentation) {
		$presentation = $this->getPresentationById($presentation);
		
		
		$slide = $presentation->getSlides()->first();
		
		$slideIds = array();
		foreach($presentation->getSlides() as $item){
			$slideIds[] = $item->getId();
		}
		
		return $this->render('StingerSoftGaugePresentationBundle:Presentation:presentation.html.twig', array(
			'presentation' => $presentation,
			'slide' => $slide,
			'slideService' => $this->getSlideService($slide),
			'slideIds' => $slideIds,
		));
	}
}