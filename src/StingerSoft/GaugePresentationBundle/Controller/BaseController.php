<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use StingerSoft\GaugePresentationBundle\Entity\Presentation;
use StingerSoft\GaugePresentationBundle\Entity\Slide;
use StingerSoft\GaugePresentationBundle\Entity\UserSession;
use StingerSoft\GaugePresentationBundle\Entity\AnonymousUserSession;
use StingerSoft\GaugePresentationBundle\Model\Enums\Privacy;
use StingerSoft\GaugePresentationBundle\Model\PresentationInterface;
use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Repository\SlideRepositoryInterface;
use StingerSoft\GaugePresentationBundle\Repository\UserSessionRepositoryInterface;
use StingerSoft\GaugePresentationBundle\Services\SlideService;
use StingerSoft\PlatformBundle\Controller\BaseController as PlatformController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BaseController extends PlatformController {

	protected $presentationClass = Presentation::class;

	protected $slideClass = Slide::class;

	protected $sessionClass = UserSession::class;

	protected $anonymousUserSession = AnonymousUserSession::class;

	/**
	 *
	 * @return PresentationRepositoryInterface
	 */
	protected function getPresentationRepository() {
		return $this->getRepository($this->presentationClass);
	}

	/**
	 *
	 * @return SlideRepositoryInterface
	 */
	protected function getSlideRepository() {
		return $this->getRepository($this->slideClass);
	}

	/**
	 *
	 * @return UserSessionRepositoryInterface
	 */
	protected function getUserSessionRepository() {
		return $this->getRepository($this->sessionClass);
	}

	/**
	 *
	 * @param boolean $throw404        	
	 * @return UserSessionInterface
	 */
	protected function getSessionById($sessionId, $throw404 = true) {
		$session = $this->getUserSessionRepository()->find($sessionId);
		if(!$session && $throw404) {
			throw $this->createNotFoundException();
		}
		return $session;
	}

	/**
	 *
	 * @param boolean $throw404        	
	 * @return PresentationInterface
	 */
	protected function getPresentationById($presentationId, $throw404 = true) {
		$presentation = $this->getPresentationRepository()->find($presentationId);
		if(!$presentation && $throw404) {
			throw $this->createNotFoundException();
		}
		return $presentation;
	}

	/**
	 *
	 * @param boolean $throw404        	
	 * @return SlideInterface
	 */
	protected function getSlideById($slideId, $throw404 = true) {
		$presentation = $this->getSlideRepository()->find($slideId);
		if(!$presentation && $throw404) {
			throw $this->createNotFoundException();
		}
		return $presentation;
	}

	/**
	 *
	 * @param boolean $create        	
	 * @return UserSessionInterface
	 */
	protected function getUserSession(SessionInterface $session, PresentationInterface $presentation, $create = false) {
		$sessionId = $session->get('gauge_session_id');
		$userSession = $sessionId ? $this->getSessionById($sessionId) : null;
		if($userSession)
			return $userSession;
		
		switch($presentation->getPrivacy()) {
			case Privacy::PRIVACY_ANONYMOUS:
				$userSession = new $this->anonymousUserSession();
				break;
			case Privacy::PRIVACY_TRACEABLE:
			case Privacy::PRIVACY_USERNAME:
			case Privacy::PRIVACY_LOGIN:
			default:
				throw new \IllegalArgumentException('Not implemented yet');
		}
		$em = $this->getDoctrine()->getManagerForClass(get_class($userSession));
		$userSession->setActivePresentation($presentation);
		$em->persist($userSession);
		$em->flush();
		$session->set('gauge_session_id', $userSession->getId());
		return $userSession;
	}

	/**
	 *
	 * @param SlideInterface $slide        	
	 * @return SlideService
	 */
	protected function getSlideService(SlideInterface $slide) {
	}
}