<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\ScaleAnswerInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\ScaleAnswerTrait;

class ScaleAnswer extends Answer implements ScaleAnswerInterface {
	use ScaleAnswerTrait;
}