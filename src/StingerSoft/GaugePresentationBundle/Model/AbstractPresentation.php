<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use Knp\DoctrineBehaviors\Model as KnpBehaviors;
use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;

abstract class AbstractPresentation implements Identifiable, Trackable {
	
	use KnpBehaviors\Blameable\Blameable;
	use KnpBehaviors\Timestampable\Timestampable;

	protected $id;

	protected $title;

	protected $privacy;

	protected $pace;

	protected $slides;

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
}