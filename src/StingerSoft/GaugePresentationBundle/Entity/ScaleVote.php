<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\ScaleVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\ScaleVoteTrait;

class ScaleVote extends Vote implements ScaleVoteInterface {
	
	use ScaleVoteTrait;
}