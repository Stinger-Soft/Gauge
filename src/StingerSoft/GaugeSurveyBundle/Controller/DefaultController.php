<?php

namespace StingerSoft\GaugeSurveyBundle\Controller;

use Doctrine\Common\Util\ClassUtils;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseController {

	/**
	 * Starts the given presentation
	 *
	 * @param Request $request        	
	 * @param integer $presentation        	
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function presentationAction(Request $request, $presentation) {
		$presentation = $this->getPresentationById($presentation);
		return $this->redirectToRoute('stinger_soft_gauge_survey_slide', array(
			'slide' => $presentation->getSlides()->first()->getId() 
		));
	}

	/**
	 *
	 * @param Request $request        	
	 * @param integer $slide        	
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
	public function questionAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		
		$session = $this->getUserSession($request->getSession(), $slide->getPresentation(), true);
		
		$service = $this->getSlideService($slide);
		
		$formClass = $service->getUserForm();
		
		$vote = $service->getVoteInstance($session, $slide);
		
		$form = $this->createForm($formClass, $vote, array(
			'slide' => $slide,
			'skip' => $service->hasUserVoted($session, $slide),
		));
		
		if($request->isMethod('POST')) {
			$form->handleRequest($request);
			if($form->isValid()) {
				
				if($form->has('submit') && $form->get('submit')->isClicked()){
					$om = $this->getDoctrine()->getManagerForClass(ClassUtils::getClass($vote));
					$om->persist($vote);
					$om->flush();
				}
				return $this->redirectToRoute('stinger_soft_gauge_survey_next_slide', array(
					'slide' => $slide->getId() 
				));
			}
		}
		
		return $this->render('StingerSoftGaugeSurveyBundle:Default:slide.html.twig', array(
			'form' => $form->createView(),
			'slide' => $slide 
		));
	}

	public function thanksAction(Request $request, $presentation) {
		$presentation = $this->getPresentationById($presentation);
		return $this->render('StingerSoftGaugeSurveyBundle:Default:thanks.html.twig', array(
			'presentation' => $presentation 
		));
	}

	public function nextSlideAction(Request $request, $slide) {
		$prevSlide = $this->getSlideById($slide);
		$presentation = $prevSlide->getPresentation();
		
		$session = $this->getUserSession($request->getSession(), $presentation, false);
		$slide = $presentation->getNextSlide($prevSlide);
		
		if($slide === null) {
			return $this->redirectToRoute('stinger_soft_gauge_survey_thanks', array(
				'presentation' => $presentation->getId() 
			));
		}
		
		// TODO Check if presenter pace and already started
		// TODO Check if last slide was reached
		return $this->redirectToRoute('stinger_soft_gauge_survey_slide', array(
			'slide' => $slide->getId() 
		));
	}
}
