<?php

namespace StingerSoft\GaugePresentationBundle\Model;

use StingerSoft\PlatformBundle\Model\Identifiable;
use StingerSoft\PlatformBundle\Model\Trackable;

interface SlideInterface extends Identifiable, Trackable {

	public function getId();

	public function getQuestion();

	public function setQuestion($question);

	public function setPresentation(PresentationInterface $presentation);

	/**
	 *
	 * @return PresentationInterface
	 */
	public function getPresentation();

	/**
	 *
	 * @return AnswerInterface[]
	 */
	public function getAnswers();

	public function setAnswers($answers);

	public function getDescription();

	public function setDescription($description);

	/**
	 *
	 * @return VoteInterface[]
	 */
	public function getVotes();

	/**
	 *
	 * @param VoteInterface[] $votes        	
	 */
	public function setVotes($votes);

}