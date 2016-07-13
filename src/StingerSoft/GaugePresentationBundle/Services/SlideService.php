<?php

namespace StingerSoft\GaugePresentationBundle\Services;

use StingerSoft\GaugePresentationBundle\Model\Session\UserSessionInterface;
use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use StingerSoft\GaugePresentationBundle\Model\VoteInterface;

/**
 * Service to encapsulate the configuration for each slide class.
 */
interface SlideService {

	/**
	 * Gets the class name of the form to be used in the survey mode (frontend)
	 *
	 * @return string
	 */
	public function getUserForm();

	/**
	 * Gets the class name of the form to be used in the configuration mode (backend)
	 *
	 * @return string
	 */
	public function getBackendForm();

	/**
	 * Generates a new configured instance to store the selection of the use (passed as an object to the form type
	 * specified by the getUserForm method).
	 *
	 * @param UserSessionInterface $session        	
	 * @param SlideInterface $slide        	
	 * @return VoteInterface
	 */
	public function getVoteInstance(UserSessionInterface $session, SlideInterface $slide);

	/**
	 * Gets the slide interface which is supported by this service
	 *
	 * @return string
	 */
	public function getSupportedSlideType();

	/**
	 * Generates a new instance of the supported slide class.
	 *
	 * @return SlideInterface
	 */
	public function getSlideImplementation();

	/**
	 * Generates a new instance of the supported use vote class.
	 *
	 * @return SlideInterface
	 */
	public function getVoteImplementation();

	/**
	 * Checks whether the user has already voted on the given slide
	 *
	 * @param UserSessionInterface $session        	
	 * @param SlideInterface $slide        	
	 */
	public function hasUserVoted(UserSessionInterface $session, SlideInterface $slide);

	/**
	 * Gets the route name to render this slide in the presentation mode.
	 * The ID of the slide will be added to the route as the 'slide' parameter
	 *
	 * @param SlideInterface $slide        	
	 * @return string
	 */
	public function getPresentationRoute();

	/**
	 * Returns true if this service is configured to handle ORM entities
	 *
	 * @return boolean
	 */
	public function isOrm();

	/**
	 * Returns true if this service is configured to handle ODM documents
	 *
	 * @return boolean
	 */
	public function isOdm();
}