<?php

namespace StingerSoft\GaugePresentationBundle\Model\Session;

use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;

trait UserSessionTrait {

	protected $id;

	protected $activePresentation;

	protected $answeredSlides;

	public function getId() {
		return $this->id;
	}

	public function getActivePresentation() {
		return $this->activePresentation;
	}

	public function setActivePresentation(PresentationInterface $activePresentation) {
		$this->activePresentation = $activePresentation;
		return $this;
	}

	public function getAnsweredSlides() {
		return $this->answeredSlides;
	}

	public function setAnsweredSlides($answeredSlides) {
		$this->answeredSlides = $answeredSlides;
		return $this;
	}
}