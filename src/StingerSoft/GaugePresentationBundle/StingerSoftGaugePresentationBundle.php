<?php

namespace StingerSoft\GaugePresentationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use StingerSoft\PlatformBundle\StingerSoftPlatformBundle;

class StingerSoftGaugePresentationBundle extends Bundle {

	public static function getRequiredBundles($env) {
		$bundles = array();
		$bundles['StingerSoftGaugePresentationBundle'] = '\StingerSoft\GaugePresentationBundle\StingerSoftGaugePresentationBundle';
		$bundles['StingerSoftAmChartBundle'] = '\StingerSoft\AmChartBundle\StingerSoftAmChartBundle';
		
		// START remove later
		$bundles['DoctrineBehaviorsBundle'] = '\Knp\DoctrineBehaviors\Bundle\DoctrineBehaviorsBundle';
		$bundles['DoctrineFixturesBundle'] = '\Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
		$bundles['BmatznerFontAwesomeBundle'] = '\Bmatzner\FontAwesomeBundle\BmatznerFontAwesomeBundle';
		$bundles['AsseticBundle'] = '\Symfony\Bundle\AsseticBundle\AsseticBundle';
		// END remove later
		
		$bundles = array_merge($bundles, StingerSoftPlatformBundle::getRequiredBundles($env));
		$bundles = array_merge($bundles, \StingerSoft\D3JsBundle\StingerSoftD3JsBundle::getRequiredBundles($env));
		return $bundles;
	}
}
