<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\RatedVoteInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RatedVoteType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('rating', IntegerType::class, array(
			'required' => false 
		));
		
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('class', RatedVoteInterface::class);
		$resolver->setDefault('data_class', RatedVoteInterface::class);
	}
}