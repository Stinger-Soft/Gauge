<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceAnswerInterface;

trait MultipleChoiceVoteTrait {

	/**
	 *
	 * @var MultipleChoiceAnswerInterface[]
	 */
	protected $answers;

	public function getAnswers() {
		return $this->answers;
	}

	public function setAnswers($answers) {
		if($answers instanceof MultipleChoiceAnswerInterface){
			$answers = array($answers);
		}
		$this->answers = $answers;
		return $this;
	}
}