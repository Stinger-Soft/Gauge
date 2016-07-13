<?php

namespace StingerSoft\GaugePresentationBundle\DataFixtures\ORM;

use StingerSoft\GaugePresentationBundle\Entity\MultipleChoice;
use StingerSoft\GaugePresentationBundle\Entity\Presentation;
use StingerSoft\GaugePresentationBundle\Model\Enums\Pace;
use StingerSoft\GaugePresentationBundle\Model\Enums\Privacy;
use StingerSoft\PlatformBundle\DataFixtures\AbstractStingerFixture;
use StingerSoft\GaugePresentationBundle\Entity\MultipleChoiceAnswer;
use StingerSoft\GaugePresentationBundle\Entity\WordCloud;
use StingerSoft\GaugePresentationBundle\Entity\Scale;
use StingerSoft\GaugePresentationBundle\Entity\ScaleAnswer;

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
	
		$multipleChoiceSlideAnswer = new MultipleChoiceAnswer();
		$multipleChoiceSlideAnswer->setAnswer('Spring');
		$multipleChoiceSlideAnswer->setQuestion($multipleChoiceSlide);
		$this->manager->persist($multipleChoiceSlideAnswer);
		$this->manager->flush();
		
		$multipleChoiceSlideAnswer = new MultipleChoiceAnswer();
		$multipleChoiceSlideAnswer->setAnswer('Summer');
		$multipleChoiceSlideAnswer->setQuestion($multipleChoiceSlide);
		$this->manager->persist($multipleChoiceSlideAnswer);
		$this->manager->flush();
		
		$multipleChoiceSlideAnswer = new MultipleChoiceAnswer();
		$multipleChoiceSlideAnswer->setAnswer('Fall');
		$multipleChoiceSlideAnswer->setQuestion($multipleChoiceSlide);
		$this->manager->persist($multipleChoiceSlideAnswer);
		$this->manager->flush();
		
		$multipleChoiceSlideAnswer = new MultipleChoiceAnswer();
		$multipleChoiceSlideAnswer->setAnswer('Winter');
		$multipleChoiceSlideAnswer->setQuestion($multipleChoiceSlide);
		$this->manager->persist($multipleChoiceSlideAnswer);
		$this->manager->flush();
		
		
		$wordCloud = new WordCloud();
		$wordCloud->setAnswerCount(3);
		$wordCloud->setQuestion('Nenne bis zu 3 Biersorten');
		$wordCloud->setPresentation($presentation);
		$this->manager->persist($wordCloud);
		$this->manager->flush();
		
		
		$scale = new Scale();
		$scale->setQuestion('Rate a beer');
		$scale->setPresentation($presentation);
		$this->manager->persist($scale);
		$this->manager->flush();
		
		$scaleAnswer = new ScaleAnswer();
		$scaleAnswer->setAnswer('Haake Beck');
		$scaleAnswer->setQuestion($scale);
		$this->manager->persist($scaleAnswer);
		$this->manager->flush();
		
		$scaleAnswer = new ScaleAnswer();
		$scaleAnswer->setAnswer('Hemelinger');
		$scaleAnswer->setQuestion($scale);
		$this->manager->persist($scaleAnswer);
		$this->manager->flush();
		
		$scaleAnswer = new ScaleAnswer();
		$scaleAnswer->setAnswer('Beck\'s');
		$scaleAnswer->setQuestion($scale);
		$this->manager->persist($scaleAnswer);
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