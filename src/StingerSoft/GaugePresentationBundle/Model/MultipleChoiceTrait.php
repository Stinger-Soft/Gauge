<?php

namespace StingerSoft\GaugePresentationBundle\Model;

trait MultipleChoiceTrait {

	protected $allowMultiple;

	protected $showResultInPercentage;

	protected $answers;

	public function getAllowMultiple() {
		return $this->allowMultiple;
	}

	public function setAllowMultiple($allowMultiple) {
		$this->allowMultiple = $allowMultiple;
		return $this;
	}

	public function getShowResultInPercentage() {
		return $this->showResultInPercentage;
	}

	public function setShowResultInPercentage($showResultInPercentage) {
		$this->showResultInPercentage = $showResultInPercentage;
		return $this;
	}

	public function getAnswers() {
		return $this->answers;
	}

	public function setAnswers($answers) {
		$this->answers = $answers;
		return $this;
	}
}