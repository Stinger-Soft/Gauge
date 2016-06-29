<?php

namespace StingerSoft\GaugePresentationBundle\Model;

trait MultipleChoiceAnswerTrait {

	protected $id;

	protected $answer;

	protected $question;

	public function getId() {
		return $this->id;
	}

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer($answer) {
		$this->answer = $answer;
		return $this;
	}

	public function getQuestion() {
		return $this->question;
	}

	public function setQuestion($question) {
		$this->question = $question;
		return $this;
	}
}