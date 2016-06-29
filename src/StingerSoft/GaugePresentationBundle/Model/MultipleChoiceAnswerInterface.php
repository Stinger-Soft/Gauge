<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;

interface MultipleChoiceAnswerInterface extends Identifiable {

	public function getId();

	public function getAnswer();

	public function setAnswer($answer);

	public function getQuestion();

	public function setQuestion($question);
}