<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionTrait;

abstract class UserSession implements UserSessionInterface {
	
	use UserSessionTrait;
}