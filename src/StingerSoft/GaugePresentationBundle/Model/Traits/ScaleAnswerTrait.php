<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

trait ScaleAnswerTrait {
	
	protected $answer;

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer($answer) {
		$this->answer = $answer;
		return $this;
	}
}