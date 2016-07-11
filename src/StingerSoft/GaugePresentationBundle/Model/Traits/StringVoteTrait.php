<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

trait StringVoteTrait {

	protected $answers;

	public function getAnswers() {
		return $this->answers;
	}

	public function setAnswers($answers) {
		$this->answers = $answers;
		return $this;
	}
}