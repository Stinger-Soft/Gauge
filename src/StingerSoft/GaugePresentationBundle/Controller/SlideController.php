<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class SlideController extends BaseController {

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
					'votes' => $answerCount[$answer->getId()],
				);
			}
		}
		return new JsonResponse($result);
	}
}