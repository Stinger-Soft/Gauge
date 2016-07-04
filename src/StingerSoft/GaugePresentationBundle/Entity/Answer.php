<?php
namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\AnswerInterface;
use StingerSoft\GaugePresentationBundle\Model\Traits\AnswerTrait;

abstract class Answer implements AnswerInterface {
	
	use AnswerTrait;
}