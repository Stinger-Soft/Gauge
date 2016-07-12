<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\RatedVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\ScaleInterface;
use StingerSoft\GaugePresentationBundle\Model\ScaleVoteInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScaleType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		/**
		 *
		 * @var ScaleInterface $slide
		 */
		$slide = $options['slide'];
		
		$builder->add('ratings', CollectionType::class, array(
			'entry_type' => RatedVoteType::class,
// 			'data_class' => RatedVoteInterface::class,
			'allow_add' => true,
			'allow_delete' => true 
		));
		
		$builder->add('submit', SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', ScaleVoteInterface::class);
		$resolver->setRequired('slide');
		$resolver->addAllowedTypes('slide', ScaleInterface::class);
	}
}