<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

trait WordCloudTrait {

	protected $count;

	public function getAnswerCount() {
		return $this->count;
	}

	public function setAnswerCount($count) {
		$this->count = $count;
	}
}