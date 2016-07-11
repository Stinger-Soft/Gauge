<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface StringVoteInterface extends VoteInterface {

	/**
	 *
	 * @param string[] $answers        	
	 */
	public function setAnswers($answers);

	public function getAnswers();
}