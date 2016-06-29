<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceTrait;

class MultipleChoice extends Slide implements MultipleChoiceInterface {
	
	use MultipleChoiceTrait;
}