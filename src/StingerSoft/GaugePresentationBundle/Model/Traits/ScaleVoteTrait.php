<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Model\RatedVoteInterface;

trait ScaleVoteTrait {

	/**
	 *
	 * @var RatedVoteInterface[]
	 */
	protected $ratings;

	public function getRatings() {
		return $this->ratings;
	}

	public function setRatings($ratings) {
		if($ratings instanceof RatedVoteInterface) {
			$ratings = array(
				$ratings 
			);
		}
		$this->ratings = $ratings;
		return $this;
	}
}