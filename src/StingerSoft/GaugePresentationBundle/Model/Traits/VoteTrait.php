<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;

trait VoteTrait {

	protected $id;

	/**
	 *
	 * @var SlideInterface
	 */
	protected $slide;

	/**
	 *
	 * @var UserSessionInterface
	 */
	protected $userSession;

	public function getId() {
		return $this->id;
	}

	public function getSlide() {
		return $this->slide;
	}

	public function setSlide(SlideInterface $slide) {
		$this->slide = $slide;
		return $this;
	}

	public function getUserSession() {
		return $this->userSession;
	}

	public function setUserSession(UserSessionInterface $userSession) {
		$this->userSession = $userSession;
		return $this;
	}
}