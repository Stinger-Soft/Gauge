<?php

namespace StingerSoft\GaugePresentationBundle\Form;

use StingerSoft\GaugePresentationBundle\Model\SlideInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class SlideType extends AbstractType {

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		if($options['skip']) {
			$builder->add('skip', SubmitType::class, array(
				'label' => 'stinger_soft_gauge_presentation.forms.slide.skip.label',
			));
		} else {
			$builder->add('submit', SubmitType::class, array(
				'label' => 'stinger_soft_gauge_presentation.forms.slide.submit.label',
			));
		}
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::buildView()
	 */
	public function buildView(FormView $view, FormInterface $form, array $options) {
		$view->vars['skip'] = $options['skip'];
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Form\AbstractType::configureOptions()
	 */
	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefault('translation_domain', 'StingerSoftGaugePresentationBundle');
		$resolver->setRequired('slide');
		$resolver->addAllowedTypes('slide', SlideInterface::class);
		
		$resolver->setRequired('skip');
		$resolver->addAllowedTypes('skip', 'bool');
	}
}