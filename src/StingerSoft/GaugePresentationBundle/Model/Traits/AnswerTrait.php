<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\SlideInterface;

trait AnswerTrait {

	protected $id;

	protected $question;

	public function getId() {
		return $this->id;
	}

	public function getQuestion() {
		return $this->question;
	}

	public function setQuestion(SlideInterface $question) {
		$this->question = $question;
		return $this;
	}
}