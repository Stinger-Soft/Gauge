<?php

namespace StingerSoft\GaugePresentationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class SlideController extends BaseController {
	
	
	
	public function dataAction(Request $request, $slide){
		$slide = $this->getSlideById($slide);
		$result = array();
		
		if($slide instanceof MultipleChoiceInterface){
			foreach($slide->getAnswers() as $answer){
				$result[] = array(
					'answer' =>$answer->getAnswer(),
					'votes' => random_int(1, 10),
				);
			}
		}
		return new JsonResponse($result);
	}
}