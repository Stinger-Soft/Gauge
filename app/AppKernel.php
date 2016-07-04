<?php
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use StingerSoft\GaugePresentationBundle\StingerSoftGaugePresentationBundle;
use StingerSoft\PlatformBundle\StingerSoftPlatformBundle;
use StingerSoft\GaugeSurveyBundle\StingerSoftGaugeSurveyBundle;
class AppKernel extends Kernel {

	public function registerBundles() {
		$bundleClasses = StingerSoftGaugePresentationBundle::getRequiredBundles($this->getEnvironment());
		$bundleClasses = array_merge($bundleClasses, StingerSoftGaugeSurveyBundle::getRequiredBundles($this->getEnvironment()));
		$bundles = StingerSoftPlatformBundle::initBundles($bundleClasses);
		return $bundles;
	}

	public function getRootDir() {
		return __DIR__;
	}

	public function getCacheDir() {
		return dirname(__DIR__) . '/var/cache/' . $this->getEnvironment();
	}

	public function getLogDir() {
		return dirname(__DIR__) . '/var/logs';
	}

	public function registerContainerConfiguration(LoaderInterface $loader) {
		$loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
	}
}
