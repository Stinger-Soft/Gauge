<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\ScaleInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\ScaleTrait;

class Scale extends Slide implements ScaleInterface {
	
	use ScaleTrait;

	public function newVoteInstance() {
		return null;
	}
}