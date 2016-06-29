<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;
use StingerSoft\GaugePresentationBundle\Model\PresentationTrait;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

class Presentation implements PresentationInterface {
	
	use PresentationTrait;
	use ORMBehaviors\Blameable\Blameable;
	use ORMBehaviors\Sortable\Sortable;
	use ORMBehaviors\Timestampable\Timestampable;
}