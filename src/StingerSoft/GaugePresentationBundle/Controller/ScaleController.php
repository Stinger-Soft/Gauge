<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use StingerSoft\GaugePresentationBundle\Model\ScaleInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ScaleController extends SlideController {

	public function presentationAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		
		return $this->render('StingerSoftGaugePresentationBundle:Scale:slide.html.twig', array(
			'slide' => $slide,
			'slideService' => $this->getSlideService($slide) 
		));
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Controller\SlideController::dataAction()
	 */
	public function dataAction(Request $request, $slide) {
		$slide = $this->getSlideById($slide);
		$result = array();
		
		if($slide instanceof ScaleInterface) {
			$answerCount = array();
			foreach($slide->getAnswers() as $answer) {
				$answerCount[$answer->getId()] = array_fill($slide->getLowValue(), $slide->getHighValue(), 0);
			}
			
			/**
			 *
			 * @var \StingerSoft\GaugePresentationBundle\Model\ScaleVoteInterface $vote
			 */
			foreach($slide->getVotes() as $vote) {
				foreach($vote->getRatings() as $rating) {
					if($rating->getRating() < $slide->getLowValue() || $rating->getRating() > $slide->getHighValue()) continue;
					$answerCount[$rating->getAnswer()->getId()][$rating->getRating()]++;
				}
			}
			
			foreach($slide->getAnswers() as $answer) {
				$result[$answer->getId()] = array();
				
				foreach($answerCount[$answer->getId()] as $ratingValue => $count) {
					$result[$answer->getId()][] = array(
						'answer' => $ratingValue,
						'votes' => $count 
					);
				}
			}
		}
		return new JsonResponse($result);
	}
}