<?php

namespace StingerSoft\GaugePresentationBundle\DataFixtures\ORM;

use StingerSoft\GaugePresentationBundle\Entity\MultipleChoice;
use StingerSoft\GaugePresentationBundle\Entity\Presentation;
use StingerSoft\GaugePresentationBundle\Model\Enums\Pace;
use StingerSoft\GaugePresentationBundle\Model\Enums\Privacy;
use StingerSoft\PlatformBundle\DataFixtures\AbstractStingerFixture;

class ExamplePresentation extends AbstractStingerFixture {

	public function import() {
		$presentation = $this->getPresentation();
		$presentation->setTitle('Example Presentation');
		$presentation->setPrivacy(Privacy::PRIVACY_ANONYMOUS);
		$presentation->setPace(Pace::PACE_PRESENTER);
		$this->manager->persist($presentation);
		$this->manager->flush();
		
		$multipleChoiceSlide = $this->getMultipleChoiceSlide();
		$multipleChoiceSlide->setQuestion('What is your favorite season?');
		$multipleChoiceSlide->setPresentation($presentation);
		$this->manager->persist($multipleChoiceSlide);
		$this->manager->flush();
	}

	/**
	 *
	 * @return \StingerSoft\GaugePresentationBundle\Model\PresentationInterface
	 */
	protected function getPresentation() {
		return new Presentation();
	}

	/**
	 *
	 * @return \StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface
	 */
	protected function getMultipleChoiceSlide() {
		return new MultipleChoice();
	}
}