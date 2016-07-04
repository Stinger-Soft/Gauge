<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use StingerSoft\PlatformBundle\Controller\BaseController as PlatformController;
use StingerSoft\GaugePresentationBundle\Entity\Presentation;
use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;
use StingerSoft\GaugePresentationBundle\Entity\Slide;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Repository\SlideRepositoryInterface;

class BaseController extends PlatformController {
	
	protected $presentationClass = Presentation::class;
	
	protected $slideClass = Slide::class;
	

	/**
	 *
	 * @return PresentationRepositoryInterface
	 */
	protected function getPresentationRepository() {
		return $this->getRepository($this->presentationClass);
	}
	
	/**
	 *
	 * @return SlideRepositoryInterface
	 */
	protected function getSlideRepository() {
		return $this->getRepository($this->slideClass);
	}

	/**
	 *
	 * @param boolean $throw404        	
	 * @return PresentationInterface
	 */
	protected function getPresentationById($presentationId, $throw404 = true) {
		$presentation = $this->getPresentationRepository()->find($presentationId);
		if(!$presentation && $throw404) {
			throw $this->createNotFoundException();
		}
		return $presentation;
	}
	
	/**
	 *
	 * @param boolean $throw404
	 * @return SlideInterface
	 */
	protected function getSlideById($slideId, $throw404 = true) {
		$presentation = $this->getSlideRepository()->find($slideId);
		if(!$presentation && $throw404) {
			throw $this->createNotFoundException();
		}
		return $presentation;
	}
}