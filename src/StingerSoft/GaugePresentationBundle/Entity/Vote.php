<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use StingerSoft\GaugePresentationBundle\Model\Traits\VoteTrait;
use StingerSoft\GaugePresentationBundle\Model\VoteInterface;

abstract class Vote implements VoteInterface {
	
	use VoteTrait;
	use ORMBehaviors\Blameable\Blameable;
	use ORMBehaviors\Timestampable\Timestampable;
}