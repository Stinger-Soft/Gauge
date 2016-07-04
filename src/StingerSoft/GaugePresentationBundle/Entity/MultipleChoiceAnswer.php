<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceAnswerInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\MultipleChoiceAnswerTrait;

class MultipleChoiceAnswer extends Answer implements MultipleChoiceAnswerInterface {
	use MultipleChoiceAnswerTrait;
}