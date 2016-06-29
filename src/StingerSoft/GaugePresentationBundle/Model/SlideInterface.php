<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;

interface SlideInterface extends Identifiable, Trackable {

	public function getId();

	public function getQuestion();

	public function setQuestion($question);
}