<?php

namespace StingerSoft\GaugePresentationBundle\Model;

abstract class AbstractMultipleChoice extends AbstractSlide {
	
	protected $allowMultiple;
	
	protected $showResultInPercentage;
	
	protected $answers;
}