<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Form\MultipleChoiceType;
use StingerSoft\GaugePresentationBundle\Model\Enums\ChartType;

trait MultipleChoiceTrait {

	protected $allowMultiple;

	protected $showResultInPercentage;
	
	protected $chartType = ChartType::PIE;

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

	public function getChartType() {
		return $this->chartType;
	}

	public function setChartType($chartType) {
		$this->chartType = $chartType;
		return $this;
	}
	
	

}