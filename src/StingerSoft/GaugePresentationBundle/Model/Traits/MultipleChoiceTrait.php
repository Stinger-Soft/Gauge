<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Form\MultipleChoiceType;

trait MultipleChoiceTrait {

	protected $allowMultiple;

	protected $showResultInPercentage;

	public function getAllowMultiple() {
		return $this->allowMultiple;
	}

	public function setAllowMultiple($allowMultiple) {
		$this->allowMultiple = $allowMultiple;
		return $this;
	}

	public function getShowResultInPercentage() {
		return $this->showResultInPercentage;
	}

	public function setShowResultInPercentage($showResultInPercentage) {
		$this->showResultInPercentage = $showResultInPercentage;
		return $this;
	}
	
	public function getFormType(){
		return MultipleChoiceType::class;
	}
	

}