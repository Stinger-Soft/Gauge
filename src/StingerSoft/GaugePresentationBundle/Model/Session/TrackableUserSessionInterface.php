<?php

namespace StingerSoft\GaugePresentationBundle\Model\Session;

interface TrackableUserSessionInterface extends UserSessionInterface {
	
	/**
	 *
	 * @return VoteInterface[]
	 */
	public function getVotes();
	
	/**
	 *
	 * @param VoteInterface[] $votes
	 */
	public function setVotes($votes);
}