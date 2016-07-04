<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface MultipleChoiceVoteInterface extends VoteInterface {
	
	public function setAnswers($answers);
	
	public function getAnswers();
	
}