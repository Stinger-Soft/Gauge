<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;

trait SlideTrait {

	protected $id;

	protected $question;

	protected $description;

	protected $presentation;

	protected $answers;
	
	/**
	 * @var VoteInterface[]
	 */
	protected $votes;

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

	public function getAnswers() {
		return $this->answers;
	}

	public function setAnswers($answers) {
		$this->answers = $answers;
		return $this;
	}

	public function __toString() {
		return $this->question;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	public function getVotes() {
		return $this->votes;
	}

	public function setVotes($votes) {
		$this->votes = $votes;
		return $this;
	}
	


}