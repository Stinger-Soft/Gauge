<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\StringVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\WordCloudInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WordCloudType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		/**
		 *
		 * @var WordCloudInterface $slide
		 */
		$slide = $options['slide'];
		
		$builder->add('answers', CollectionType::class, array(
			'entry_type' => TextType::class,
			'entry_options' => array(
				'required' => false,
				'label' => false,
				'translation_domain' => false,
			),
			'allow_add' => true,
			'allow_delete' => true,
			'translation_domain' => false,
		));
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', StringVoteInterface::class);
		$resolver->setRequired('slide');
		$resolver->addAllowedTypes('slide', WordCloudInterface::class);
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