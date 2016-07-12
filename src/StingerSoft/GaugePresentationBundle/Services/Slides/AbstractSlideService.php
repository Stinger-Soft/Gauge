<?php

namespace StingerSoft\GaugePresentationBundle\Services\Slides;

use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Services\SlideService;

/**
 * Some common methods to support the creation of slide services
 */
abstract class AbstractSlideService implements SlideService {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::isOrm()
	 */
	public function isOrm() {
		return true;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::isOdm()
	 */
	public function isOdm() {
		return !$this->isOrm();
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::hasUserVoted()
	 */
	public function hasUserVoted(UserSessionInterface $session, SlideInterface $slide) {
		// TODO: Use repository to speed up this process
		foreach($slide->getVotes() as $vote) {
			if($vote->getUserSession() == $session)
				return true;
		}
		return false;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getVoteInstance()
	 */
	public function getVoteInstance(UserSessionInterface $session, SlideInterface $slide) {
		
		// TODO: Use repository to speed up this process
		foreach($slide->getVotes() as $vote) {
			if($vote->getUserSession() == $session) {
				return $vote;
			}
		}
		
		$voteClass = $this->getVoteImplementation();
		$vote = new $voteClass();
		$vote->setSlide($slide);
		$vote->setUserSession($session);
		return $vote;
	}
}