<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\StringVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\StringVoteTrait;

class StringVote extends Vote implements StringVoteInterface {
	
	use StringVoteTrait;
	
}