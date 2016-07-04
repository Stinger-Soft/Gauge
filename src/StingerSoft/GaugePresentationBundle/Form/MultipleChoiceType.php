<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceInterface;
use Symfony\Component\Form\FormBuilderInterface;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceVoteInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use StingerSoft\GaugePresentationBundle\Model\MultipleChoiceAnswerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MultipleChoiceType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		/**
		 *
		 * @var MultipleChoiceInterface $slide
		 */
		$slide = $options['slide'];
		$builder->add('answers', EntityType::class, array(
			'expanded' => true,
			'multiple' => $slide->getAllowMultiple(),
			'class' => $slide->getAnswerClassName(), 
		));
		$builder->add('submit', SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', MultipleChoiceVoteInterface::class);
		$resolver->setRequired('slide');
		$resolver->addAllowedTypes('slide', MultipleChoiceInterface::class);
	}
}