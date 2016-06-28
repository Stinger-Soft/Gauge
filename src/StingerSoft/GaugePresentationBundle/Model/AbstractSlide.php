<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;
use Knp\DoctrineBehaviors\Model as KnpBehaviors;

abstract class AbstractSlide implements Identifiable, Trackable {
	
	use KnpBehaviors\Blameable\Blameable;
	use KnpBehaviors\Sortable\Sortable;
	use KnpBehaviors\Timestampable\Timestampable;

	protected $id;

	protected $question;

	protected $description;

	protected $presentation;

	public function getId() {
		return $this->id;
	}

	public function getQuestion() {
		return $this->question;
	}

	public function setQuestion($question) {
		$this->question = $question;
		return $this;
	}
}