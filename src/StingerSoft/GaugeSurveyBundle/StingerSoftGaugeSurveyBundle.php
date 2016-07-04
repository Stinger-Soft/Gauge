<?php

namespace StingerSoft\GaugeSurveyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use StingerSoft\PlatformBundle\StingerSoftPlatformBundle;
use StingerSoft\GaugePresentationBundle\StingerSoftGaugePresentationBundle;

class StingerSoftGaugeSurveyBundle extends Bundle {

	public static function getRequiredBundles($env) {
		$bundles = array();
		$bundles['StingerSoftGaugeSurveyBundle'] = '\StingerSoft\GaugeSurveyBundle\StingerSoftGaugeSurveyBundle';
		$bundles = array_merge($bundles, StingerSoftGaugePresentationBundle::getRequiredBundles($env));
		
		$bundles = array_merge($bundles, StingerSoftPlatformBundle::getRequiredBundles($env));
		return $bundles;
	}
}
