<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\ScaleInterface;
use StingerSoft\GaugePresentationBundle\Model\ScaleVoteInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
			'entry_options' => array(
				'required' => false,
				'label' => false,
				'translation_domain' => false 
			),
			'allow_add' => true,
			'allow_delete' => true,
			'label' => false,
			'translation_domain' => false 
		));
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', ScaleVoteInterface::class);
		$resolver->addAllowedTypes('slide', ScaleInterface::class);
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::getParent()
	 */
	public function getParent() {
		return SlideType::class;
	}
}