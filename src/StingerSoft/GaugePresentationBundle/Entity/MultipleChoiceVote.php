<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\MultipleChoiceVoteTrait;

class MultipleChoiceVote extends Vote implements MultipleChoiceVoteInterface {
	use MultipleChoiceVoteTrait;
}