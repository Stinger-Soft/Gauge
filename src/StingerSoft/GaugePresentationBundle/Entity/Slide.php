<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\SlideTrait;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

abstract class Slide implements SlideInterface {
	use SlideTrait;
	use ORMBehaviors\Blameable\Blameable;
	use ORMBehaviors\Sortable\Sortable;
	use ORMBehaviors\Timestampable\Timestampable;
}