<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\PresentationTrait;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

class Presentation implements PresentationInterface {
	
	use PresentationTrait;
	use ORMBehaviors\Blameable\Blameable;
	use ORMBehaviors\Timestampable\Timestampable;
}
