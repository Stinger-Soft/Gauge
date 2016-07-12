<?php

namespace StingerSoft\GaugePresentationBundle\Services\Slides;

use StingerSoft\GaugePresentationBundle\Entity\MultipleChoice;
use StingerSoft\GaugePresentationBundle\Entity\MultipleChoiceVote;
use StingerSoft\GaugePresentationBundle\Form\MultipleChoiceType;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;

/**
 * Service to handle multiple choice slides
 */
class MultipleChoiceService extends AbstractSlideService {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getUserForm()
	 */
	public function getUserForm() {
		return MultipleChoiceType::class;
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
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getSupportedSlideType()
	 */
	public function getSupportedSlideType() {
		return MultipleChoiceInterface::class;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getSlideImplementation()
	 */
	public function getSlideImplementation() {
		return $this->isOrm() ? MultipleChoice::class : null;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Services\SlideService::getVoteImplementation()
	 */
	public function getVoteImplementation() {
		return $this->isOrm() ? MultipleChoiceVote::class : null;
	}
}