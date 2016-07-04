<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface ScaleAnswerInterface extends AnswerInterface {

	public function getAnswer();

	public function setAnswer($answer);
}