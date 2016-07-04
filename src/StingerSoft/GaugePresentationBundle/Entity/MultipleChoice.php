<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\MultipleChoiceTrait;

class MultipleChoice extends Slide implements MultipleChoiceInterface {
	
	use MultipleChoiceTrait;
	
	public function getAnswerClassName(){
		return MultipleChoiceAnswer::class;
	}
}