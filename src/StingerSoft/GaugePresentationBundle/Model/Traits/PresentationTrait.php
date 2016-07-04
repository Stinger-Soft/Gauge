<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\SlideInterface;

trait PresentationTrait {

	protected $id;

	protected $title;

	protected $privacy;

	protected $pace;

	protected $slides;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->slides = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 *
	 * @return string The title of this presentation
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 *
	 * @param string $title
	 *        	The title of this presentation
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 *
	 * @return the unknown_type
	 */
	public function getPrivacy() {
		return $this->privacy;
	}

	/**
	 *
	 * @param unknown_type $privacy        	
	 */
	public function setPrivacy($privacy) {
		$this->privacy = $privacy;
		return $this;
	}

	/**
	 *
	 * @return the unknown_type
	 */
	public function getPace() {
		return $this->pace;
	}

	/**
	 *
	 * @param unknown_type $pace        	
	 */
	public function setPace($pace) {
		$this->pace = $pace;
		return $this;
	}

	/**
	 * Add slide
	 *
	 * @param SlideInterface $slide        	
	 *
	 * @return Presentation
	 */
	public function addSlide(SlideInterface $slide) {
		$this->slides[] = $slide;
		
		return $this;
	}

	/**
	 * Remove slide
	 *
	 * @param SlideInterface $slide        	
	 */
	public function removeSlide(SlideInterface $slide) {
		$this->slides->removeElement($slide);
	}

	/**
	 * Get slides
	 *
	 * @return \Doctrine\Common\Collections\Collection|SlideInterface[]
	 */
	public function getSlides() {
		return $this->slides;
	}
}