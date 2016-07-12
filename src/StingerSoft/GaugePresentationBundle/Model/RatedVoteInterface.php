<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;

interface RatedVoteInterface extends Identifiable {
	
	/**
	 *
	 * @return AnswerInterface
	 */
	public function getAnswer();

	public function setAnswer(AnswerInterface $answer);

	public function getRating();

	public function setRating($rating);
}