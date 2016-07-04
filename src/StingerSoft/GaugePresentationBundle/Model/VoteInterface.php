<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;

interface VoteInterface extends Identifiable, Trackable {

	public function getSlide();

	public function setSlide(SlideInterface $slide);

	public function getUserSession();

	public function setUserSession();
}