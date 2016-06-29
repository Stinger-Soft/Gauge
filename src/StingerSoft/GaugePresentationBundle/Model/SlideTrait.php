<?php

namespace StingerSoft\GaugePresentationBundle\Model;

trait SlideTrait {

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

	public function getPresentation() {
		return $this->presentation;
	}

	public function setPresentation(PresentationInterface $presentation) {
		$this->presentation = $presentation;
		return $this;
	}
	
}