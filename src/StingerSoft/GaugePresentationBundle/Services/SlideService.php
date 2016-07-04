<?php

namespace StingerSoft\GaugePresentationBundle\Services;

interface SlideService {
	
	/**
	 * @return string
	 */
	public function getUserForm();
	
	/**
	 * @return string
	 */
	public function getBackendForm();
}