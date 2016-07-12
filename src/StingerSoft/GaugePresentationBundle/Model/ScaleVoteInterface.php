<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface ScaleVoteInterface extends VoteInterface {

	/**
	 *
	 * @return RatedVoteInterface[]
	 */
	public function getRatings();

	/**
	 *
	 * @param $ratings RatedVoteInterface[]        	
	 */
	public function setRatings($ratings);
}