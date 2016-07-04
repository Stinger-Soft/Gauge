<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface MultipleChoiceInterface extends SlideInterface {

	public function getAllowMultiple();

	public function setAllowMultiple($allowMultiple);

	public function getShowResultInPercentage();

	public function setShowResultInPercentage($showResultInPercentage);

	/**
	 * @return MultipleChoiceAnswerInterface[] 
	 */
	public function getAnswers();

	public function setAnswers($answers);
}