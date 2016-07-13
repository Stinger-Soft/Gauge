<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class SlideController extends BaseController {

	public function slideAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		$service = $this->getSlideService($slide);
		return $this->redirect($service->getPresentationRoute(), array(
			'slide' => $slide->getId() 
		));
	}

	public function dataAction(Request $request, $slide) {
	}
}