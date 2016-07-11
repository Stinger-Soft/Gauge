<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Form\WordCloudType;

trait WordCloudTrait {

	protected $count;

	public function getAnswerCount() {
		return $this->count;
	}

	public function setAnswerCount($count) {
		$this->count = $count;
	}
	
	public function getFormType(){
		return WordCloudType::class;
	}
}