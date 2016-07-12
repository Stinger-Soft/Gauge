<?php

namespace StingerSoft\GaugePresentationBundle\Services\Slides;

use StingerSoft\GaugePresentationBundle\Entity\StringVote;
use StingerSoft\GaugePresentationBundle\Entity\WordCloud;
use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Model\WordCloudInterface;

/**
 * Service to handle word cloud slides
 */
class WordCloudService extends AbstractSlideService {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getUserForm()
	 */
	public function getUserForm() {
		return WordCloudInterface::class;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getBackendForm()
	 */
	public function getBackendForm() {
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\Slides\AbstractSlideService::getVoteInstance()
	 */
	public function getVoteInstance(UserSessionInterface $session, SlideInterface $slide) {
		if($slide instanceof WordCloudInterface) {
			$vote = parent::getVoteInstance($session, $slide);
			$vote->setAnswers(\array_fill(0, $slide->getAnswerCount(), ''));
			return $vote;
		}
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getSupportedSlideType()
	 */
	public function getSupportedSlideType() {
		return WordCloudInterface::class;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getSlideImplementation()
	 */
	public function getSlideImplementation() {
		return $this->isOrm() ? WordCloud::class : null;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getVoteImplementation()
	 */
	public function getVoteImplementation() {
		return $this->isOrm() ? StringVote::class : null;
	}
}