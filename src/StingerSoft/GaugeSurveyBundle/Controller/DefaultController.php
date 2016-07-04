<?php

namespace StingerSoft\GaugeSurveyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use StingerSoft\GaugePresentationBundle\Form\MultipleChoiceType;

class DefaultController extends BaseController {
	
	public function presentationAction(Request $request, $presentation){
		$presentation = $this->getPresentationById($presentation);
		$this->redirect('stinger_soft_gauge_survey_homepage', array(
			'slide' => $presentation->getSlides()->first()->getId(),
		));
		
	}

	public function questionAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		
		$session = $this->getUserSession($request->getSession(), $slide->getPresentation());
		
		$formClass = MultipleChoiceType::class; // $this->getSlideService($slide)->getUserForm();
		
		$form = $this->createForm($formClass, null, array(
			'slide' => $slide 
		));
		
		if($request->isMethod('POST')) {
			$form->handleRequest($request);
			if($form->isValid()) {
				$presentation = $slide->getPresentation();
			}
		}
		
		return $this->render('StingerSoftGaugeSurveyBundle:MultipleChoice:slide.html.twig', array(
			'form' => $form->createView(),
			'slide' => $slide,
		));
	}
}
