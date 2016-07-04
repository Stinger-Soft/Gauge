<?php

namespace StingerSoft\GaugePresentationBundle\Entity;

use StingerSoft\GaugePresentationBundle\Entity\UserSession;
use StingerSoft\GaugePresentationBundle\Model\Session\AnonymousUserSessionInterface;

class AnonymousUserSession extends UserSession implements AnonymousUserSessionInterface {
}