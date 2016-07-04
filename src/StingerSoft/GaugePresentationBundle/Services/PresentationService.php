<?php

namespace StingerSoft\GaugePresentationBundle\Services;

interface PresentationService {
	
	
	public function getFreePresentationId();
	
	
	public function unsetOldPresentationIds();
}