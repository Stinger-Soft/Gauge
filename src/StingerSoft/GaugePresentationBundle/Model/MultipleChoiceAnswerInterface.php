<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface MultipleChoiceAnswerInterface extends AnswerInterface {

	public function getAnswer();

	public function setAnswer($answer);
}