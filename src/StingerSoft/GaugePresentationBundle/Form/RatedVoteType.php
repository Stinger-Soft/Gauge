<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\RatedVoteInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use StingerSoft\GaugePresentationBundle\Model\AnswerInterface;

class RatedVoteType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
			$builder = $event->getForm();
			/**
			 * @var RatedVoteInterface $vote
			 */
			$vote = $event->getData();
			/**
			 * @var AnswerInterface $answer
			 */
			$answer = $vote ? $vote->getAnswer() : null;
			
			$builder->add('rating', IntegerType::class, array(
				'required' => false,
				'label' => $vote ? $vote->getAnswer() : null,
			));
		});
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', RatedVoteInterface::class);
		$resolver->setDefault('data_class', RatedVoteInterface::class);
	}
}