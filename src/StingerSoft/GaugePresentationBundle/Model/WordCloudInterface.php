<?php

namespace StingerSoft\GaugePresentationBundle\Model;

interface WordCloudInterface extends SlideInterface {

	public function getAnswerCount();

	public function setAnswerCount($count);
}