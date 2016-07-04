<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface ScaleInterface extends SlideInterface {
	
	public function getLowValue();
	
	public function setLowValue($value);
	
	public function getHighValue();
	
	public function setHighValue($value);
	
	public function getLowLabel();
	
	public function setLowLabel($label);
	
	public function getHighLabel();
	
	public function setHighLabel($label);
	
}