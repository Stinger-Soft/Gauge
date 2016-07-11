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
use StingerSoft\GaugePresentationBundle\Model\StringVoteInterface;
use StingerSoft\GaugePresentationBundle\Model\WordCloudInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class WordCountType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		/**
		 *
		 * @var WordCloudInterface $slide
		 */
		$slide = $options['slide'];
		
		$builder->add('answers', CollectionType::class, array(
			'entry_type' => TextType::class,
			'allow_add' => true,
			'allow_delete' => true 
		));
		
		$builder->add('submit', SubmitType::class);
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', StringVoteInterface::class);
		$resolver->setRequired('slide');
		$resolver->addAllowedTypes('slide', WordCloudInterface::class);
	}
}