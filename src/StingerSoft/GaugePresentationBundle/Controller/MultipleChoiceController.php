<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MultipleChoiceController extends SlideController {

	public function presentationAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		
		return $this->render('StingerSoftGaugePresentationBundle:MultipleChoice:slide.html.twig', array(
			'slide' => $slide,
			'slideService' => $this->getSlideService($slide),
		));
	}

	/**
	 * {@inheritDoc}
	 * @see \StingerSoft\GaugePresentationBundle\Controller\SlideController::dataAction()
	 */
	public function dataAction(Request $request, $slide) {
		
		$slide = $this->getSlideById($slide);
		$result = array();
		
		if($slide instanceof MultipleChoiceInterface) {
			$answerCount = array();
			foreach($slide->getAnswers() as $answer) {
				$answerCount[$answer->getId()] = 0;
			}
			
			/**
			 *
			 * @var \StingerSoft\GaugePresentationBundle\Model\MultipleChoiceVoteInterface $vote
			 */
			foreach($slide->getVotes() as $vote) {
				foreach($vote->getAnswers() as $answer) {
					$answerCount[$answer->getId()]++;
				}
			}
			
			foreach($slide->getAnswers() as $answer) {
				$result[] = array(
					'answer' => $answer->getAnswer(),
					'votes' => $answerCount[$answer->getId()] 
				);
			}
		}
		return new JsonResponse($result);
	}
}