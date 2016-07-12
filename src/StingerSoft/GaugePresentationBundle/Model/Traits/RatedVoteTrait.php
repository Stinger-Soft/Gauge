<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\AnswerInterface;

trait RatedVoteTrait {
	
	protected $id;

	/**
	 *
	 * @var AnswerInterface
	 */
	protected $answer;

	/**
	 *
	 * @var number
	 */
	protected $rating;

	public function getAnswer() {
		return $this->answer;
	}

	public function setAnswer(AnswerInterface $answer) {
		$this->answer = $answer;
		return $this;
	}

	public function getRating() {
		return $this->rating;
	}

	public function setRating($rating) {
		$this->rating = $rating;
		return $this;
	}

	public function getId() {
		return $this->id;
	}
	
}