<?php

namespace StingerSoft\GaugeSurveyBundle\Controller;

use StingerSoft\GaugePresentationBundle\Controller\BaseController as BasePresentationController;
use Symfony\Component\HttpFoundation\Response;
use StingerSoft\GaugePresentationBundle\Model\Themes\BaseTheme;

class BaseController extends BasePresentationController {

	public function render($view, array $parameters = array(), Response $response = null) {
		$parameters['theme'] = new BaseTheme();
		return parent::render($view, $parameters, $response);
	}
}