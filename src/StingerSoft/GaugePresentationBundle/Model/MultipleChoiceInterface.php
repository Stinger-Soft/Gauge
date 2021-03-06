<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface MultipleChoiceInterface extends SlideInterface {

	public function getAllowMultiple();

	public function setAllowMultiple($allowMultiple);

	public function getShowResultInPercentage();

	public function setShowResultInPercentage($showResultInPercentage);
	
	public function getAnswerClassName();
	
	public function getChartType();
	
	public function setChartType($chartType);


}