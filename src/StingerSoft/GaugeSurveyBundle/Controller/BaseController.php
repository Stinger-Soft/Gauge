<?php

namespace StingerSoft\GaugeSurveyBundle\Controller;

use StingerSoft\GaugePresentationBundle\Controller\BaseController as BasePresentationController;
use Symfony\Component\HttpFoundation\Response;
use StingerSoft\GaugePresentationBundle\Model\Themes\BaseTheme;

/**
 * Adds the theme service to each render call
 */
class BaseController extends BasePresentationController {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Bundle\FrameworkBundle\Controller\Controller::render()
	 */
	public function render($view, array $parameters = array(), Response $response = null) {
		$parameters['theme'] = new BaseTheme();
		return parent::render($view, $parameters, $response);
	}
}