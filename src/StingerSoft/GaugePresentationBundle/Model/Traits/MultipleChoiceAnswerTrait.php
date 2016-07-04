<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

trait MultipleChoiceAnswerTrait {
	
	protected $answer;

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer($answer) {
		$this->answer = $answer;
		return $this;
	}
	
	public function __toString(){
		return $this->answer;
	}
}