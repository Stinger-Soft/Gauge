<?php

namespace StingerSoft\GaugePresentationBundle\Entity\Enums;

abstract class Privacy {
	
	const PRIVACY_ANONYMOUS = 0;
	
	const PRIVACY_TRACEABLE = 1;
	
	const PRIVACY_USERNAME = 2;
	
	const PRIVACY_LOGIN = 3;
}