<?php

namespace StingerSoft\GaugePresentationBundle\Model\Session;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;

interface UserSessionInterface extends Identifiable {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\PlatformBundle\Model\Identifiable::getId()
	 */
	public function getId();

	

	public function getActivePresentation();
	
	public function setActivePresentation(PresentationInterface $presentation);
	
	/**
	 * @return SlideInterface[]
	 */
	public function getAnsweredSlides();
	
	/**
	 * @param SlideInterface[] $slides
	 */
	public function setAnsweredSlides($slides);
	
	
}