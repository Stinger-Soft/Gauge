<?php

namespace StingerSoft\GaugePresentationBundle\Services;

use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;

interface PresentationService {
	
	
	public function getFreePresentationId();
	
	
	public function unsetOldPresentationIds();
	
	
	/**
	 * @return SlideInterface
	 */
	public function getNextSlide(PresentationInterface $presentation, SlideInterface $previousSlide);
	
	
	/**
	 * @param SlideInterface $slide
	 * @return boolean
	 */
	public function isSlideReady(SlideInterface $slide);
}