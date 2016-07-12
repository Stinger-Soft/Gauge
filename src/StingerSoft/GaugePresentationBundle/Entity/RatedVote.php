<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\RatedVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\RatedVoteTrait;

class RatedVote implements RatedVoteInterface {
	
	use RatedVoteTrait;
}