<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use StingerSoft\GaugePresentationBundle\Model\WordCloudInterface;

class WordCloudController extends SlideController {

	public function presentationAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		
		return $this->render('StingerSoftGaugePresentationBundle:WordCloud:slide.html.twig', array(
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
		
		if($slide instanceof WordCloudInterface) {
			$answers = array();
			
			/**
			 *
			 * @var \StingerSoft\GaugePresentationBundle\Model\StringVoteInterface $vote
			 */
			foreach($slide->getVotes() as $vote) {
				foreach($vote->getAnswers() as $answer){
					if(!isset($answers[$answer])){
						$answers[$answer] = 1;
					} else {
						$answers[$answer] = $answers[$answer] + 1;
					}
				}
			}
			
			foreach($answers as $answer => $count) {
				$result[] = array(
					'text' => $answer,
					'count' => $count
				);
			}
		}
		return new JsonResponse($result);
	}
}