<?php

namespace StingerSoft\GaugePresentationBundle\Model\Traits;

use StingerSoft\GaugePresentationBundle\Form\ScaleType;

trait ScaleTrait {

	protected $lowValue;

	protected $lowLabel;

	protected $highValue;

	protected $highLabel;

	public function getLowValue() {
		return $this->lowValue ?: 1;
	}

	public function setLowValue($lowValue) {
		$this->lowValue = $lowValue;
		return $this;
	}

	public function getLowLabel() {
		return $this->lowLabel;
	}

	public function setLowLabel($lowLabel) {
		$this->lowLabel = $lowLabel;
		return $this;
	}

	public function getHighValue() {
		return $this->highValue ?: 10;
	}

	public function setHighValue($highValue) {
		$this->highValue = $highValue;
		return $this;
	}

	public function getHighLabel() {
		return $this->highLabel;
	}

	public function setHighLabel($highLabel) {
		$this->highLabel = $highLabel;
		return $this;
	}

	public function getFormType() {
		return ScaleType::class;
	}
}