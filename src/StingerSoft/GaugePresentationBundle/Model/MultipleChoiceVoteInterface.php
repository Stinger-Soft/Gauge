<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface MultipleChoiceVoteInterface extends VoteInterface {

	/**
	 *
	 * @param MultipleChoiceAnswerInterface[] $answers        	
	 */
	public function setAnswers($answers);

	public function getAnswers();
}