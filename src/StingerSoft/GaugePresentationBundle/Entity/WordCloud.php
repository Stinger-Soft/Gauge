<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\WordCloudInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\WordCloudTrait;

class WordCloud extends Slide implements WordCloudInterface {
	
	use WordCloudTrait;

	public function newVoteInstance() {
		$obj = new StringVote();
		$obj->setAnswers(\array_fill(0, $this->getAnswerCount(), ''));
		return $obj;
	}
}