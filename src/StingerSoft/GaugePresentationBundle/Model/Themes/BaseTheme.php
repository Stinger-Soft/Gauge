<?php

namespace StingerSoft\GaugePresentationBundle\Model\Themes;

class BaseTheme implements ThemeInterface {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Model\Themes\ThemeInterface::getFormTheme()
	 */
	public function getFormTheme() {
		return 'bootstrap_3_horizontal_layout.html.twig';
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Model\Themes\ThemeInterface::getBrandImage()
	 */
	public function getBrandImage() {
		return 'bundles/stingersoftgaugepresentation/img/brand.png' ;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Model\Themes\ThemeInterface::getBrandName()
	 */
	public function getBrandName() {
		return 'Stinger Gauge';
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Model\Themes\ThemeInterface::getSurveyLayoutTemplate()
	 */
	public function getSurveyLayoutTemplate() {
		return 'StingerSoftGaugeSurveyBundle:Themes:bootstrap.html.twig';
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \StingerSoft\GaugePresentationBundle\Model\Themes\ThemeInterface::getPresentationLayoutTemplate()
	 */
	public function getPresentationLayoutTemplate() {
		// TODO: Auto-generated method stub
	}
}