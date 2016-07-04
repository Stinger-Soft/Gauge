<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;

interface AnswerInterface extends Identifiable {

	public function getQuestion();

	public function setQuestion(SlideInterface $question);
}