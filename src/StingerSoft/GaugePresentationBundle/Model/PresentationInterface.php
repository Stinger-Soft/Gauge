<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;

interface PresentationInterface extends Identifiable, Trackable {

	/**
	 *
	 * @return int
	 */
	public function getId();

	/**
	 *
	 * @return string The title of this presentation
	 */
	public function getTitle();

	/**
	 *
	 * @param string $title
	 *        	The title of this presentation
	 */
	public function setTitle($title);

	/**
	 *
	 * @return the unknown_type
	 */
	public function getPrivacy();

	/**
	 *
	 * @param unknown_type $privacy        	
	 */
	public function setPrivacy($privacy);

	/**
	 *
	 * @return the unknown_type
	 */
	public function getPace();

	/**
	 *
	 * @param unknown_type $pace        	
	 */
	public function setPace($pace);

	/**
	 * Add slide
	 *
	 * @param SlideInterface $slide        	
	 *
	 * @return Presentation
	 */
	public function addSlide(SlideInterface $slide);

	/**
	 * Remove slide
	 *
	 * @param SlideInterface $slide        	
	 */
	public function removeSlide(SlideInterface $slide);

	/**
	 * Get slides
	 *
	 * @return \Doctrine\Common\Collections\Collection|SlideInterface[]
	 */
	public function getSlides();
	
	/**
	 * @param SlideInterface $prevSlide
	 * @return SlideInterface|null
	 */
	public function getNextSlide(SlideInterface $prevSlide);
}