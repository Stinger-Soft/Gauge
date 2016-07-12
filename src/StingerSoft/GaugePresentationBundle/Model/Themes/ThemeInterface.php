<?php

namespace StingerSoft\GaugePresentationBundle\Model\Themes;

interface ThemeInterface {

	/**
	 *
	 * @return string
	 */
	public function getFormTheme();

	/**
	 *
	 * @return string
	 */
	public function getBrandImage();

	/**
	 *
	 * @return string
	 */
	public function getBrandName();

	/**
	 *
	 * @return string
	 */
	public function getSurveyLayoutTemplate();

	/**
	 *
	 * @return string
	 */
	public function getPresentationLayoutTemplate();
}