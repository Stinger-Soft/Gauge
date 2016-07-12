<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\ScaleInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\ScaleTrait;

class Scale extends Slide implements ScaleInterface {
	
	use ScaleTrait;

	public function newVoteInstance() {
		$vote = new ScaleVote();
		$ratings = array();
		foreach($this->getAnswers() as $answer) {
			$rVote = new RatedVote();
			$rVote->setAnswer($answer);
			$ratings[] = $rVote;
		}
		$vote->setRatings($ratings);
		return $vote;
	}
}